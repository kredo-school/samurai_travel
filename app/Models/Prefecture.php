<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function selectRandomPrefecture()
    {
        $prefecture = DB::inRandomOrder()->first();
        return $prefecture;
    }
}