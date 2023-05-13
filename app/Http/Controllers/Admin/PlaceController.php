<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Prefecture;
use App\Models\City;
use App\Models\Place;
use App\Models\Keyword;
use Illuminate\Support\Carbon;

class PlaceController extends Controller
{
    //
    public function index()
    {
        $all_places = Place::latest()->paginate(10);
        
        return view('admin.places.index')->with('all_places', $all_places);
    }

    public function create()
    {
        $all_areas = Area::all();
        $all_prefectures = Prefecture::all();
        $all_cities = City::all();
        
        return view('admin.places.create')
                ->with('all_areas', $all_areas)
                ->with('all_prefectures', $all_prefectures)
                ->with('all_cities', $all_cities);
    }

    public function store(Request $request)
    {
        $request->validate([
            'place_category' =>  'required|in:spot,activity,restaurant,hotel',
            'name_en'        =>  'required|min:1|max:1000',
            'name_jp'        =>  'required|min:1|max:1000',
            'opening_time'   => 'nullable|date_format:H:i',
            'ending_time'    => 'nullable|date_format:H:i',
            'url'            =>  'nullable|url',
            'area_id'        =>  'required',
            'prefecture_id'  =>  'required',
            'city_id'        =>  'required',
            'address'        =>  'nullable|min:1|max:1000',
            'spend_time'     =>  'nullable|integer'
        ]);
        
        Place::create([
            'place_category' => $request->place_category,
            'name_en'        =>  $request->name_en,
            'name_jp'        =>  $request->name_jp,
            'opening_time'   =>  Carbon::parse($request->opening_time),
            'ending_time'   =>   Carbon::parse($request->ending_time),
            'url'           =>  $request->url,
            'area_id'      =>  $request->area_id,
            'prefecture_id' =>  $request->prefecture_id,
            'city_id'       =>  $request->city_id,
            'address'       =>  $request->address,
            'spend_time'    =>  $request->spend_time
        ]);

        return redirect()->route('place.index');
    }

    public function edit(Place $place)
    {
        $all_areas = Area::all();
        $all_prefectures = Prefecture::all();
        $all_cities = City::all();

        $opening_time  = date('H:i', strtotime($place->opening_time));
        $place->opening_time = $opening_time;
        $ending_time  = date('H:i', strtotime($place->ending_time));
        $place->ending_time = $ending_time;

        return view('admin.places.edit')
                ->with('all_areas', $all_areas)
                ->with('all_prefectures', $all_prefectures)
                ->with('all_cities', $all_cities)
                ->with('place' ,$place);
    }

    public function update(Request $request, Place $place)
    {
        $request->validate([
            'place_category' =>  'required|in:spot,activity,restaurant,hotel',
            'name_en'        =>  'required|min:1|max:1000',
            'name_jp'        =>  'required|min:1|max:1000',
            'opening_time'   => 'nullable|date_format:H:i',
            'ending_time'    => 'nullable|date_format:H:i',
            'url'            =>  'nullable|url',
            'area_id'        =>  'required',
            'prefecture_id'  =>  'required',
            'city_id'        =>  'required',
            'address'        =>  'nullable|min:1|max:1000',
            'spend_time'     =>  'nullable|integer'
        ]);
        
        #save the post
        $place->place_category = $request->place_category;
        $place->name_en        =  $request->name_en;
        $place->name_jp        =  $request->name_jp;
        $place->opening_time   =  Carbon::parse($request->opening_time);
        $place->ending_time   =  Carbon::parse($request->ending_time);
        $place->url           =  $request->url;
        $place->area_id       =  $request->area_id;
        $place->prefecture_id =  $request->prefecture_id;
        $place->city_id       =  $request->city_id;
        $place->address       =  $request->address;
        $place->spend_time    =  $request->spend_time;

        $place->save();

        return redirect()->route('place.index');
    }

    public function destroy(Place $place)
    {
        $place->delete();
        return redirect()->back();
    }
}
