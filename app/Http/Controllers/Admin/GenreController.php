<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;


class GenreController extends Controller
{
    


    

    public function index(){
        $all_genres = Genre::all();
        return view('admin.genres.index', compact('all_genres'));
    }

    public function store(Request $request){
        $request->validate
        ([
            'name' => 'required|max:15|unique:genres'
        ]);

        Genre::create([
            'name' => ucwords(strtolower($request->name))
        ]);
        
            return redirect()->back();
    }

    public function update(Request $request, Genre $genre){
        $request->validate([
            'new_name'  => 'required|max:50'
        ]);

        $genre->name     = ucwords(strtolower($request->new_name));
        $genre->save();
        return redirect()->back();
    }

    public function destroy(Genre $genre){
        $genre->delete();
        return redirect()->back();
    }
}

