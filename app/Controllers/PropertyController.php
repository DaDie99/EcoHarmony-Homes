<?php

namespace App\Controllers;

use App\Models\PropertyModel;

class PropertyController extends BaseController
{
    public function index()
    {
        // Get the sorting parameter from the query string
        $sortBy = $this->request->getGet('sortBy') ?? 'rating';
        
        // Initialize the model
        $model = new PropertyModel();
        
        // Build the query based on the sorting method
        $builder = $model->orderBy($sortBy === 'price_low' ? 'price ASC' : 'price DESC');

        // Handle sorting by rating separately
        if ($sortBy === 'rating') {
            $builder->orderBy('rating DESC');
        }

        // Fetch properties from the database
        $properties = $builder->findAll();

        // Pass properties to the view
        return view('home/property', ['properties' => $properties]);
    }

    public function view($id) // Renamed for clarity
    {
        $model = new PropertyModel();
        
        // Fetch the property by ID
        $property = $model->find($id);

        // Check if property exists
        if (!$property) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Property not found');
        }

        // Pass the property data to the view
        return view('home/property_detail', ['property' => $property]);
    }
    public function details($id)
{
    $model = new PropertyModel();
    $property = $model->find($id); // Fetching property by ID

    if (!$property) {
        return '<p>Property not found.</p>';
    }

    // Pass the property data to the modal view
    return view('home/property_detail', ['property' => $property]);
}

}
