<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;

    protected $table = 'keywords';
    protected $fillable = [
        'name',
        'genre_id'
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
        // ->withTrashed();
    }

    public function placeKeyword(){
        return $this->hasMany(PlaceKeyword::class);
    }
}
