<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('login'); // Show the login form
    }

    public function attemptLogin()
    {
        // Your existing login code here
    }

    public function register()
    {
        return view('register'); // Show the registration form
    }

    public function attemptRegister()
    {
        $model = new UserModel();
        $data = [
            'companyName' => $this->request->getPost('companyName'),
            'ownerName' => $this->request->getPost('ownerName'),
            'registerNumber' => $this->request->getPost('registerNumber'),
            'contactNumber' => $this->request->getPost('contactNumber'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'service' => $this->request->getPost('service'), // Save the selected service
        ];

        if ($model->insert($data)) {
            return redirect()->to('/login')->with('message', 'Registration successful! Please log in.');
        } else {
            return redirect()->back()->with('errors', 'Registration failed. Please try again.');
        }
    }

    public function resetPassword()
    {
        return view('password_reset'); // Show the reset password form
    }

    public function attemptResetPassword()
    {
        // Logic for password reset, e.g., sending a reset link via email
        $email = $this->request->getPost('email');
        $model = new UserModel();
        $user = $model->where('email', $email)->first();

        if ($user) {
            // Generate and send reset link (simplified for example purposes)
            return redirect()->to('/login')->with('message', 'A reset link has been sent to your email.');
        } else {
            return redirect()->back()->with('errors', 'Email not found.');
        }
    }
}
