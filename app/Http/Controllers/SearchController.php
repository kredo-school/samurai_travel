<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Prefecture;
use App\Models\Place;
use App\Models\Genre;
use App\Models\Keyword;

class SearchController extends Controller
{
    public function index()
    {
        // $all_places = Place::all();
        $all_areas = Area::all();
        $all_prefectures = Prefecture::all();
        $all_genres = Genre::all();
        $all_keywords = Keyword::all();

        return view('users.search.search', [
            'all_areas' => $all_areas,
            'all_prefectures' => $all_prefectures,
            'all_genres' => $all_genres,
            'all_keywords' => $all_keywords,
        ]);
    }
    
    public function search(Request $request)
    {
        $places = new Place;
        // $all_places = Place::all();
        $all_areas = Area::all();
        $all_prefectures = Prefecture::all();
        $all_genres = Genre::all();
        $all_keywords = Keyword::all();

        $s_category = $request->input('category');
        $s_area = $request->input('area');
        $s_prefecture = $request->input('prefecture');
        $s_genre = $request->input('genre');
        $s_keyword = $request->input('keyword');

        $query = Place::query();

        if(isset($s_category)){
            $query->whereIn('place_category', $s_category);
        }

        if(isset($s_area)){
            $query->whereIn('area_id', $s_area);
        }

        if(isset($s_prefecture)){
            $query->whereIn('prefecture_id', $s_prefecture);
        }

        if (isset($s_genre)) {
            $query->whereHas('keywords', function ($q) use ($s_genre) {
                $q->whereHas('genre', function ($q) use ($s_genre) {
                    $q->whereIn('genres.id', $s_genre);
                });
            });
        }

        if (isset($s_keyword)) {
            $query->whereHas('keywords', function ($q) use ($s_keyword) {
                $q->whereIn('keywords.id', $s_keyword);
            });
        }

        $places = $query->paginate(10);
        // dd($s_area, $s_prefecture, $s_genre, $s_keyword);

        return view('users.search.search')
                // ->with('all_places', $all_places)
                ->with('all_areas' , $all_areas)
                ->with('all_prefectures' , $all_prefectures)
                ->with('all_genres' , $all_genres)
                ->with('all_keywords' , $all_keywords)
                ->with('places', $places)
                ->with('s_category', $s_category ?? [])
                ->with('s_area', $s_area ?? [])
                ->with('s_prefectures', $s_prefecture ?? [])
                ->with('s_genre', $s_genre ?? [] )
                ->with('s_keywords', $s_keyword ?? []);
    }
}