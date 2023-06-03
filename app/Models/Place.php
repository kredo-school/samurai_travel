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


    #Use this to get all the keywords under the place
    public function keywords(){
        return $this->belongsToMany(Keyword::class, 'place_keywords', 'place_id', 'keyword_id');
    }

    # To get the likes of the place
    public function favorite(){
        return $this->hasMany(PlaceFavorite::class);
    }
    
    public function plans(){
        return $this->hasOne(PlanDetail::class);
    }

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

    public function createPlanByQuestions()
    {
        $plan_keyword = Plan_key
        $pre = Place::where('user_id', Auth::user()->id)->get();

        if ($interests->isEmpty()) {
            $interest = null;
        } elseif ($interests->count() > 1) {
            $interest = $interests->random();
        } else {
            $interest = $interests->first();
        }

        return $interest;
    }
}
