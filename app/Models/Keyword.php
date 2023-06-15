<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Keyword extends Model
{
    use HasFactory;

    # Use this to get genre of keyword
    protected $table = 'keywords';
    protected $fillable = [
        'name',
        'genre_id'
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
        // ->withTrashed();
    }

    # Use this to get PlaceKeyword 
    public function interestedPlaces(){
        return $this->belongsToMany(Place::class, 'place_keywords', 'keyword_id', 'place_id');
    }

    # To get the interest of the place_keyword
    // public function interest(){
    //     return $this->hasOne(Interest::class);
    // }

    # Return TRUE if the Auth user already interested in the keyword 
    public function isInterested(){
        return $this->interestedPlaces()->where('user_id' , Auth::user()->id)->exists();
        // ->where('user_id' , Auth::user()->id)->exists();
    }


}
