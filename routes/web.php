<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordResetController;
use Illuminate\Support\Facades\Route;

// Ruta de inicio para login
Route::get('/', function () {
    return view('auth.login');
});

// Ruta de inicio para login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');

// Ruta para mostrar formulario
Route::get('/forgot-password', [PasswordResetController::class, 'showForgotPasswordForm'])->name('forgot-password.form');