<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanKeyword extends Model
{
    use HasFactory;

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function keyword()
    {
        return $this->belongsTo(Keyword::class);
    }
}
