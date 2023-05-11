<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
    
    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
