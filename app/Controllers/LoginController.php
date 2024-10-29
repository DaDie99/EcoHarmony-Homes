<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('home/login');
    }

    public function authenticate()
    {
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validate credentials (adjust according to your UserModel logic)
        if ($model->login($email, $password)) {
            return redirect()->to('/dashboard'); // Redirect to the dashboard
        } else {
            return redirect()->to('/login')->with('error', 'Invalid credentials.');
        }
    }
}
