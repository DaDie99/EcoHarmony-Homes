<?php

namespace App\Controllers;

use App\Models\RegisterModel;

class RegisterController extends BaseController
{
    public function index()
    {
        // Load the registration form view
        return view('home/register');
    }

    public function create()
    {
        // Logic for processing the registration form submission
        $model = new RegisterModel();
        $data = [
            'companyName' => $this->request->getPost('companyName'),
            'ownerName' => $this->request->getPost('ownerName'),
            'registerNumber' => $this->request->getPost('registerNumber'),
            'contactNumber' => $this->request->getPost('contactNumber'),
            'email' => $this->request->getPost('email'),
            'service' => $this->request->getPost('service'),
            'password' => $this->request->getPost('password'),
        ];
        if ($model->register($data)) {
            return redirect()->to('/success'); // Redirect on success
        } else {
            return redirect()->to('/register')->with('errors', 'Registration failed.');
        }
    }

    public function success()
{
    return view('homepage'); // Ensure you have a success.php view file in app/Views
}

}
