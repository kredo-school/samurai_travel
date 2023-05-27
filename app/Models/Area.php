<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name_en',
        'name_jp'
    ];
    
    public function prefectures()
    {
        return $this->hasMany(Prefecture::class);
    }

    public function places()
    {
        return $this->hasMany(Place::class);
    }
}