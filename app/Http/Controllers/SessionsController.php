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
        // $attributes =\request()->validate([
        //     'name' => 'required|max:255',
        //     'password' => 'required|min:7|max:255',
        // ]);
        $attributes =\request()->validate([
            'Email' =>'required|exists:users,email',
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
