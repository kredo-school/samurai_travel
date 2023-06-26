<?php

namespace App\Models;

use App\Models\Keyword;
use App\Models\Interest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function keyword()
    {
        return $this->hasMany(Keyword::class);
        // ->withTrashed(); 
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'question_id');
    }

    public function selectRandomInterestGenre(Interest $interest)
    {
        $genre = Keyword::find($interest->keyword_id)->genre->inRandomOrder()->first();
        if ($genre === null) {
            return false;
        }
        return $genre;
    }
}
