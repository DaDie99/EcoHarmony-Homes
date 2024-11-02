<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects'; // Table name
    protected $primaryKey = 'id'; // Primary key
    protected $allowedFields = [
        'title',
        'location',
        'completion_date',
        'images',
        'created_at',
        'updated_at',
    ]; // Fields that can be mass-assigned
    protected $useTimestamps = true; // Enable automatic timestamping

    // You can define custom methods for additional queries as needed
}
