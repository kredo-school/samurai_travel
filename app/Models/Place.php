<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


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
    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'place_keywords', 'place_id', 'keyword_id');
    }

    # To get the likes of the place
    public function favorite()
    {
        return $this->hasMany(PlaceFavorite::class);
    }
    
    public function plans(){
        return $this->belongsToMany(Plan::class, 'plan_details', 'plan_id', 'place_id');
    }

    // public function plans(){
    //     return $this->hasOne(PlanDetail::class);
    // }

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

    public function placeImages()
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

    //To show all places on the search blade
    public function getPlaces()
    {
        $places = Place::pluck('name_en', 'id');
        return $places;
    }

    public function selectTargetPrefectureByKeywords(Array $keyword_list = null)
    {
        if (empty($keyword_list)) {
            $prefecture = new Prefecture();
            $target_prefecture = $prefecture->inRandomOrder()->first();

            $target_prefecture_id = $target_prefecture->id;
        } else {
            $suggested_place_ids = PlaceKeyword::whereIn('keyword_id', $keyword_list)->get();

            $place_ids = $suggested_place_ids->pluck('place_id');
            $target_prefecture = Place::whereIn('id', $place_ids)
                                ->groupBy('prefecture_id')
                                ->select('prefecture_id', DB::raw('COUNT(*) as count'))
                                ->orderByDesc('count')
                                ->first();

            $target_prefecture_id = $target_prefecture->prefecture_id;
        }

        return $target_prefecture_id;
    }

    public function selectByPrefecture(int $prefecture_id)
    {
        $categories = ['spot', 'activity', 'restaurant', 'hotel'];
        $place_list = collect([]);

        foreach ($categories as $category) {
            $place_list = $place_list->concat(
                Place::where('prefecture_id', $prefecture_id)
                    ->where('place_category', $category)
                    ->inRandomOrder()
                    ->limit(9)
                    ->get()
            );
        }

        return $place_list;
    }
}