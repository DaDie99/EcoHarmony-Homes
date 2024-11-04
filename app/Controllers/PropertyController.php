<?php

namespace App\Controllers;

use App\Models\PropertyModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class PropertyController extends BaseController
{
    protected $propertyModel;

    public function __construct()
    {
        // Initialize the PropertyModel
        $this->propertyModel = new PropertyModel();
    }

    public function index()
    {
        // Get the sorting parameter from the query string, defaulting to 'rating' if not provided
        $sortBy = $this->request->getGet('sortBy') ?? 'rating';

        // Build the query based on the sorting method
        if ($sortBy === 'price_low') {
            $properties = $this->propertyModel->orderBy('price', 'ASC')->findAll();
        } elseif ($sortBy === 'price_high') {
            $properties = $this->propertyModel->orderBy('price', 'DESC')->findAll();
        } else {
            // Default sorting by rating in descending order
            $properties = $this->propertyModel->orderBy('rating', 'DESC')->findAll();
        }

        // Pass properties to the view
        return view('home/property', ['properties' => $properties]);
    }

    public function view($id)
    {
        // Fetch the property by ID
        $property = $this->propertyModel->find($id);

        // Check if the property exists
        if (!$property) {
            throw new PageNotFoundException('Property not found');
        }

        // Pass the property data to the detailed view page
        return view('home/property_detail', ['property' => $property]);
    }

    public function showProperty($propertyId)
    {
        // Fetch property data from the model
        $property = $this->propertyModel->find($propertyId);

        // Check if property exists and log for debugging
        if ($property) {
            // Log property details to verify
            log_message('debug', 'Property data: ' . print_r($property, true));

            // Pass data to the view
            $data = [
                'title' => isset($property['title']) ? $property['title'] : 'N/A',
                'price' => isset($property['price']) ? $property['price'] : 0,
                'rating' => isset($property['rating']) ? $property['rating'] : 'Not rated',
                'description' => isset($property['description']) ? $property['description'] : 'No description available',
                'images' => isset($property['images']) ? json_decode($property['images'], true) : [] // Decoding images JSON if present
            ];

            return view('home/property_detail', $data);
        } else {
            // Log an error if property is not found
            log_message('error', 'Property with ID ' . $propertyId . ' not found.');
            return '<p class="text-center text-danger">Property not found.</p>';
        }
    }
}
