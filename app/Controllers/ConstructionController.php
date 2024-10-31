<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ConstructionController extends Controller
{
    public function index()
    {
        // Load the view for the main construction page
        return view('home/construction');
    }
}
