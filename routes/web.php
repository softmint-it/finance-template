<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {

//     return view('eazyhome');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about-us', 'aboutUs');
    Route::get('/contact-us', 'contactUs');
    Route::get('/get-bank-rates/{bankId}', 'getBankRates');
    Route::post('/submit-quotation-request', 'submitQuotationRequest');
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
