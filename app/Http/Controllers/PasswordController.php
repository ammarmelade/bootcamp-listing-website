<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('account.change-password', [
            'user' => auth()->user()
        ]);
    }

    public function store(Request $request)
    {
        $userId = auth()->id();
        $user = User::findOrFail($userId);

        $validator = Validator::make($request->all(), [
                'current_password' => ['required', 'current_password'],
                'new_password' => ['required', 'min:8'],
                'confirm_password' => ['required_with:new_password', 'same:new_password', 'min:8']
        ]);
        
        if ($validator->fails()) {
            return redirect('/dashboard#popup-success')->withErrors(['current_password' => 'The password is incorrect.', 'new_password' => 'The password field must be at least 8 characters.', 'confirm_password' => 'The password field must be at least 8 characters.']);
        }

        $user->fill([
            'password' => bcrypt($request['new_password'])
        ]); 
        
        $user->save();

        return redirect('/dashboard');
    }
}
