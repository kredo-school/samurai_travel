<?php

namespace App\Models;

use App\Models\User;
use App\Models\Keyword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class Interest extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function keyword()
    {
        return $this->belongsTo(Keyword::class);
    }

    public function selectRandomInterest()
    {
        $interests = Interest::where('user_id', Auth::user()->id)->get();

        if ($interests->isEmpty()) {
            $interest = null;
        } elseif ($interests->count() > 1) {
            $interest = $interests->random();
        } else {
            $interest = $interests->first();
        }
        return $interest;
    }
}
