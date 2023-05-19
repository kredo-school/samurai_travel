<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceKeyword extends Model
{
    use HasFactory;

    protected $table = 'place_keywords';
    protected $fillable = ['place_id', 'keyword_id'];
    protected $primaryKey = ['place_id', 'keyword_id'];
    public $incrementing = false;
    // public $timestamps = false;

    public function keyword()
    {
        return $this->belongsTo(Keyword::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}