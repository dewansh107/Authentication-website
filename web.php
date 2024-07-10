<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('registration');

Route::post('/login', [CustomAuthController::class, 'loginPost'])->name('login.post');
Route::post('/registration', [CustomAuthController::class, 'register'])->name('register.post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');