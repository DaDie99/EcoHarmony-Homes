<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view('homepage');  // Load the 'home' view
    }
}
