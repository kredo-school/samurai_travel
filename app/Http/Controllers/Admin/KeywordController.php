<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keyword;
use App\Models\Genre;

class KeywordController extends Controller
{
    private $keyword;
    private $genre;

    public function index()
    {
        $all_keywords = Keyword::get()->toQuery()->paginate(10);
        $all_genres = Genre::all();

        return view('admin.keywords.index', compact('all_keywords'), compact('all_genres'));
    }

    public function create()
    {
        $all_keywords = Keyword::all();
        $all_genres = Genre::all();

        return view('admin.keywords.create', compact('all_keywords'), compact('all_genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|max:15|unique:keywords,name',
            'genre_id'    => 'required'
        ]);

        Keyword::create([
            'name' => $request->name,
            'genre_id' => $request->genre_id
        ]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $keyword = Keyword::find($id);
        $all_genres = Genre::all();
        $data = ['keyword' => $keyword, 'id'=>$id];
        return view('admin.keywords.edit', compact('all_genres', 'data'));
    }

    public function update(Request $request, Keyword $keyword, $id)
    {
        $request->validate([
            'name' => 'required|max:50|unique:keywords,name,' .$id,
            'genre_id' => 'required'
        ]);

        $keyword = Keyword::find($id);
        $keyword->name = ucwords(strtolower($request->name));
        $keyword->genre_id = $request->genre_id;
        $keyword->save();

        return redirect()->back();
    }

    public function destroy(Keyword $keyword, $id)
    {
        $keyword->destroy($id);
        return redirect()->back();
    }
}
