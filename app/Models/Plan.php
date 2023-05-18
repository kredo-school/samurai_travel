<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = ['interested.places'];

    # Use this to get the owner of the plan 
    public function user(){
        return $this->belongsTo(User::class);
    }

    # Use this to get the place info in each plan
    public function place(){
        return $this->hasMany(Place::class);
    }

    public function placeFavorite(){
        return $this->hasMany(PlaceFavorite::class);
    }
        

    
}
