<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Blade;
use App\Models\BankRates;
use App\Models\Bank;
use App\Models\Blog;
use App\Models\Insurance;
use App\Models\QuotationRequest;
use App\Helpers\NotifyHelper;
use App\Helpers\SMSGateway;

class HomeController extends Controller
{

    public function index(): View
    {
        $banks = Bank::where('status', 1)->get();
        foreach ($banks as $bank) {
            $bank->rates = BankRates::where('bank_id', $bank->id)->where('status', 1)->get();
            $bank->hasrates = $bank->rates->isNotEmpty();
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

    $vehicles = [
    ['id' => 1, 'name' => 'TOYOTA Prius 2024', 'image' => 'prius-2024.png'],
    ['id' => 2, 'name' => 'SUZUKI WagonR 2024', 'image' => 'wagonr-2024.png'],
    ['id' => 3, 'name' => 'MARUTI Suzuki Alto', 'image' => 'alto-2024.png'],
    ['id' => 4, 'name' => 'AUDI A3 Hybrid 1000cc', 'image' => 'audi-a3-hybrid.png'],
    ['id' => 5, 'name' => 'BMW 3 Series Diesel', 'image' => 'bmw-3-2024.png'],
    ['id' => 6, 'name' => 'MERCEDES Benz C Class Petrol', 'image' => 'banz-c-2024.png'],
    ['id' => 7, 'name' => 'MAZDA CX-5 Petrol', 'image' => 'cx-5-2024.png'],
    ['id' => 8, 'name' => 'HONDA Vezel Petrol', 'image' => 'vezel-petrol-2024.png'],
    ['id' => 9, 'name' => 'BYD Atto 3', 'image' => 'atto-3-2024.png'],
    ['id' => 10, 'name' => 'NISSAN Xtrail Petrol', 'image' => 'xtrail-2024.png'],
    ['id' => 11, 'name' => 'Tesla Model Y', 'image' => 'tesla-y-2024.png'],
    ['id' => 12, 'name' => 'TOYOTA Aqua Hybrid', 'image' => 'aqua-2024.png'],
    ['id' => 13, 'name' => 'TOYOTA Camry Petrol Hybrid', 'image' => 'camry-hybrid-2024.png'],
    ['id' => 14, 'name' => 'SUBARU Forester Petrol', 'image' => 'forester-2024.png'],
];

$pdfDocuments = [
    ['title' => 'Customs Duty and VAT', 'file' => 'Customs-Duty-and-VAT.pdf'],
    ['title' => 'Electric Vehicle Tax', 'file' => 'Electric-Vehicle-Tax.pdf'],
    ['title' => 'Excise Duty Rates', 'file' => 'Excise-Duty-rates.pdf'],
    ['title' => 'Luxury Tax Gazette', 'file' => 'Luxury-tax-gazette.pdf'],
];

    return view('vehicleimport', compact('banks', 'vehicles', 'pdfDocuments'));
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

public function blogDetail($slug)
{
    $notify = [];
    try {
        $blog = Blog::where('slug', $slug)->firstOrFail();
    } catch (ModelNotFoundException $e) {
        $notify[] = ['error', 'Blog not found'];
        return back()->with('notify', $notify);
    }
    $banks = Bank::where('status', 1)->get();
    $otherBlogs = Blog::where('status', 1)->where('id', '!=', $blog->id)->get();
    return view('blogpost', compact('blog', 'banks', 'notify','otherBlogs'));
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
        $quotationRequest->amount = str_replace(',', '', $request->amount) ?? 0;
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

        $bankname = "";
        $bank = Bank::find($quotationRequest->bank_id);
        if($bank) {
            $bankname = $bank->name;
        }

        $mobilenumber = $request->mobile;
        $msg = "Hi! Thanks for reaching out to EasyLeasing.lk. We’ll call you soon. Need help sooner? Call us at 011-3175444";

        $adminmsg = "New Inquiry! \nCustomer : ".$quotationRequest->requester_name. " ( ".$quotationRequest->mobile. " ) from ".$quotationRequest->city. " has send a inquiry for ".$quotationRequest->vmodel." ".$quotationRequest->year. " requested LKR ".$request->amount. " ( ". $quotationRequest->rate ."% - ".$quotationRequest->leasing_period." Years ) from ".$bankname ;

        $messagesend = SMSGateway::send($mobilenumber, $msg);
        $messagesend = SMSGateway::send('0777261026', $adminmsg);

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

        $mobilenumber = $request->mobile;
        $msg = "Hi! Thanks for reaching out to EasyLeasing.lk. We will call you soon. Need help sooner? Call us at 011-3175444";
        $adminmsg = "New Inquiry! \nCustomer Call request from ".$quotationRequest->mobile;

        $messagesend = SMSGateway::send($mobilenumber, $msg);
        $messagesend = SMSGateway::send('0777261026', $adminmsg);

        return response()->json([
            'status' => 'success',
            'message' => 'Call request submitted successfully'
        ]);
    }
}
