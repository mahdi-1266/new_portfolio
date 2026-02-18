<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\HeroController;


use App\Http\Controllers\frontend\FrontendController;

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

/* ------- All Frontend Routes Start -------*/
Route::controller(FrontendController::class)->group(function(){
	Route::get('/about', 'AboutSection')->name('about');
    Route::get('/portfolio', 'PortfolioSection')->name('portfolio');
    Route::get('/skill', 'SkillSection')->name('skill');
    Route::get('/resume', 'ResumeSection')->name('resume');
    Route::get('/contact', 'ContactSection')->name('contact');
});
/* ------- All Frontend Routes End -------*/


Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');


Route::middleware('auth')->group(function () {

/* ------- Admin Profile Start -------*/
Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
Route::post('/store/profile', [AdminController::class, 'StoreProfile'])->name('store.profile');
Route::post('/update/password', [AdminController::class, 'UpdatePassword'])->name('password-update');
/* ------- Admin Profile End -------*/


/* ------- Hero Start -------*/
Route::controller(HeroController::class)->group(function(){
    Route::get('/home/page', 'HeroSection')->name('admin.home');
    Route::get('/add/home', 'AddHome')->name('add.home');
    Route::post('/store/home', 'StoreHome')->name('store.home');
    Route::get('/edit/home/{id}', 'EditHome')->name('edit.home');
    Route::post('/update/home', 'UpdateHome')->name('update.home');
    Route::get('/delete/home/{id}', 'DeleteHome')->name('delete.home');
});
/* ------- Hero End -------*/

});