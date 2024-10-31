<?php

namespace App\Controllers;

use App\Models\PropertyModel;

class PropertyController extends BaseController
{
    public function index()
    {
        $sortBy = $this->request->getGet('sortBy') ?? 'rating';

        // Fetch properties from the database based on sorting
        $model = new PropertyModel();
        $properties = $model->orderBy($sortBy === 'price_low' ? 'price ASC' : 'price DESC')
            ->orderBy($sortBy === 'rating' ? 'rating DESC' : '')
            ->findAll();

        return view('property', ['properties' => $properties]);
    }

    public function property($id)
    {
        $model = new PropertyModel();  // Assuming you are using a model
        $property = $model->find($id); // Fetching property by ID

        if (!$property) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Property not found');
        }

        // Pass the property data to the view
        return view('home/property', ['property' => $property]);
    }
}
