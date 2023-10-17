<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function view()
    {
        return view('account.inbox', [
            'user' => auth()->user()
        ]);
    }

    
    public function store()
    {

    }
}
