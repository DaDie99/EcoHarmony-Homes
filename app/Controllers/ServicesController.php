<?php

namespace App\Controllers;

use App\Models\PropertyModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class ServicesController extends BaseController
{
    protected $propertyModel;

    public function __construct()
    {
        // Load the PropertyModel
        $this->propertyModel = new PropertyModel();
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
        return view('home/property_detail', [ // Assuming you have a separate view for property details
            'property' => $property
        ]);
    }

    public function material()
    {
        return view('home/material');
    }



    public function create()
    {
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

        $data = [
            'user_id' => session()->get('user_id'),
            'service_type' => (int)$this->request->getPost('service_type'),
            'title' => $this->request->getPost('title'),
            'location' => $this->request->getPost('location'),
            'contact_number' => $this->request->getPost('contact_number'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'images' => json_encode($imageNames)
        ];

        $db = \Config\Database::connect();
        $db->table('services')->insert($data);

        return redirect()->to('home/dashboard')->with('message', 'Service posted successfully!');
    }
}
