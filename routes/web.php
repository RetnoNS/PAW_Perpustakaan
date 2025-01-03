<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'autentikasi']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'createUser']);
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'verified' ,'user'])->group(function () {
    Route::get('/index', [IndexController::class, 'index'])->name('index');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/users', [DashboardController::class, 'users'])->name('dashboard.users');
    Route::get('/dashboard/books', [DashboardController::class, 'books'])->name('dashboard.books');
    Route::get('/dashboard/loans', [DashboardController::class, 'loans'])->name('dashboard.loans');

    // Tambahan untuk fitur edit dan delete
    Route::get('/dashboard/users/{user}/edit', [DashboardController::class, 'editUser'])->name('dashboard.users.edit');
    Route::put('/dashboard/users/{user}', [DashboardController::class, 'updateUser'])->name('dashboard.users.update');
    Route::delete('/dashboard/users/{user}', [DashboardController::class, 'deleteUser'])->name('dashboard.users.delete');
});

Route::get('/profile', function () {
    return auth()->user()->username;
})->middleware('verified');

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('index');
    })->middleware(['auth', 'signed'])->name('verification.verify');
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');

    Route::post('/email/verification-notification', function (Request $request){
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
});
