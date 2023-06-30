<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlaceFavorite extends Model
{
    use HasFactory;

    protected $table = 'place_favorites';
    protected $fillable = ['user_id', 'place_id'];
    protected $primaryKey = ['user_id', 'place_id'];
    public $incrementing = false;

    # To get the info of the user who favorite the place
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function storeFavoritePlaces(Array $favorite_place_list) {
        $favorite = new PlaceFavorite();
        $favorite->user_id = Auth::user()->id;

        $favorite_list = json_decode($favorite_place_list[0], true);
        foreach ($favorite_list as $place_id) {
            $favorite->place_id = $place_id;

            $is_exist = self::where('user_id', $favorite->user_id)
                ->where('place_id', $favorite->place_id)
                ->exists();
            if (!$is_exist) $favorite->save();
        }
    }
}
