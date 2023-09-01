<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(Request $request) {
        // return view('welcome');
        # in review
        return view('welcome-review');
    }
}
