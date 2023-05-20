<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PlaceFavorite;

class PlaceFavoriteController extends Controller
{
    private $favorite;

    public function __construct(PlaceFavorite $favorite)
    {
        $this->favorite = $favorite;
    }

    public function store($place_id)
    {
        $this->favorite->user_id = Auth::user()->id;
        $this->favorite->place_id = $lace_id;
        $this->favorite->save();

        return redirect()->back();
    }

    public function destroy($place_id)
    {
        $this->favorite
            ->where('place_id', $place_id)
            ->where('user_id', Auth::user()->id)
            ->delete();

        return redirect()->back();
    }
}
