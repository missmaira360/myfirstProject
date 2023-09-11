<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccessControl extends Controller
{    
    function index(Request $request) {

        $data['title'] = 'Existing Users';

        # LOAD USER FROM THE TABLE
        $data['users'] = '';

        # BIND THEM INTO THE VIEW
        return view('', $data);
    }


    function registerUser(Request $request) {
        $this->validate($request, [
            'name' => 'required|min:7|max:50|string',
            'email' => 'required|email|unique:users,email',
            'role'  => 'required',
        ]);

        $data = $request->only('name', 'email', 'role');
        $userCreated = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make(12345),
        ])->assignRole($data['role']);

        $messag = $userCreated->name. ' Has been registered successfully!';
        return redirect()->back()->with(['success_msg' => $messag]);
    }
}
