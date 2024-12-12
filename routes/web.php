<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CathegoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;


Route::redirect('/', '/hobby');
Route::get('/hobby', [IndexController::class, 'index'])->name('index');
Route::get('/hobby/latest', [IndexController::class, 'latest'])->name('latest');
Route::get('/search', [IndexController::class, 'search'])->name('search');

Route::resource('cathegory', CathegoryController::class);
Route::resource('post', PostController::class);


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