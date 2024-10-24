<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class Controller extends Controller
{
    public function showEmailTemplate() 
    {
        return view('emailTemplate');
    }
}
