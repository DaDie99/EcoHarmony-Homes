<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class MaterialSupplierController extends BaseController
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

        // Fetch material supplier services with the desired sorting order
        $services = $serviceModel
            ->where('service_type', 2) // Assuming service_type 2 is Material Supplier
            ->orderBy($orderField, $orderDirection)
            ->findAll();

        return view('home/material_supplier', [
            'services' => $services,
            'serviceMapping' => $this->serviceMapping
        ]);
    }

    public function show($id)
    {
        // Initialize the model
        $model = new ServiceModel();
        
        // Fetch the service by ID
        $service = $model->find($id);

        // Check if the service exists
        if (!$service) {
            throw new PageNotFoundException('Service not found');
        }

        // Prepare data for the modal view
        $data = [
            'title' => $service['title'] ?? 'N/A',
            'price' => $service['price'] ?? 0,
            'rating' => $service['rating'] ?? 'Not rated',
            'description' => $service['description'] ?? 'No description available',
            'contact_number' => $service['contact_number']??'N/A',
            'images' => json_decode($service['images'], true) ?? [] // Decode JSON images if available
        ];

        // Log for debugging (optional)
        log_message('debug', 'Loaded service details for ID: ' . $id);

        // Return the view specifically for the modal
        return view('home/material_supplier_details', $data);
    }
}
