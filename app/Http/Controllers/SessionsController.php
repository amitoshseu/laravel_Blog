<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'destroy']);
	}

    public function create()
    {
    	return view('sessions.create');
    }

    public function store()
    {
    	//Attemp to authenticate the user

    	if(! auth()->attempt(request(['email','password'])))
    	{
    		return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);

    	}

        session()->flash('message', 'Thanks so much for signing up!');

    	return redirect('/'); // or return redirect()->home(); 

    	//If not, redirect back 

    	//IF so, sign in then in


    	//Redirect to the home pate
    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect('/');
    }
}
