<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function ban(User $user)
    {
        $user->is_suspended = 1;

        $user->save();

        return redirect('/admin/manage-users');
    }


    public function unban(User $user)
    {
        $user->is_suspended = 0;

        $user->save();

        return redirect('/admin/manage-users');
    }
}
