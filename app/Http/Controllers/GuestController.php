<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(Request $request) {
       
        # in review
        // return view('welcome-review');
        return view('welcome');
    }

    function aboutUs() {
        return view('AboutUs');
        
    }
}
