<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;
        $data['rolename'] = $role->name;

        if ($data['rolename'] == 'admin') {
            return view('adminDash', $data);
        }
        
        elseif ($data['rolename'] == 'agent'){
            return view('agent', $data);
        }
        else{
            return view('home');
        }
    }
}
