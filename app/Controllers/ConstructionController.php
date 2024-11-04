<?php

namespace App\Controllers;

use App\Models\ServiceModel;

class ConstructionController extends BaseController
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
        $sortBy = $this->request->getGet('sortBy');

        $serviceModel = new ServiceModel();

        // Default sorting order
        $orderField = 'rating';
        $orderDirection = 'DESC';

        // Modify sorting order based on filter input
        if ($sortBy === 'price_high') {
            $orderField = 'price';
            $orderDirection = 'DESC';
        } elseif ($sortBy === 'price_low') {
            $orderField = 'price';
            $orderDirection = 'ASC';
        }

        // Fetch construction services with the desired sorting order
        $services = $serviceModel
            ->where('service_type', 3) // Assuming service_type 3 is Construction
            ->orderBy($orderField, $orderDirection)
            ->findAll();

        return view('home/construction', [
            'services' => $services,
            'serviceMapping' => $this->serviceMapping
        ]);
    }
    public function viewService($id)
    {
        // Load the model
        $serviceModel = new ServiceModel();

        // Fetch the service by ID
        $service = $serviceModel->find($id);

        // Check if service exists
        if (!$service) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Service not found.");
        }

        // Pass the service data to the view
        return view('home/service_detail', ['service' => $service]);
    }public function getServiceDetails($id)
    {
        $serviceModel = new ServiceModel();
    
        // Fetch service by ID
        $service = $serviceModel->find($id);
    
        if (!$service) {
            return '<p class="text-center text-danger">Service not found.</p>';
        }
    
        // Load partial view for service details
        return view('home/construction_details', ['service' => $service]);
    }
    
}
