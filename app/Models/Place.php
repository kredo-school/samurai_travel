<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'place_category',
        'name_en',
        'name_jp',
        'opening_time',
        'ending_time',
        'url',
        'area_id',
        'prefecture_id',
        'city_id',
        'address',
        'spend_time',
        'image',
        'description',
        'open_ampm',
        'end_ampm'
    ];

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

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'place_keywords', 'place_id', 'keyword_id');
    }

    public function placeKeyword()
    {
        return $this->hasMany(PlaceKeyword::class);
    }

    # Favorite
    public function placeFavorite()
    {
        return $this->hasMany(PlaceFavorite::class);
    }

    public function isFavorite()
    {
        return $this->placeFavorite()->where('user_id', Auth::user()->id)->exists();
    }

    #Affiliate
    public function placeAffiliateSites()
    {
        return $this->hasMany(PlaceAffiliateSite::class);
    }

}
