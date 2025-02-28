<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Marketing\MarketingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//marketing route

// admin route
Route::middleware('auth', 'AdminMiddleware')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');


});

Route::get('/portfolio', [MessageController::class, 'index'])->name('portfolio.index');
Route::get('/message', [MessageController::class, 'message'])->name('portfolio.message');
Route::post('/portfolio/store', [MessageController::class, 'store'])->name('portfolio.store');








