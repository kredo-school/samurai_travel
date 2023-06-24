<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Keyword;
use App\Models\Genre;


class QuestionController extends Controller
{
    public function index()
    {
        $all_questions = Question::with('genre','keyword')->paginate(10);

        return view('admin.questions.index')
            ->with('all_questions', $all_questions);
    }

    public function create()
    {
        $all_keywords = Keyword::all();
        $all_genres = Genre::all();

        return view('admin.questions.create')
            ->with('all_keywords', $all_keywords)
            ->with('all_genres', $all_genres);
    }

    public function store(Request $request)
    {
        $request->validate([
            'question'    => 'required|max:1000',
            'genre_id'    => 'required',
            'keyword_id'  => 'required'
        ]);

        Question::create([
            'question'   => $request->question,
            'genre_id'   => $request->genre_id,
            'keyword_id' => $request->keyword_id
        ]);
        return redirect()->route('admin.question');
    }

    public function edit(Question $question)
    {
        $all_questions = Question::with('genre','keyword')->get();
        $all_keywords = Keyword::all();
        $all_genres = Genre::all();

        return view('admin.questions.edit')
            ->with('all_questions', $all_questions)
            ->with('question', $question)
            ->with('all_keywords', $all_keywords)
            ->with('all_genres', $all_genres);
    }


    public function update(Request $request, Question $question)
    {
        $request->validate([
            'question'    => 'required|max:1000',
            'genre_id'    => 'required',
            'keyword_id'  => 'required'
        ]);

        $question->question = $request->question;
        $question->genre_id = $request->genre_id;
        $question->keyword_id = $request->keyword_id;
        $question->save();

        return redirect()->route('admin.question');
    }

    public function destroy(Question $question)
    {
        $question->destroy($question->id);
        return redirect()->back();
    }


}
