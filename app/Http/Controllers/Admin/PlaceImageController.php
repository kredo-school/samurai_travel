<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Models\PlaceImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlaceImageController extends Controller
{
    //
    const LOCAL_STORAGE_FOLDER = 'public/sample/';

    public function show(Place $place)
    {
        $all_place_images = PlaceImage::where('place_id', $place->id)->paginate(10);

        return view('admin.places.place_images.show')
                ->with('place', $place)
                ->with('all_place_images', $all_place_images);
    }

    public function create(Place $place)
    {
        return view('admin.places.place_images.create')
                ->with('place', $place);
    }

    public function store(Request $request, Place $place)
    {
        $request->validate([
            // 'image_no'     =>  'required|integer',
            'image'        =>  'required|mimes:jpg,png,jpeg,gif|max:10000',
            'description'  =>  'required|max:1000',
            'name_en'        =>  'required|max:1000',
            'name_jp'        =>  'required|max:1000'
        ]);

        $latestImage = PlaceImage::where('place_id',$place->id)->max('image_no');

        $ImageNo = $latestImage ? $latestImage + 1 : 1;

        PlaceImage::create([
            'place_id'    => $place->id,
            'image_no'    => $ImageNo,
            // 'image_no'    => $request->image_no,
            'image'       => $this->saveImage($request),
            'description' => $request->description,
            'name_en'        =>  $request->name_en,
            'name_jp'        =>  $request->name_jp,
        ]);
        
        return redirect()->route('admin.place_image.show', $place);
    }

    private function saveImage($request){
        $image_name = time() . "." . $request->image->extension();
    
        $request->image->storeAs(self::LOCAL_STORAGE_FOLDER, $image_name);

        return $image_name;
    }

    public function edit(PlaceImage $place_image)
    {
        $all_place_images = PlaceImage::all();

        return view('admin.places.place_images.edit')
                ->with('place_image', $place_image)
                ->with('all_place_images', $all_place_images);
    }

    public function update(Request $request, PlaceImage $place_image)
    {
        $request->validate([
            'image_no'     =>  'required|integer',
            'image'        =>  'mimes:jpg,png,jpeg,gif|max:10000',
            'description'  =>  'required|max:1000',
            'name_en'        =>  'required|max:1000',
            'name_jp'        =>  'required|max:1000'
        ]);

        $place_image->image_no = $request->image_no;
        $place_image->description = $request->description;
        $place_image->name_en        =  $request->name_en;
        $place_image->name_jp        =  $request->name_jp;

        if($request->image){
            $this->deleteImage($place_image->image);

            $place_image->image = $this->saveImage($request);
        }

        $place_image->save();

        return redirect()->route('admin.place_image.show', $place_image->place_id);
    }

    private function deleteImage($image_name){
        $image_path = self::LOCAL_STORAGE_FOLDER . $image_name;

        if(Storage::disk('local')->exists($image_path)){
            Storage::disk('local')->delete($image_path);
        }
    }

    public function destroy(PlaceImage $place_image)
    {
        $this->deleteImage($place_image->image);
        $place_image->forceDelete();
        return redirect()->back();
    }
} 
