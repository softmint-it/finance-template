<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\BankRates;
use App\Models\Bank;

class HomeController extends Controller
{

    public function index(): View
    {
        $banks = Bank::all();
        $bankRates = BankRates::all();

        return view('eazyhome', compact('banks', 'bankRates'));
    }

    public function getBankRates($bankId)
{
    $BankRates = BankRates::where('bank_id', $bankId)->get();
    return response()->json($BankRates);
}


    public function aboutUs(): View
    {
        return view('about-us');
    }

    public function contactUs(): View
    {
        return view('contact-us');
    }
}