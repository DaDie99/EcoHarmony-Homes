<?php

namespace App\Controllers;

class ServicesController extends BaseController
{
    public function index()
    {
        return view('home/services'); 
    }

public function property()
    {
        return view('home/property'); 
    }

public function material()
    {
        return view('home/material'); 
    }

}
