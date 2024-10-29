<?php

namespace App\Controllers;

class PasswordController extends BaseController
{
    public function reset()
    {
        return view('password_reset');
    }

    public function sendResetLink()
    {
        // Logic to send reset link to the user's email
    }

    public function resetPassword()
    {
        // Logic to reset the password
    }
}
