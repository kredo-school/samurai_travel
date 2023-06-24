<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Keyword;
use App\Models\Genre;

class AnswerController extends Controller
{
    public function index(Question $question)
    {
        $all_answers = Answer::where('question_id', $question->id)->get();

        return view('admin.answers.index')
            ->with('question', $question)
            ->with('all_answers', $all_answers);
    }

    public function create(Question $question)
    {
        $all_keywords = Keyword::all();
        $all_genres = Genre::all();

        return view('admin.answers.create')
            ->with('question', $question)
            ->with('all_keywords', $all_keywords)
            ->with('all_genres', $all_genres);
    }

    public function store(Request $request, Question $question)
    {
        $request->validate([
            'question_id' => 'integer',
            'answer_no'    => 'required|unique:answers,answer_no',
            'answer'    => 'required|max:1000',
            'genre_id'    => 'required',
            'keyword_id'  => 'required'
        ]);

        Answer::create([
            'question_id' => $question->id,
            'answer_no' => $request->answer_no,
            'answer'   => $request->answer,
            'genre_id'   => $request->genre_id,
            'keyword_id' => $request->keyword_id
        ]);

        return redirect()->route('admin.answer', $question);
    }

    public function edit(Question $question, Answer $answer)
    {
        $answer = Answer::where('id', $answer->id)->first();
        // dd($answers);
        $all_keywords = Keyword::all();
        $all_genres = Genre::all();

        return view('admin.answers.edit')
            ->with('answer', $answer)
            ->with('question', $question)
            ->with('all_keywords', $all_keywords)
            ->with('all_genres', $all_genres);     
    }

    public function update(Request $request, Question $question, Answer $answer)
    {
        $request->validate([
            'answer'    => 'required|max:1000',
            'genre_id'    => 'required',
            'keyword_id'  => 'required'
        ]);

        $answer->answer = $request->answer;
        $answer->genre_id = $request->genre_id;
        $answer->keyword_id = $request->keyword_id;
        $answer->save();

        return redirect()->back();
    }

    public function destroy(Answer $answer)
    {
        $answer->destroy($answer->id);
        return redirect()->back();
    }


}