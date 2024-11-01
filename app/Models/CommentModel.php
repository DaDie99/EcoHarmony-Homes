<?php
namespace App\Models;

use CodeIgniter\Model;

class CommentsModel extends Model
{
    protected $table = 'comments';
    protected $allowedFields = ['name', 'comment', 'created_at'];
    
    public function getComments()
    {
        return $this->findAll(); // Retrieve all comments
    }
}