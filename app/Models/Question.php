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
        $answers = session('answers');
        if (empty($answers)) {
            $question = Question::where('keyword_id', $interest->keyword_id)->inRandomOrder()->first();
        } else {
            $question_ids = array_column($answers, 'question_id');
            $question = Question::whereNotIn('id', $question_ids)->where('keyword_id', $interest->keyword_id)->inRandomOrder()->first();
        }
        if ($question === null) {
            return false;
        }

        return $question;
    }

    public function selectRandomQuestionByGenre(Genre $interested_genre)
    {
        $answers = session('answers');
        if (empty($answers)) {
            $question = Question::where('genre_id', $interested_genre->id)->inRandomOrder()->first();
        } else {
            $question_ids = array_column($answers, 'question_id');
            $question = Question::whereNotIn('id', $question_ids)->where('genre_id', $interested_genre->id)->inRandomOrder()->first();
        }
        if ($question === null) {
            return false;
        }

        return $question;
    }

    public function selectRandomQuestion()
    {
        $answers = session('answers');
        if (empty($answers)) {
            $question = Question::inRandomOrder()->first();
        } else {
            $question_ids = array_column($answers, 'question_id');
            $question = Question::whereNotIn('id', $question_ids)->inRandomOrder()->first();
        }
        if ($question === null) {
            return false;
        }

        return $question;
    }
}
