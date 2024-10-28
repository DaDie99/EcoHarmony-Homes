<?php

namespace App\Controllers;

class ProjectsController extends BaseController
{
    public function index()
    {
        return view('home/projects');  
    }
}
