<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $table = 'answers';
    protected $fillable = [
        'answer',
        'question_id',
        'answer_no',
        'answer',
        'genre_id',
        'keyword_id',
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function keyword(){
        return $this->belongsTo(Keyword::class);
    }

    public function question(){
        return $this->belongsTo(Question::class);
    }

}
