<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects'; // Name of your table
    protected $primaryKey = 'id';   // Primary key of the table
    protected $allowedFields = ['title', 'description', 'images']; // Fields you want to allow for insert/update

    // You can add any additional configurations if necessary, like validation rules
}
