<?php
// App\Models\ServiceModel.php
namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'services'; // Name of the table
    protected $primaryKey = 'id';   // Primary key of the table
    protected $allowedFields = ['title', 'service_type', 'location', 'contact_number', 'price', 'description', 'images','services']; // Fields that can be inserted or updated
}
