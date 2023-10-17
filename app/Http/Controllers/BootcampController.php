<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BootcampController extends Controller
{
    public function view()
    {
        $userId = auth()->id();
        $user = User::findOrFail($userId);

        return view('account.manage-bootcamp', [
            'bootcamps' => $user->bootcamps->load('category', 'organizer')
        ]);
    }


    public function create()
    {
        return view('bootcamp.create-bootcamp');
    }

    
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => 'required|unique:bootcamps,name|max:255',
            'description' => 'required|max:255',
            'phone_number' => 'required|unique:bootcamps,phone_number|max:255',
            'email' => 'required|email|unique:bootcamps,email|max:255',
            'fee' => 'required',
            'link' => 'required|max:255',
        ]);

        $document_path = $request->file('document')->store('bootcamp_documents', 'public');

        Bootcamp::create([
            'name' => $attributes['name'],

            'user_id' => auth()->id(),
            'category_id' => 1,

            'slug' => Str::slug($attributes['name']),

            'overview' => $attributes['description'],
            'description' => $attributes['description'],

            'document_path' => $document_path,

            'fee' => $attributes['fee'],

            'link' => $attributes['link'],
            'phone_number' => $attributes['phone_number'],
            'email' => $attributes['email'],
        ]);   

        return redirect('#popup-success');
    }


    public function edit(Bootcamp $bootcamp)
    {
        return view('bootcamp.edit-bootcamp', [
            'bootcamp' => $bootcamp
        ]);
    }


    public function update(Bootcamp $bootcamp)
    {
        $attributes = request()->validate([
            'name' => ['required', Rule::unique('bootcamps')->ignore($bootcamp->id), 'max:255'],
            'description' => ['required', 'max:255'],
            'fee' => ['required'],
            'picture_path' => ['required', 'max:255']
        ]);
            
        $bootcamp->fill([
            'name' => $attributes['name'],
            'description' => $attributes['description'],
            'fee' => $attributes['fee'],
            'picture_path' => $attributes['picture_path'],
            'slug' => Str::slug($attributes['name']),
        ]);
        
        $bootcamp->save();

        return redirect('/admin/manage-bootcamps');
    }


    public function approve(Bootcamp $bootcamp)
    {
        $ownerId = $bootcamp->user_id;
        $user = User::findOrFail($ownerId);

        if ($user->e_wallet_balance < 10) {

            $bootcamp->status = 4;
        
        } else {

            $bootcamp->status = 1;

        }

        $bootcamp->save();

        return redirect('/admin/manage-bootcamps');
    }


    public function reject(Bootcamp $bootcamp)
    {
        $bootcamp->status = 2;

        $bootcamp->save();

        return redirect('/admin/manage-bootcamps');
    }


    public function suspend(Bootcamp $bootcamp)
    {
        $bootcamp->status = 3;

        $bootcamp->save();

        return redirect('/admin/manage-bootcamps');
    }


    public function unsuspend(Bootcamp $bootcamp)
    {
        $ownerId = $bootcamp->user_id;
        $user = User::findOrFail($ownerId);

        if ($user->e_wallet_balance < 10) {

            $bootcamp->status = 4;

        } else {

            $bootcamp->status = 1;

        }

        $bootcamp->save();

        return redirect('/admin/manage-bootcamps');
    }
}
