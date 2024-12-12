<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;
use App\http\Controllers\CathegoryController;
use App\http\Controllers\PostController;
use App\http\Controllers\IndexController;
use App\http\Controllers\DashboardController;

Route::redirect('/', '/hobby');
Route::get('/hobby', [IndexController::class, 'index'])->name('index');
Route::get('/hobby/latest', [IndexController::class, 'latest'])->name('latest');
Route::get('/search', [IndexController::class, 'search'])->name('search');

Route::resource('cathegory', CathegoryController::class);
Route::resource('post', PostController::class);
Route::resource('image', ImageController::class);


Route::middleware('auth')->group(function(){
	
	Route::get('/dashboard', [CathegoryController::class, 'index'])->name('dashboard');
	Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
	Route::get('/dashboard/search', [DashboardController:: class, 'getPosts'])->name('getPosts');
	
});

Route::middleware('guest')->group(function(){

Route::view('/login', 'auth.sign-in')->name('login');
Route::view('/sign-in', 'auth.sign-in')->name('sign-in');
Route::post('/sign-in', [AuthController::class, 'login']);

});