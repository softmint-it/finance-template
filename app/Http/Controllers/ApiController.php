<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Blade;
use App\Models\BankRates;

class ApiController extends Controller
{
    public function getGoogleReviews()
    {
        $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJP9AEmNdb4joRE6aDMlKgwto&fields=reviews&key=AIzaSyAlOf6kvCTyJEyKMkEB1Fmxo-xrSsTSncw";
        $header = [
            "Content-Type: application/json",
            "Accept: application/json"
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);
        
        // Decode the JSON response
        $data = json_decode($result, true);
    
        // Check if reviews exist in the response
        if (isset($data['result']['reviews'])) {
            $reviews = $data['result']['reviews'];
        } else {
            $reviews = []; // Return an empty array if no reviews are found
        }
    
        return response()->json($reviews, 200);
    }
    
    /*
    public function getGoogleReviews()
    {
        $url = "https://mybusiness.googleapis.com/v4/accounts/{accountId}/locations/{locationId}/reviews";
        $header = [
            "Authorization: Bearer 143|YRfx0Q4Eb7Q4UTLnfiWhi19uxIgJMMhN8JZuuchT",
            "Content-Type: application/json",
            "Accept: application/json"
        ];
        $params = json_encode([
            "recipient" => $mobilenumber,
            "sender_id" => "Easy Lease",
            "type" => "plain",
            "message" => strip_tags($msg)
        ]);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);
        
        // Decode the JSON response
        $data = json_decode($result, true);
    
        // Check if reviews exist in the response
        if (isset($data['result']['reviews'])) {
            $reviews = $data['result']['reviews'];
        } else {
            $reviews = []; // Return an empty array if no reviews are found
        }
    
        return response()->json($reviews, 200);
    }
    */
}
