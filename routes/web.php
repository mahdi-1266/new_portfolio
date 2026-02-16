<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\PortfolioController;
use App\Http\Controllers\frontend\SkillController;
use App\Http\Controllers\frontend\ResumeController;
use App\Http\Controllers\frontend\ContactController;


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
	Route::get('/home/page', 'HeroSection')->name('admin.home');
	Route::get('/add/home', 'AddHome')->name('add.home');
	Route::post('/store/home', 'StoreHome')->name('store.home');
});
/* ------- Hero End -------*/


/* ------- About Route Start -------*/
Route::controller(AboutController::class)->group(function(){
	Route::get('/about/page', 'AboutSection')->name('admin.about');
});
/* ------- About Route End -------*/


/* ------- Portfolio Route Start -------*/
Route::controller(PortfolioController::class)->group(function(){
	Route::get('/portfolio/page', 'PortfolioSection')->name('admin.portfolio');
});
/* ------- Portfolio Route End -------*/


/* ------- Skill Route Start -------*/
Route::controller(SkillController::class)->group(function(){
	Route::get('/skill/page', 'SkillSection')->name('admin.skill');
});
/* ------- Skill Route End -------*/


/* ------- Resume Route Start -------*/
Route::controller(ResumeController::class)->group(function(){
	Route::get('/resume/page', 'ResumeSection')->name('admin.resume');
});
/* ------- Resume Route End -------*/


/* ------- Resume Route Start -------*/
Route::controller(ContactController::class)->group(function(){
	Route::get('/contact/page', 'ContactSection')->name('admin.contact');
});
/* ------- Resume Route End -------*/