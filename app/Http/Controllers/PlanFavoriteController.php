<?php

namespace App\Http\Controllers;

use App\Models\PlanFavorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class PlanFavoriteController extends Controller
{
    
        private $plan_favorite;

        public function __construct(PlanFavorite $plan_favorite)
        {
            $this->plan_favorite = $plan_favorite;
        }

    public function store($planId)
    {
        $user = Auth::user();
            

        // Check if the user has already favorited the plan
        $existingFavorite = PlanFavorite::where('user_id', $user->id)
            ->where('plan_id', $planId)
            ->first();

        if ($existingFavorite) {
                // Plan is already favorited by the user
                // implement the logic for unfavoriting here 
        } else {
                // Plan is not favorited by the user, so insert it into the plan_favorites table
                $favorite = new PlanFavorite();
                $favorite->user_id = $user->id;
                $favorite->plan_id = $planId;
                $favorite->save();    
        }

        return redirect()->back()->with('success', 'Added as my plan!');

    }

    public function destroy($planId)
    {
        $this->plan_favorite
        ->where('user_id', Auth::user()->id)
        ->where('plan_id', $planId)
        ->delete();

        return redirect()->back();
    }

}
