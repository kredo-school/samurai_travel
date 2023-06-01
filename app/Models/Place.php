<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;


class Place extends Model
{
    use HasFactory;

    protected $table = 'places'; //specify the table to use
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

    #Use this to get the image of the place
    public function placeImages(){
        return $this->hasMany(PlaceImage::class);
    }

    #Use this to get all the keywords under the place
    public function keywords(){
        return $this->belongsToMany(Keyword::class, 'place_keywords', 'place_id', 'keyword_id');
    }

    #Use this to get all the areas under the place
    public function area(){
        return $this->hasOne(Area::class);
    }

    #Use this to get all the prefectures under the place
    public function prefecture(){
        return $this->hasOne(Prefecture::class);
    }

    # To get the likes of the place
    public function favorite(){
        return $this->hasMany(PlaceFavorite::class);
    }

    # Return TRUE if the Auth user already liked the place
    public function isFavorite(){
        return $this->favorite()->where('user_id' , Auth::user()->id)->exists();
    } 
    
    public function plans(){
        return $this->hasOne(PlanDetail::class);

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

    
}
