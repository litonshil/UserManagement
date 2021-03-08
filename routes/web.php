<?php

use App\Http\Controllers\Auth\ApproveuserController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/home', [DashboardController::class, 'indexhome'])->name('home');


Route::get('/approveuser', [ApproveuserController::class, 'index'])->name('approveuser');
Route::get('/approved/{email}', [ApproveuserController::class, 'userApproved'])->name('approved');

Route::get('/decline/{email}', [ApproveuserController::class, 'userDecline'])->name('decline');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::post('/student', [StudentController::class, 'store'])->name('student.create');;

Route::get('/viewstudent', [StudentController::class, 'viewstu'])->name('viewstudent');

Route::get('/edit/{id}', [StudentController::class, 'studentedit'])->name('edit');

Route::post('/updatestudent/{id}', [StudentController::class, 'updatestu'])->name('updatestudent');

Route::get('/delete/{id}', [StudentController::class, 'studentdelete'])->name('delete');


Route::get('/', function () {
    return view('posts.index');
});
