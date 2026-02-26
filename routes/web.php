<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect()->route('login');
});

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
