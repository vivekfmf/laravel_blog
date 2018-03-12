<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    public function create()
    {
        return view('sessions.login');
    }

    public function store()
    {

        // dd(request(['email', 'password']));

        if(auth()->attempt(request(['email', 'password']))){
            return redirect()->home();
        }

        return back()->withErrors([
            'message' => 'error']
        );
        
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }

}
