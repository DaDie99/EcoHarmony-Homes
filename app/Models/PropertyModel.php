<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model
{
    protected $table = 'property'; // Adjust this to your actual database table name
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'location', 'contact_number', 'price', 'images', 'rating', 'description'];

    /**
     * Retrieve top-rated properties, limited to a specified number.
     *
     * @param int $limit Number of top-rated properties to retrieve (default: 3)
     * @return array
     */
    public function getTopRatedProperties($limit = 3)
    {
        return $this->orderBy('rating', 'desc')
                    ->limit($limit)
                    ->findAll();
    }

    /**
     * Retrieve all properties with optional sorting by price or rating.
     *
     * @param string|null $priceOrder 'asc' or 'desc' for sorting by price
     * @param string|null $ratingOrder 'asc' or 'desc' for sorting by rating
     * @return array
     */
    public function getFilteredProperties($priceOrder = null, $ratingOrder = null)
    {
        // Initialize query builder
        $builder = $this->orderBy('id', 'asc'); // Default order by ID

        // Apply price ordering if specified
        if ($priceOrder) {
            $builder->orderBy('price', $priceOrder);
        }

        // Apply rating ordering if specified
        if ($ratingOrder) {
            $builder->orderBy('rating', $ratingOrder);
        }

        return $builder->findAll();
    }
}
