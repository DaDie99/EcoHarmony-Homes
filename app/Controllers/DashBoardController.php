<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ServiceModel;

class DashboardController extends BaseController
{
    private $serviceMapping = [
        1 => 'Property',
        2 => 'Material Supplier',
        3 => 'Construction',
        4 => 'Planning & Design',
        5 => 'Architecture Design',
        6 => 'Interior Design',
        7 => 'Fixing & Support',
        8 => 'Painting',
        9 => 'Garden Design',
        10 => 'Furnitures',
        11 => 'Electrics',
        12 => 'Dream Homes'
    ];

    public function index()
    {
        // Check if user is logged in
        $user = session()->get('user_data');
        if (!$user) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        return view('dashboard', ['user' => $user]);
    }
    public function addService()
    {
        $user = session()->get('user_data');
        $selectedServices = $this->request->getPost('services');  // Array of selected services

        // Update the user's services in the database
        $model = new UserModel();
        $model->update($user['id'], [
            'service' => implode(',', $selectedServices)
        ]);

        // Update session data
        $user['service'] = implode(',', $selectedServices);
        session()->set('user_data', $user);

        return redirect()->to('home/dashboard')->with('message', 'Services updated successfully.');
    }
}
