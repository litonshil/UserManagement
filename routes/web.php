<?php

use App\Http\Controllers\Auth\ApproveuserController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/approveuser',[ApproveuserController::class,'index'])->name('approveuser');
Route::post('/approveuser',[ApproveuserController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);


Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);


Route::get('/', function () {
    return view('posts.index');
});
