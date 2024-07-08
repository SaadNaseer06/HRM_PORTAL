<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\HomeController;
use App\Models\Admin;
use App\Models\Attendance;

Route::group(['middleware' => 'user'], function() {
    Route::get('/session', [AdminController::class, 'get_session']);
    Route::get('/header', [AdminController::class, 'header']);
    Route::get('/footer', [AdminController::class, 'footer']);
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/attendance', [AttendanceController::class, 'getLast7DaysHours']);
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/register', [LoginController::class, 'register']);

Route::post('register', [LoginController::class, 'registerPost'])->name('register');

Route::get('login', [LoginController::class, 'showLogin']);

Route::post('login', [LoginController::class, 'login'])->name('login');
