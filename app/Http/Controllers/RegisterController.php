<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    
    public function create()
    {
        return view('rigester');
    }

    public function store()
    {

        $attributes =\request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);



        $user = User::create($attributes);


        auth()->login($user); // helper


       return redirect('/');

    }
}
