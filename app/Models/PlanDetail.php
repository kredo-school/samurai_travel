<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
