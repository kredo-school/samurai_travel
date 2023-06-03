<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateSite extends Model
{
    use HasFactory;

    public function placeAffiliateSites()
    {
        return $this->hasMany(PlaceAffiliateSite::class);
    }
    
}
