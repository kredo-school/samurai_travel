<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plan;
use App\Models\Place;


class PlanDetail extends Model
{
    use HasFactory;

    public function plan(){
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function place(){
        return $this->belongsTo(Place::class, 'place_id');
    }

}

