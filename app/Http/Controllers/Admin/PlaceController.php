<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Prefecture;
use App\Models\City;
use App\Models\Place;
use App\Models\Keyword;
// use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    //
    const LOCAL_STORAGE_FOLDER = 'public/sample/';

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
            'name_en'        =>  'required|max:1000',
            'name_jp'        =>  'required|max:1000',
            'opening_time'   =>  'nullable',
            'ending_time'    =>  'nullable',
            'url'            =>  'nullable|url',
            'area_id'        =>  'required',
            'prefecture_id'  =>  'required',
            'city_id'        =>  'required',
            'address'        =>  'nullable|min:1|max:1000',
            'spend_time'     =>  'nullable|integer',
            'image'        =>  'required|mimes:jpg,png,jpeg,gif|max:10000',
            'description'  =>  'required|max:100',
            'open_ampm'    =>  'nullable|in:am,pm',
            'end_ampm'    =>  'nullable|in:am,pm'
        ]);
        
        Place::create([
            'place_category' => $request->place_category,
            'name_en'        =>  $request->name_en,
            'name_jp'        =>  $request->name_jp,
            'opening_time'   =>  $request->opening_time,
            'ending_time'   =>   $request->ending_time,
            'url'           =>  $request->url,
            'area_id'      =>  $request->area_id,
            'prefecture_id' =>  $request->prefecture_id,
            'city_id'       =>  $request->city_id,
            'address'       =>  $request->address,
            'spend_time'    =>  $request->spend_time,
            'image'       => $this->saveImage($request),
            'description' => $request->description,
            'open_ampm' => $request->open_ampm,
            'end_ampm' => $request->end_ampm
        ]);

        return redirect()->route('admin.place.index');
    }

    private function saveImage($request){
        $image_name = time() . "." . $request->image->extension();
    
        $request->image->storeAs(self::LOCAL_STORAGE_FOLDER, $image_name);

        return $image_name;
    }

    public function edit(Place $place)
    {
        $all_areas = Area::all();
        $all_prefectures = Prefecture::where('area_id', $place->area_id)->get();
        $all_cities = City::where('prefecture_id', $place->prefecture_id)->get();

        // $opening_time  = date('H:i', strtotime($place->opening_time));
        // $place->opening_time = $opening_time;
        // $ending_time  = date('H:i', strtotime($place->ending_time));
        // $place->ending_time = $ending_time;

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
            'name_en'        =>  'required|max:1000',
            'name_jp'        =>  'required|max:1000',
            'opening_time'   =>  'nullable',
            'ending_time'    =>  'nullable',
            'url'            =>  'nullable|url',
            'area_id'        =>  'required',
            'prefecture_id'  =>  'required',
            'city_id'        =>  'required',
            'address'        =>  'nullable|min:1|max:1000',
            'spend_time'     =>  'nullable|integer',
            'image'        =>  'mimes:jpg,png,jpeg,gif|max:10000',
            'description'  =>  'required|max:100',
            'open_ampm'    =>  'nullable|in:am,pm',
            'end_ampm'    =>  'nullable|in:am,pm'
        ]);
        
        #save the post
        $place->place_category = $request->place_category;
        $place->name_en        =  $request->name_en;
        $place->name_jp        =  $request->name_jp;
        // $place->opening_time   =  Carbon::parse($request->opening_time);
        $place->opening_time   =  $request->opening_time;
        // $place->ending_time   =  Carbon::parse($request->ending_time);
        $place->ending_time   =  $request->ending_time;
        $place->url           =  $request->url;
        $place->area_id       =  $request->area_id;
        $place->prefecture_id =  $request->prefecture_id;
        $place->city_id       =  $request->city_id;
        $place->address       =  $request->address;
        $place->spend_time    =  $request->spend_time;
        $place->description = $request->description;
        $place->open_ampm   = $request->open_ampm;
        $place->end_ampm   = $request->end_ampm;

        if($request->image){
            $this->deleteImage($place->image);

            $place->image = $this->saveImage($request);
        }

        $place->save();

        return redirect()->route('admin.place.index');
    }

    private function deleteImage($image_name){
        $image_path = self::LOCAL_STORAGE_FOLDER . $image_name;

        if(Storage::disk('local')->exists($image_path)){
            Storage::disk('local')->delete($image_path);
        }
    }

    public function destroy(Place $place)
    {
        $this->deleteImage($place->image);
        $place->delete();
        return redirect()->back();
    }

    public function getPrefecturesByArea(Request $request) {
        if ($request->ajax()) {
            $prefectures = Prefecture::where('area_id', $request->input('area_id'))->get();

            return response()->json($prefectures);
        }
    }

    public function getCitiesByPrefecture(Request $request) {
        if ($request->ajax()) {
            $cities = City::where('prefecture_id', $request->input('prefecture_id'))->get();

            return response()->json($cities);
        }
    }
}
