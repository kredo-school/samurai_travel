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
    private $place;
    private $area;
    private $prefecture;
    private $city;
    private $keyword;

    public function __construct(Place $place, Area $area, Prefecture $prefecture, City $city, Keyword $keyword)
    {
        $this->place = $place;
        $this->area = $area;
        $this->prefecture = $prefecture;
        $this->city = $city;
        $this->keyword = $keyword;
    }

    public function index()
    {
        $all_places = $this->place->latest()->paginate(3);
        return view('admin.places.index')->with('all_places', $all_places);
    }

    public function create()
    {
        $all_areas = $this->area->all();
        $all_prefectures = $this->prefecture->all();
        $all_cities = $this->city->all();
        
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
        
        #save the post
        $this->place->place_category = $request->place_category;
        $this->place->name_en        =  $request->name_en;
        $this->place->name_jp        =  $request->name_jp;
        $this->place->opening_time   =  Carbon::parse($request->opening_time);
        $this->place->ending_time   =   Carbon::parse($request->ending_time);
        $this->place->url           =  $request->url;
        $this->place->area_id       =  $request->area_id;
        $this->place->prefecture_id =  $request->prefecture_id;
        $this->place->city_id       =  $request->city_id;
        $this->place->address       =  $request->address;
        $this->place->spend_time    =  $request->spend_time;
        $this->place->save();

        return redirect()->route('place.index');
    }

    public function edit($id)
    {
        $all_areas = $this->area->all();
        $all_prefectures = $this->prefecture->all();
        $all_cities = $this->city->all();

        $place = $this->place->findOrFail($id);
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

    public function update(Request $request, $id)
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
        $place                 = $this->place->findOrFail($id);
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

    public function destroy($id)
    {
        $this->place->destroy($id);
        return redirect()->back();
    }
}
