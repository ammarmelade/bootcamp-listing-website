<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    
    public function store()
    {
        $attributes = request()->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:7|max:255'
        ]);

        $initial_username = $attributes['firstname'] . '_' .$attributes['lastname'] . str(rand(1, 100));

        $user = User::create([

            'firstname' => $attributes['firstname'],
            'lastname' => $attributes['lastname'],

            'username' => $initial_username,

            'email' => $attributes['email'],
            
            'password'=> bcrypt($attributes['password']),
            
            'email_verified_at' => now(),
            'bio' => "Born ready to learn!",            
            'remember_token' => Str::random(10)
        ]);   
        
        auth()->login($user);

        return redirect('/');
    }
}
