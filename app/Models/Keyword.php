<?php

namespace App\Models;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PhpParser\Node\Stmt\Foreach_;

class Keyword extends Model
{
    use HasFactory;

    # Use this to get genre of keyword
    protected $table = 'keywords';
    protected $fillable = [
        'name',
        'genre_id'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
        // ->withTrashed();
    }

    # Use this to get PlaceKeyword 
    public function interestedPlaces(){
        return $this->belongsToMany(Place::class, 'place_keywords', 'keyword_id', 'place_id');
    }

    # To get the interest of the place_keyword
    // public function interest(){
    //     return $this->hasOne(Interest::class);
    // }

    # Return TRUE if the Auth user already interested in the keyword 
    public function isInterested(){
        return $this->interestedPlaces()->where('user_id' , Auth::user()->id)->exists();
        // ->where('user_id' , Auth::user()->id)->exists();
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function placeKeyword()
    {
        return $this->hasMany(PlaceKeyword::class);
    }

    public function selectKeywordBySessionAnswers()
    {
        $session_answers = session('answers');
        if (!empty($session_answers)) {
            $answer_ids = array_column($session_answers, 'answer_id');
            $answer = new Answer();
            $answers = $answer->selectAnswers($answer_ids);

            $genre_ids = $answers->whereNotNull('genre_id')->pluck('genre_id')->toArray();

            $keywords = Keyword::whereIn('genre_id', $genre_ids)->get();

            $keyword_ids = [];
            array_push($keyword_ids, $keywords->pluck('id')->toArray());
            array_push($keyword_ids, $answers->whereNotNull('keyword_id')->pluck('keyword_id')->toArray());
            
            $all_keyword_ids = array_merge(...$keyword_ids);
            
        } else {
            $all_keyword_ids = null;
        }

        return $all_keyword_ids;
    }
}
