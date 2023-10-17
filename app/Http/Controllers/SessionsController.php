<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }


    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required|'
        ]);

        $user = User::where('email', $attributes['email']) -> first();


        if($user->is_suspended == 1) {
            throw ValidationException::withMessages(['suspended' => 'Your account has been suspended.']);
        }

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages(['validation' => 'Your provided credentials could not be verified.']);
        }

        return redirect('dashboard');
    }
    

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
