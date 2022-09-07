<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller

{
    public function create()
    {
        return view('sessions');
    }

   
    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);



        if (! auth()->attempt($attributes)) {

            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified'
            ]);
        }



        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back To Your App!');

    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'GoodBye!');
    }
}
