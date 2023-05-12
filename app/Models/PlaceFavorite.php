<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceFavorite extends Model
{
    use HasFactory;

    # Use this to get the user of the interest
    public function user(){
        return $this->belongsTo(User::class);
    }

    # Use this to get the keyword
    public function place(){
        return $this->belongsTo(Place::class);
    } 

    # Use this to get the place
    public function favorite(){
        return $this->belongsTo(Place::class);
    }
    
}
