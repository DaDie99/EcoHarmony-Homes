<?php

namespace App\Controllers;

class AboutController extends BaseController
{
    public function index()
    {
        return view('home/about');  // Load the 'about' view
    }
}
