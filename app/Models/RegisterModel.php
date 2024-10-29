<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table = 'users'; // Your actual table name
    protected $primaryKey = 'id'; // Replace 'id' with your actual primary key if different
    protected $allowedFields = [
        'companyName', 'ownerName', 'registerNumber',
        'contactNumber', 'email', 'service', 'password'
    ];

    // Validation rules for data fields
    protected $validationRules = [
        'companyName' => 'required',
        'ownerName' => 'required',
        'registerNumber' => 'required|is_unique[users.registerNumber]',
        'contactNumber' => 'required',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[8]',
    ];

    // Insert method with password hashing
    public function register($data)
    {
        // Hash the password before saving
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        // Insert data and return the result
        return $this->insert($data);
    }
}
