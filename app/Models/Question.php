<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Answer;
use App\Models\Keyword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function keyword()
    {
        return $this->belongsTo(Keyword::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function selectRandomQuestionByKeyword(Interest $interest)
    {
        $question = Question::where('keyword_id', $interest->keyword_id)->inRandomOrder()->first();
        if ($question === null) {
            return false;
        }

        return $question;
    }

    public function selectRandomQuestionByGenre(Genre $interested_genre)
    {
        $question = Question::where('genre_id', $interested_genre->id)->inRandomOrder()->first();
        if ($question === null) {
            return false;
        }

        return $question;
    }

    public function selectRandomQuestion()
    {
        $question = Question::inRandomOrder()->first();
        if ($question === null) {
            return false;
        }

        return $question;
    }
}
