<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\OnlyAdmin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;

Route::middleware('auth')->group(function(){
    Route::get('logout', [AuthController::class, 'logout']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::middleware('guest')->group(function (){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'autentikasi']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registrasi']);
});

Route::middleware('user')->group(function(){
    Route::get('/index', [IndexController::class, 'index'])->name('index');
});

Route::middleware('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});
