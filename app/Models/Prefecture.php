<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
