<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    public function create()
    {
    return view('sessions.create');
    }

    public function store()
    {
    	if(! auth()->attempt(request(['email', 'password'])))
        {  
           return back();
        }
           else
          
          return redirect('/profile');
     
    }
    public function destroy()
    {
    	auth()->logout();

    	return redirect('/');
    }
}
