<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});


require __DIR__.'/auth.php';