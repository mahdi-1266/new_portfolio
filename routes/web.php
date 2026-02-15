<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeroController;

Route::get('/', function () {
    return view('frontend.layout.home.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

/* ------- Admin Profile Start -------*/
Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/store/profile', [AdminController::class, 'StoreProfile'])->name('store.profile');
    Route::post('/update/password', [AdminController::class, 'UpdatePassword'])->name('password-update');
});
/* ------- Admin Profile End -------*/


/* ------- Hero Start -------*/
Route::controller(HeroController::class)->group(function(){
	Route::get('/admin/home', 'HeroSection')->name('admin.home');
	Route::get('/add/home', 'AddHome')->name('add.home');
	Route::post('/store/home', 'StoreHome')->name('store.home');
});
/* ------- Hero End -------*/