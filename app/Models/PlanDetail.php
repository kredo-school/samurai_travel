<?php

namespace App\Models;

use App\Models\Plan;
use App\Models\Place;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlanDetail extends Model
{
    use HasFactory;

    public function plan(){
        return $this->belongsTo(Plan::class);
    }

    public function place(){
        return $this->belongsTo(Place::class);
    }

}
