<?php

namespace App\Controllers;

use App\Models\PropertyModel;
use App\Models\ServiceModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class ServicesController extends BaseController
{
    protected $propertyModel;
    protected $serviceModel;

    public function __construct()
    {
        // Load models
        $this->propertyModel = new PropertyModel();
        $this->serviceModel = new ServiceModel(); // Initialize ServiceModel
    }

    public function index()
    {
        return view('home/services');
    }

    public function property()
    {
        // Get filter parameters from the request
        $priceOrder = $this->request->getGet('price_order');   // 'asc' or 'desc'
        $ratingOrder = $this->request->getGet('rating_order'); // 'asc' or 'desc'

        // Fetch top-rated properties and other properties based on filters
        $topRatedProperties = $this->propertyModel->orderBy('rating', 'desc')->limit(3)->findAll();

        // Build query for all properties with optional sorting
        $builder = $this->propertyModel->orderBy('id', 'asc'); // Default order by ID

        if ($priceOrder) {
            $builder->orderBy('price', $priceOrder);
        }

        if ($ratingOrder) {
            $builder->orderBy('rating', $ratingOrder);
        }

        $properties = $builder->findAll();

        // Pass the filter values along with properties to the view
        return view('home/property', [
            'topRatedProperties' => $topRatedProperties,
            'properties' => $properties,
            'priceOrder' => $priceOrder,
            'ratingOrder' => $ratingOrder
        ]);
    }

    public function showProperty($id)
    {
        // Retrieve the specific property by ID
        $property = $this->propertyModel->find($id);

        // Check if the property exists
        if (!$property) {
            throw new PageNotFoundException("Property not found.");
        }

        // Pass the property data to the view
        return view('home/property_detail', [
            'property' => $property
        ]);
    }

    public function material()
    {
        return view('home/material');
    }

    public function create()
    {
        // Check if user ID exists in session
        $userId = session()->get('user_id');
        if (!$userId) {
            return redirect()->to('/login')->with('error', 'User must be logged in to create a service.');
        }

        // Validation rules
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'service_type' => 'required|integer',
            'location' => 'required',
            'contact_number' => 'required|numeric',
            'price' => 'required|decimal',
            'description' => 'required|string',
            'images' => 'uploaded[images]|max_size[images,1024]|is_image[images]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Process image upload
        $uploadedImages = $this->request->getFiles();
        $imageNames = [];
        if (isset($uploadedImages['images'])) {
            foreach ($uploadedImages['images'] as $image) {
                if ($image->isValid() && !$image->hasMoved()) {
                    $imageName = $image->getRandomName();
                    $image->move('uploads/services', $imageName);
                    $imageNames[] = $imageName;
                }
            }
        }

        // Main service data
        $serviceData = [
            'user_id' => $userId,
            'service_type' => (int)$this->request->getPost('service_type'),
            'title' => $this->request->getPost('title'),
            'location' => $this->request->getPost('location'),
            'contact_number' => $this->request->getPost('contact_number'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'images' => json_encode($imageNames)
        ];

        // Insert into the main services table and get service ID
        if (!$this->serviceModel->insert($serviceData)) {
            return redirect()->back()->with('error', 'Failed to save service');
        }
        $serviceId = $this->serviceModel->insertID();

        // Map service_type to specific tables
        $serviceTypeTables = [
            1 => 'property',
            2 => 'material_supplier',
            3 => 'construction',
            4 => 'planning_and_design',
            5 => 'architecture_design',
            6 => 'interior_design',
            7 => 'fixing_and_support',
            8 => 'painting',
            9 => 'garden_design',
            10 => 'furniture',
            11 => 'electrics',
            12 => 'dream_homes'
        ];

        $serviceType = $serviceData['service_type'];
        if (isset($serviceTypeTables[$serviceType])) {
            $tableName = $serviceTypeTables[$serviceType];

            // Data for the specific service type table
            $serviceTypeData = [
                'service_id' => $serviceId,
                'user_id' => $userId,  // Ensure foreign key matches
                'title' => $serviceData['title'],
                'location' => $serviceData['location'],
                'contact_number' => $serviceData['contact_number'],
                'price' => $serviceData['price'],
                'description' => $serviceData['description'],
                'images' => $serviceData['images']
            ];

            // Insert into specific service type table
            $db = \Config\Database::connect();
            if (!$db->table($tableName)->insert($serviceTypeData)) {
                return redirect()->back()->with('error', 'Failed to save service details in specific table');
            }
        }

        return redirect()->to('/home/dashboard')->with('message', 'Service posted successfully!');
    }


    public function edit($id)
    {
        // Fetch service data by ID
        $service = $this->serviceModel->find($id);

        // Check if service exists and belongs to the user
        if (!$service || $service['user_id'] != session()->get('user_id')) {
            return redirect()->to('/home/dashboard')->with('error', 'Service not found or access denied.');
        }

        // Pass data to view
        return view('home/edit', ['service' => $service]);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'location' => 'required',
            'contact_number' => 'required|numeric',
            'price' => 'required|decimal',
            'description' => 'required|string',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $service = $this->serviceModel->find($id);
        if (!$service || $service['user_id'] != session()->get('user_id')) {
            return redirect()->to('/home/dashboard')->with('error', 'Service not found or access denied.');
        }

        $this->serviceModel->update($id, [
            'title' => $this->request->getPost('title'),
            'location' => $this->request->getPost('location'),
            'contact_number' => $this->request->getPost('contact_number'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description')
        ]);

        return redirect()->to('/home/dashboard')->with('message', 'Service updated successfully!');
    }

    public function delete($id)
    {
        $service = $this->serviceModel->find($id);

        if (!$service || $service['user_id'] != session()->get('user_id')) {
            return redirect()->to('/home/dashboard')->with('error', 'Service not found or access denied.');
        }

        // Mapping service_type to the respective table
        $serviceTypeTables = [
            1 => 'property',
            2 => 'material_supplier',
            3 => 'construction',
            4 => 'planning_and_design',
            5 => 'architecture_design',
            6 => 'interior_design',
            7 => 'fixing_and_support',
            8 => 'painting',
            9 => 'garden_design',
            10 => 'furniture',
            11 => 'electrics',
            12 => 'dream_homes'
        ];

        // Determine the specific table to delete from
        $serviceType = $service['service_type'];
        if (isset($serviceTypeTables[$serviceType])) {
            $tableName = $serviceTypeTables[$serviceType];
            $db = \Config\Database::connect();

            // Delete from the specific service-type table using `service_id`
            $db->table($tableName)->where('service_id', $id)->delete();
        }

        // Finally, delete the main service record
        $this->serviceModel->delete($id);

        return redirect()->to('/home/dashboard')->with('message', 'Service deleted successfully!');
    }
}
