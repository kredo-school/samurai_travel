<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Models\Keyword;
use App\Models\PlaceKeyword;

use Illuminate\Http\Request;

class PlaceKeywordController extends Controller
{
    //
    public function index(Place $place)
    {
        $all_place_keywords = 
        PlaceKeyword::where('place_id', $place->id)->paginate(10);

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

        PlaceKeyword::create([
            'place_id' => $place->id,
            'keyword_id' => $request->keyword_id
        ]);
        
        return redirect()->back();
    }

    public function update(Request $request, Place $place, Keyword $keyword)
    {
        $request->validate([
            'keyword_id' => 'required'
        ]);

        PlaceKeyword::where('place_id', $place->id)->where('keyword_id', $keyword->id)->delete();
        // $place_keyword->place_id = $place->id;

        PlaceKeyword::create([
            'place_id' => $place->id,
            'keyword_id' => $request->keyword_id
        ]);
        
        return redirect()->route('admin.place_keyword.index', $place->id);
    }

    public function destroy(Place $place, Keyword $keyword)
    {
        PlaceKeyword::where('place_id', $place->id)->where('keyword_id', $keyword->id)->delete();
        return redirect()->back();
    }
}
