<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //
    public function create()
    {
    	return view('register.create');
    }

    public function store()
    {
    	$this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'pseudo' => 'required',
        'gender' => 'required',
        'age' => 'required',
        'password' => 'required|confirmed'
    	]);

    	$user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'pseudo' => request('pseudo'),
            'gender' => request('gender'),
            'age' => request('age'),
            'password' => bcrypt(request('password'))
    	   ]);

            auth()->login($user);

            return redirect('/profile')->with('message','Successfully published');
    }
}
