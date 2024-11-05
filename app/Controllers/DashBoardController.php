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

        // Fetch user services
        $serviceModel = new ServiceModel();
        $services = $serviceModel->where('user_id', $user['user_id'])->findAll();

        return view('dashboard', [
            'user' => $user,
            'services' => $services,
            'serviceMapping' => $this->serviceMapping
        ]);
    }

    public function updateUser()
    {
        $user = session()->get('user_data');
        if (!$user) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $data = [
            'companyName' => $this->request->getPost('companyName'),
            'contactNumber' => $this->request->getPost('contactNumber'),
        ];

        $model = new UserModel();
        if ($model->update($user['user_id'], $data)) {
            // Update session data with new user details
            $user['companyName'] = $data['companyName'];
            $user['contactNumber'] = $data['contactNumber'];
            session()->set('user_data', $user);

            return redirect()->to('/home/dashboard')->with('message', 'Account details updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update account details.');
        }
    }

    public function addService()
    {
        $user = session()->get('user_data');
        if (!$user) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $selectedServices = $this->request->getPost('services');
        $serviceModel = new ServiceModel();

        // Check if the user already has a service entry to enforce uniqueness
        $existingService = $serviceModel->where('user_id', $user['user_id'])->first();
        if ($existingService) {
            return redirect()->back()->with('error', 'You can only have one service. Update the existing service if needed.');
        }

        // Insert new service(s) if no existing service for the user
        $serviceData = [
            'user_id' => $user['user_id'],
            'service' => implode(',', $selectedServices)
        ];

        if ($serviceModel->insert($serviceData)) {
            // Update session with the selected services
            $user['service'] = implode(',', $selectedServices);
            session()->set('user_data', $user);

            return redirect()->to('/home/dashboard')->with('message', 'Services added successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to add services.');
        }
    }
}
