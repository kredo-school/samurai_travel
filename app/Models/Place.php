<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function place_images()
    {
        return $this->hasMany(PlaceImage::class);
    }

    public function placeKeyword()
    {
        return $this->hasMany(PlaceKeyword::class);
    }
}
