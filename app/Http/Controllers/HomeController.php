<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Blade;
use App\Models\BankRates;
use App\Models\Bank;
use App\Models\Blog;
use App\Models\Insurance;
use App\Models\QuotationRequest;
use App\Helpers\NotifyHelper;

class HomeController extends Controller
{

    public function index(): View
    {


        $banks = Bank::where('status', 1)->get();
        foreach ($banks as $bank) {
            $bank->rates = BankRates::where('bank_id', $bank->id)->where('status', 1)->get();
        }

        $notify = [];
        $noFilteredRates = true;

        $vehicle_types = BankRates::select('vehicle_type')->distinct()->get();
        $leasing_periods = BankRates::select('year')->distinct()->orderBy('year','asc')->get();
        $blogs = Blog::where('status', 1)->get();


        if(isset($_GET['vfilter'])){
            $vfilter = $_GET['vfilter'];
        }else{
            $vfilter = 'Motor Vehicle - Registered';
        }

        if(isset($_GET['pfilter'])){
            $pfilter = $_GET['pfilter'];
            $filterdbanks = Bank::whereHas('bankRates', function ($query) use ($vfilter, $pfilter) {
                $query->where('status', 1)
                    ->where('vehicle_type', $vfilter)
                    ->where('year', $pfilter);
            })->get();
        }else{
            $pfilter = 'all';
            $filterdbanks = Bank::whereHas('bankRates', function($query) use ($vfilter) {
            $query->where('status', 1)
                ->where('vehicle_type', $vfilter);
            })->get();
        }


        foreach ($filterdbanks as $bank) {
            $bank->filterdrates = BankRates::where('bank_id', $bank->id)->where('status', 1)->where('vehicle_type', $vfilter )->get();
            if($pfilter != 'all'){
                $bank->filterdrates = $bank->filterdrates->where('year', $pfilter);
            }
            if (!$bank->filterdrates->isEmpty()) {
                $noFilteredRates = false;
            }
        }

        if ($noFilteredRates) {
            $notify[] = ['error', 'No rates found for your request in any leasing company'];
        }
        return view('eazyhome', compact('banks','blogs', 'vehicle_types','leasing_periods','filterdbanks' ,'vfilter','pfilter','notify'));
    }

    public function getBankRates($bankId)
{
    $BankRates = BankRates::where('bank_id', $bankId)->where('status', 1)->orderBy('year', 'desc')->get();
    return response()->json($BankRates);
}


public function vehicleImport(): View
{
    $banks = Bank::where('status', 1)->get();
    return view('vehicleimport', compact('banks'));
}

public function vehicleInsurance(): View
{
    $banks = Bank::where('status', 1)->get();

    $insuranceCompanies = Insurance::where('status', 1)->get();
    return view('vehicleinsurance', compact('banks','insuranceCompanies'));
}


    public function aboutUs(): View
    {
        $banks = Bank::where('status', 1)->get();
        return view('about-us', compact('banks'));
    }

    public function contactUs(): View
    {
        $banks = Bank::where('status', 1)->get();
        return view('contact-us' , compact('banks'));
    }

    public function terms(): View
    {
        $banks = Bank::where('status', 1)->get();
        return view('terms', compact('banks'));
    }

    public function privacy(): View
    {
        $banks = Bank::where('status', 1)->get();
        return view('privacypolicy', compact('banks'));
    }

    public function blog(): View
    {
        $blogs = Blog::where('status', 1)->get();
        $banks = Bank::where('status', 1)->get();
        return view('blog.index', compact('blogs','banks'));
    }

    public function blogDetail($slug): View
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $banks = Bank::where('status', 1)->get();
        return view('blogpost', compact('blog','banks'));
    }

    public function submitQuotationRequest(Request $request)
    {
        $request->validate([
            'mobile' => 'required',
            'city' => 'required',

        ]);
        $regex = "/^([0-9\s\-\+\(\)]*)$/";
        if (!preg_match($regex, $request->mobile)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Mobile number is invalid'
            ]);
        }



        $quotationRequest = new QuotationRequest();
        $quotationRequest->bank_id = $request->leasing_company_id ?? 0;
        $quotationRequest->rate_id = $request->rate_id ?? 0;
        $quotationRequest->rate = $request->rate ?? 0;
        $quotationRequest->amount = $request->amount = str_replace(',', '', $request->amount) ?? 0;
        $quotationRequest->installment = $request->installment ?? 0;
        $quotationRequest->note = $request->leasing_period ?? '';
        $quotationRequest->leasing_period = $request->leasing_period ?? '';
        $quotationRequest->requester_name = $request->requester_name ?? '';
        $quotationRequest->email = $request->email ?? '';
        $quotationRequest->mobile = $request->mobile;
        $quotationRequest->city = $request->city;
        $quotationRequest->vmodel = $request->vehicle_type ?? '';
        $quotationRequest->year = $request->vehicle_year ?? '';

        $quotationRequest->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Quotation request submitted successfully'
        ]);
    }

    public function saveCallbackRequest(Request $request)
    {
        $request->validate([
            'mobile' => 'required',
        ]);
        $regex = "/^([0-9\s\-\+\(\)]*)$/";
        if (!preg_match($regex, $request->mobile)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Mobile number is invalid'
            ]);
        }

        $quotationRequest = new QuotationRequest();
        $quotationRequest->note = $request->note ?? '';
        $quotationRequest->mobile = $request->mobile;
        $quotationRequest->callrequest = 1;

        $quotationRequest->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Callback request submitted successfully'
        ]);
    }
}
