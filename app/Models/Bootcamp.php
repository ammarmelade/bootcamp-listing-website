<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{
    use HasFactory;

    protected $guarded = ['id']; // for Mass Assignment Vulnerability.
    
    protected $fillable = []; // for Mass Assignment Vulnerability.

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function category()
    {
        // hasOne. hasMany, belongsTo, belongsToMany

        return $this->belongsTo(Category::class);
    }

    public function organizer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }  
}
