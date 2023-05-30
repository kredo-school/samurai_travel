<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceAffiliateSite extends Model
{
    use HasFactory;

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function affiliateSite()
    {
        return $this->belongsTo(AffiliateSite::class);
    }

}
