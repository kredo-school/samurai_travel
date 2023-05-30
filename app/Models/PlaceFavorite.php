<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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


}
