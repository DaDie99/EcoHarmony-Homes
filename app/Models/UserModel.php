<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'companyName', 'ownerName', 'registerNumber', 
        'contactNumber', 'email', 'password', 
        'service', 'created_at', 'updated_at'
    ];
    // Validation rules (without unique email validation)
    protected $validationRules = [
        'email' => 'required|valid_email',
        'companyName' => 'required',
        'ownerName' => 'required',
        'registerNumber' => 'required',
        'contactNumber' => 'required',
        'password' => 'required|min_length[8]',
        'service' => 'required|integer'
    ];

    // Service mapping array
    private $serviceMapping = [
        1 => 'property',
        2 => 'MeterialSupplier',
        3 => 'Construction',
        4 => 'Planning&Design',
        5 => 'ArchitectureDesign',
        6 => 'InteriorDesign',
        7 => 'Fixing&Support',
        8 => 'Painting',
        9 => 'GardenDesign',
        10 => 'Fernitures',
        11 => 'Electrics',
        12 => 'DreamHomes',
    ];

    // Method to fetch service name by code
    public function getServiceName($serviceCode)
    {
        return $this->serviceMapping[$serviceCode] ?? 'Unknown Service';
    }
}
