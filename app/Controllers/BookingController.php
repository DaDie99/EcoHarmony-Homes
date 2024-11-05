<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BookingController extends BaseController
{
    public function booknow()
    {
        

        return view('home/booknow');  // Load the booknow view
    }
}
