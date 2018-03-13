<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register.register');
    }

    public function store()
    {

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        //modifies Coding for hash
        
        $hashedString = Hash::make(request('password'));
        
        $createArray = [ "name" => request('name'), 'email' => request('email'), 'password' => $hashedString ];
        
        $user = User::create($createArray);
        
        //End of modified coding for hash
        

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->home();


    }

}
