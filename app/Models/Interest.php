<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;

    # Use this to get keyword
    public function keyword(){
        return $this->belongsTo(Keyword::class);
    }

    # Use this to get User
    public function user(){
        return $this->belongsTo(User::class);
    }

    # Use this to get place
    public function placeKeyword(){
        return $this->belongsTo(PlaceKeyword::class);
    }
}
