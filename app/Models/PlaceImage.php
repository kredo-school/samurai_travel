<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceImage extends Model
{
    use HasFactory;


    protected $fillable = [
        'place_id',
        'image_no',
        'image',
        'description',
        'name_en',
        'name_jp',
    ];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

}
