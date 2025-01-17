<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\BankRates;
use App\Models\Bank;
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

        if(isset($_GET['vfilter'])){
            $vfilter = $_GET['vfilter'];
        }else{
            $vfilter = 'Motor Car Leasing';
        }

        $filterdbanks = Bank::whereHas('bankRates', function($query) use ($vfilter) {
            $query->where('status', 1)
                ->where('vehicle_type', $vfilter);
        })->get();
        foreach ($filterdbanks as $bank) {
            $bank->filterdrates = BankRates::where('bank_id', $bank->id)->where('status', 1)->where('vehicle_type', $vfilter )->get();
            if (!$bank->filterdrates->isEmpty()) {
                $noFilteredRates = false;
            }
        }

         if ($noFilteredRates) {
            $notify[] = ['error', 'No rates found for ' . $vfilter . ' in any bank'];
        }

        $vehicle_types = BankRates::select('vehicle_type')->distinct()->get();



        return view('eazyhome', compact('banks', 'vehicle_types','filterdbanks' ,'vfilter','notify'));
    }

    public function getBankRates($bankId)
{
    $BankRates = BankRates::where('bank_id', $bankId)->where('status', 1)->get();
    return response()->json($BankRates);
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

    public function submitQuotationRequest(Request $request)
    {
        $request->validate([
            'leasing_company_id' => 'required',
            'rate_id' => 'required',
            'rate' => 'required',
            'amount' => 'required',
            'installment' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
        ]);
        $regex = "/^([0-9\s\-\+\(\)]*)$/";
        if (!preg_match($regex, $request->mobile)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Mobile number is invalid'
            ]);
        }



        $quotationRequest = new QuotationRequest();
        $quotationRequest->bank_id = $request->leasing_company_id;
        $quotationRequest->rate_id = $request->rate_id;
        $quotationRequest->rate = $request->rate;
        $quotationRequest->amount = $request->amount;
        $quotationRequest->installment = $request->installment;
        $quotationRequest->note = $request->note ?? '';
        $quotationRequest->requester_name = $request->requester_name ?? '';
        $quotationRequest->email = $request->email;
        $quotationRequest->mobile = $request->mobile;

        $quotationRequest->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Quotation request submitted successfully'
        ]);
    }
}