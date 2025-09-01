<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\DiscountController;
use App\Models\Discount;

Route::get('/', [HomeController::class,'index']
);



Route::middleware(['web'])->group(function () {
    Route::get('/loginadmin', [AdminLoginController::class,'showLogin'])->name('loginadmin.form');
Route::post('/loginadmin', [AdminLoginController::class,'login'])->name('loginadmin.post');



Route::middleware(['auth'])->group(function() {
  
    Route::resource('portofolio', PortofolioController::class);
    Route::resource('pricing', PricingController::class);
    Route::resource('information', InformationController::class);
    Route::resource('experience', ExperienceController::class);
    Route::resource('discount', DiscountController::class);
});


});

Route::middleware(['auth'])->group(function() {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
   
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
