<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Keyword;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function keyword()
    {
        return $this->belongsTo(Keyword::class);
    }

    public function selectAnswers(array $answer_ids)
    {
        $answer_ids = array_merge(...$answer_ids);
        $answers = Answer::whereIn('id', $answer_ids)->get();

        return $answers;
    }
}
