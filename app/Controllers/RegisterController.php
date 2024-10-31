<?php

namespace App\Controllers;

use App\Models\RegisterModel;
use App\Models\UserModel;

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
            return redirect()->to('/register')->with('errors', 'Register Failed Email Already Registered.');
        }
    }

    public function success()
{
    return view('home/login'); // Ensure you have a success.php view file in app/Views
}

public function userProfile($userId)
{
    $model = new UserModel();
    $user = $model->find($userId);

    if ($user) {
        // Fetch service name based on stored service code
        $user['service_name'] = $model->getServiceName($user['service']);
    }

    // Pass user data to the view
    return view('user/profile', ['user' => $user]);
}


}
