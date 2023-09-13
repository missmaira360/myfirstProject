<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
   function index(Request $request) {

        $data['title'] = 'Existing property ';

        # LOAD USER FROM THE TABLE
        $data['users'] = User::get();
        return view('backend.properties.listing', $data);

    }
    function createProperty( Request $request) {
        $data['title'] = 'create property ';

        return view('backend.properties.createProperty', $data);
       
        
    }

    function registerProperty(request $request){
        $data['title'] = 'new property';
        $this->validate($request, [
            'No_rooms' => 'required',
            'price' => 'required',
            'location'  => 'required',
            'desciption'  => 'required',
            'is_available'  => 'required',
            'currency'  => 'required',
        ]);

        $data = $request->only('No_rooms', 'price', 'desciption','location','is_available','currency');
        $userCreated = User::create([
            'No_rooms' => $data['No_rooms'],
            'price' => $data['price'],
            'desciption' => $data['desciption'],
            'location' => $data['location'],
            'is_available' => $data['is_available'],
            'currency' => $data['currency'],
            
        ]);
        return view('backend.properties.createProperty', $data);


        
        //  $messag = $userCreated->name. ' Has been registered successfully!';
        // return redirect()->route('access.users')->with(['success_msg' => $messag]);

    }
}
