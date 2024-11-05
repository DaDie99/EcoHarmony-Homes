<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    // Login method
    public function login()
    {
        return view('login'); // Show the login form
    }

    // Handle login attempt
    public function attemptLogin()
    {
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        // Find the user by email
        $user = $model->where('email', $email)->first();
    
        if ($user && password_verify($password, $user['password'])) {
            // Set session data based on role
            $sessionData = [
                'user_id' => $user['user_id'],
                'ownerName' => $user['ownerName'],
                'email' => $user['email'],
                'logged_in' => true,
            ];

            // Check if the user is an admin and set additional session flag
            if ($user['role'] === 'admin') {
                $sessionData['is_admin'] = true;
            }

            session()->set($sessionData);
    
            // Redirect based on role
            if ($user['role'] === 'admin') {
                return redirect()->to('/admin'); // Redirect to admin dashboard
            } else {
                return redirect()->to('/home/dashboard'); // Redirect to user dashboard
            }
        } else {
            // Authentication failed, redirect back with an error
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    // Logout method
    public function logout()
    {
        // Destroy session and redirect to login
        session()->destroy();
        return redirect()->to('/login');
    }

    // Show registration form
    public function register()
    {
        return view('register');
    }

    // Handle registration attempt
    public function attemptRegister()
    {
        $model = new UserModel();

        $email = $this->request->getPost('email');

        // Check if email already exists
        $existingUser = $model->where('email', $email)->first();

        if ($existingUser) {
            return redirect()->back()->withInput()
                ->with('errors', 'This email has already been registered.');
        }

        // Sanitize input and prepare data for insertion
        $data = [
            'companyName' => htmlspecialchars($this->request->getPost('companyName')),
            'ownerName' => htmlspecialchars($this->request->getPost('ownerName')),
            'registerNumber' => htmlspecialchars($this->request->getPost('registerNumber')),
            'contactNumber' => htmlspecialchars($this->request->getPost('contactNumber')),
            'email' => $email,
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'service' => (int)$this->request->getPost('service'),
            // Assign role (e.g., 'user' by default)
            'role' => 'user',
        ];

        // Insert user data into the database
        if ($model->insert($data) === false) {
            $errors = $model->errors();
            return redirect()->back()->withInput()->with('errors', implode(', ', $errors));
        }

        // Redirect to login with success message
        return redirect()->to('/login')->with('message', 'Registration successful! Please log in.');
    }

    // Show reset password form
    public function resetPassword()
    {
        return view('password_reset');
    }

    // Handle password reset attempt
    public function attemptResetPassword()
    {
        $email = $this->request->getPost('email');
        $model = new UserModel();
        $user = $model->where('email', $email)->first();

        if ($user) {
            // Simplified password reset logic
            return redirect()->to('/login')->with('message', 'A reset link has been sent to your email.');
        } else {
            return redirect()->back()->with('errors', 'Email not found.');
        }
    }
}
