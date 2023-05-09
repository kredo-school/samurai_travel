<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;



class Place extends Model
{
    use HasFactory;

    protected $table = 'place'; //specify the table to use

    #Use this to get the image of the place
    public function placeImage(){
        return $this->hasOne(Image::class);
    }

    #Use this to get all the keywords under the place
    public function placeKeyword(){
        return $this->hasMany(placeKeyword::class);
    }

    #Use this to get all the genres under the place
    public function genre(){
        return $this->hasMany(Genre::class);
    }

    #Use this to get all the areas under the place
    public function area(){
        return $this->hasMany(Area::class);
    }

    #Use this to get all the prefectures under the place
    public function prefecture(){
        return $this->hasMany(Prefecture::class);
    }

    #Use this to get all the cities under the place
    public function city(){
        return $this->hasMany(City::class);
    }

    # To get the likes of the place
    public function likes(){
        return $this->hasMany(Like::class);
    }

    # Return TRUE if the Auth user already liked the place
    public function isLiked(){
        return $this->likes()->where('id' , Auth::user()->id)->exists();
    } 
}
