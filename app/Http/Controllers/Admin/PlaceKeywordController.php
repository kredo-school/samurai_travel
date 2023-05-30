<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Models\Keyword;

use Illuminate\Http\Request;

class PlaceKeywordController extends Controller
{
    //
    public function index(Place $place)
    {
        // $all_place_keywords = 
        // PlaceKeyword::where('place_id', $place->id)->paginate(10);
        $all_place_keywords = $place->keywords;
        // dd($all_place_keywords);
        $all_keywords = Keyword::all();

        return view('admin.places.place_keywords.index')
                ->with('place', $place)
                ->with('all_place_keywords', $all_place_keywords)
                ->with('all_keywords', $all_keywords);
    }

    public function store(Request $request, Place $place)
    {
        $request->validate([
            'keyword_id' => 'required'
        ]);

        $place->keywords()->attach($request->keyword_id);
        
        return redirect()->back();
    }

    public function update(Request $request, Place $place, Keyword $keyword)
    {
        $request->validate([
            'keyword_id' => 'required'
        ]);

        $place->keywords()->detach($keyword->id);
        // $place_keyword->place_id = $place->id;

        $place->keywords()->attach($request->keyword_id);
        
        return redirect()->route('admin.place_keyword.index', $place->id);
    }

    public function destroy(Place $place, Keyword $keyword)
    {
        $place->keywords()->detach($keyword->id);
        return redirect()->back();
    }
}
