<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Keyword extends Model
{
    use HasFactory;

    # Use this to get genre of keyword
    public function genre(){
        return $this->belongsTo(Genre::class);
        // ->withTrashed();
    }

    # Use this to get PlaceKeyword 
    public function placeKeyword(){
        return $this->belongsTo(PlaceKeyword::class);
    }

    # To get the interest of the keyword
    public function interest(){
        return $this->hasMany(Interest::class);
    }

    # Return TRUE if the Auth user already interested in the keyword 
    public function isInterested(){
        return $this->interest();
        // ->where('user_id' , Auth::user()->id)->exists();
    }
}
