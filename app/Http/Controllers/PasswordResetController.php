<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordResetController extends Controller
{
    // Mostrar el formulario de "olvidé mi contraseña"
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }
}
