<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    # Use this to get the owner of the plan 
    public function user(){
        return $this->belongsTo(User::class);
    }

    
}
