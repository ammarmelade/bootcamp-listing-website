<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EditAccountController extends Controller
{
    public function edit()
    {
        return view('account.edit-account', [
            'user' => auth()->user()
        ]);
    }

    
    public function store()
    {
        $userId = auth()->id();
        $user = User::findOrFail($userId);

        $attributes = request()->validate([
            'username' => ['required', Rule::unique('users')->ignore($user->id), 'max:255'],
            'email' => ['required', Rule::unique('users')->ignore($user->id), 'max:255'],
            'phone_number' => [Rule::unique('users')->ignore($user->id)],
            'bio' => ['max:255'],
        ]);

        $user->fill($attributes); 
        
        $user->save();

        return redirect('/dashboard');
    }


    public function remove_picture()
    {
        $userId = auth()->id();
        $user = User::findOrFail($userId);

        $user->profile_picture_path = "profile_pictures/no-prof.jpg";
        
        $user->save();

        return redirect('edit-account');
    }

    public function change_picture(Request $request)
    {
        $userId = auth()->id();
        $user = User::findOrFail($userId);

        $picture_path = $request->file('picture')->store('profile_pictures', 'public');

        $user->profile_picture_path = $picture_path;
        
        $user->save();

        return redirect('/dashboard');
    }
}
