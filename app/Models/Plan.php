<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use function PHPUnit\Framework\isNull;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = ['interested.places'];

    # Use this to get the owner of the plan 
    public function user(){
        return $this->belongsTo(User::class);
    }

    # Use this to get the place info in each plan
    public function place(){
        return $this->hasMany(Place::class);
    }

    public function placeFavorite(){
        return $this->hasMany(PlaceFavorite::class);
    }

    public function favorites(){
        return $this->hasMany(PlanFavorite::class);
    }

    public function isFavorited(){
        return $this->favorites()->where('user_id', auth()->user()->id)->exists();
    }

    public function planDetails(){
        return $this->hasMany(PlanDetail::class);
    }

    public function planRecommends(){
        return $this->hasOne(User::class);
    } 

    public function planRecommended(){
        return $this->recommends()->where('role_id' == 2);
    }

    public function storePlan(String $title = null){
        $this->user_id = Auth::user()->id;
        $this->user_type = 'user';
        if (is_null($title)) {
            $this->title = 'Suggest Plan';
        }
        $this->save();

        return $this;
    }
}
