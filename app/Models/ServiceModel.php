<?php
// App\Models\ServiceModel.php
namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id', 'title', 'service_type', 'location', 
        'contact_number', 'price', 'description', 'images'
    ];
}