<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;



class PlaceKeyword extends Model
{
    use HasFactory;

    # Use this to get place
    public function place(){
        return $this->belongsTo(Place::class);
    }

    
}
