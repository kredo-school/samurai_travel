<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;




class GenreController extends Controller
{
    private $genre;


    public function __construct(Genre $genre)
    {
        $this->genre = Genre::all();
    }

    public function index(){
        $all_genres = $this->genre;
        return view('admin.genres.index', compact('all_genres'));
    }

    public function store(Request $request){
        $request->validate
        ([

            'name' => 'required|min:1|max:15|unique:genres,name'
        ]);
            
            $this->genre->name = ucwords(strtolower($request->name)); 
            $this->genre->save();
    
            return redirect()->back();
    }

    public function update($id, Request $request){
        $request->validate([
            'new_name'  => 'required|min:1|max:50|unique:genres,name,' . $id
        ]);

        $genre           = $this->genre->findOrFail($id);
        $genre->name     = ucwords(strtolower($request->new_name));
        $genre->save();
        return redirect()->back();
    }

    public function destroy($id){
        $this->genre->destroy($id);
        return redirect()->back();
    }
}

