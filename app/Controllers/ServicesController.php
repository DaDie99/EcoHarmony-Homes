<?php

namespace App\Controllers;

class ServicesController extends BaseController
{
    public function index()
    {
        return view('home/services');  // Load the 'about' view
    }
}
