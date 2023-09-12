<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccessControl extends Controller
{    
    function index(Request $request) {

        $data['title'] = 'Existing Users Panel';

        # LOAD USER FROM THE TABLE
       $data['users'] = User::get();

        # BIND THEM INTO THE VIEW
        return view('backend.users.list', $data);

    }

    function create( Request $request) {
        $data['roles'] = Role::get();  
        $data['title'] = 'new user';

        return view('backend.users.createUser', $data);
        
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
        return redirect()->route('access.users')->with(['success_msg' => $messag]);
    }
}
