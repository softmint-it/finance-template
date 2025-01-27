<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApiController;

// Route::get('/', function () {

//     return view('eazyhome');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about-us', 'aboutUs')->name('about-us');
    Route::get('/contact-us', 'contactUs')->name('contact-us');
    Route::get('/get-bank-rates/{bankId}', 'getBankRates')->name('get-bank-rates');
    Route::post('/submit-quotation-request', 'submitQuotationRequest')->name('submit-quotation-request');
    Route::post('/submit-request-call','saveCallbackRequest')->name('submit-request-call');
    Route::get('/vehicle-import-cost-calculator-sri-lanka', 'vehicleImport')->name('vehicle-import');
    Route::get('/vehicle-insurance', 'vehicleInsurance')->name('vehicle-insurance');

    Route::get('/terms-and-conditions', 'terms')->name('terms');
    Route::get('/privacy-policy', 'privacy')->name('privacy');

    Route::get('/blogs', 'blog')->name('blogs');
    Route::get('/article/{slug}', 'blogDetail')->name('blog');
});

Route::controller(ApiController::class)->group(function () {
    Route::get('api/getgooglereviews', 'getGoogleReviews')->name('get-google-reviews');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});


require __DIR__.'/auth.php';