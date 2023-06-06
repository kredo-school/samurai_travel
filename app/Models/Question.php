<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';
    protected $fillable = [
        'question',
        'genre_id',
        'keyword_id',
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function keyword(){
        return $this->belongsTo(Keyword::class);
    }

    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
