<?php

namespace App\Controllers;

use App\Models\ServiceModel;

class ArchitectureDesignController extends BaseController
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

        // Fetch architecture design services with the desired sorting order
        $services = $serviceModel
            ->where('service_type', 5) // Assuming service_type 5 is Architecture Design
            ->orderBy($orderField, $orderDirection)
            ->findAll();

        return view('home/architecture_design', [
            'services' => $services,
            'serviceMapping' => $this->serviceMapping
        ]);
    }
}
