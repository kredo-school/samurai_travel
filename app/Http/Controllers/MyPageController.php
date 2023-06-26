<?php

namespace App\Http\Controllers;

use IntlChar;
use Whoops\Run;
use App\Models\Plan;
use App\Models\User;
use App\Models\Keyword;
use App\Models\Interest;
use App\Models\PlanFavorite;
use Illuminate\Http\Request;
use App\Models\PlaceFavorite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MyPageController extends Controller
{
    const LOCAL_STORAGE_FOLDER = 'public/avatar/';

    public function index()
    {
        $place_favorites = Auth::user()->myPagePlaceFavorites;
        $plan_favorites = Auth::user()->myPagePlanFavorites;
        $interests = Auth::user()->myPageInterests;
        $my_plans = Auth::user()->myPageMyPlans;

        return view('users.my_page.index', compact('place_favorites', 'plan_favorites', 'interests', 'my_plans'));
    }

    // Get keywords
    public function keywordIndex(Request $request) {
        // Get user's interest keywords
        $interests = Auth::user()->myPageInterests;
        $keyword_ids = array();
        foreach ($interests as $interest) {
            $keyword_ids[] = $interest->keyword_id;
        }

        // Get keywords
        $query = Keyword::query();
        $query->select("id","name")
                ->whereNotIn('id', $keyword_ids);
        if($request->has('q')){
            // When search words are entered
            $search = $request->q;
            $query->where('name','LIKE',"%$search%");
        }
        $query->orderBy('genre_id', 'asc')->orderBy('name', 'asc');
        $data = [];
        $data = $query->get();

        return response()->json($data);
    }

    // Add interest
    public function storeInterest(Request $request)
    {
        $request->validate([
            'keyword_id' => 'required',
        ]);

        // init
        $result = 'NG';
        $keyword_name = '';
        $interest_id = '';

        // Get user's interest
        $user_id = Auth::user()->id;
        $keyword_id = $request->keyword_id;
        $interest = DB::table('interests')->where('user_id', $user_id)->where('keyword_id', $keyword_id)->first();

        // Check if user's interest exists
        if (!$interest) {
            $interest = Interest::create([
                            'user_id' => $user_id,
                            'keyword_id' => $keyword_id,
                        ]);
            $interest_id = $interest->id;

            $keyword = Keyword::findOrFail($keyword_id);
            $keyword_name = $keyword->name;

            $result = 'OK';
        } else {
            $result = 'OK';
        }

        return response()->json([
            'result' => $result,
            'keyword_name' => $keyword_name,
            'interest_id' => $interest_id,
        ]);
    }

    // Delete interest
    public function destroyInterest($id)
    {
        if (Interest::findOrFail($id)->user_id !== Auth::user()->id) {
            return response()->json(['result' => 'NG']);
        }

        Interest::destroy($id);

        return response()->json(['result' => 'OK']);
    }

    // Delete place favorite
    public function destroyPlaceFavorite($place_id)
    {
        PlaceFavorite::where('user_id', Auth::user()->id)->where('place_id', $place_id)->delete();

        return response()->json(['result' => 'OK']);
    }

    // Delete plan favorite
    public function destroyPlanFavorite($id)
    {
        if (PlanFavorite::findOrFail($id)->user_id !== Auth::user()->id) {
            return response()->json(['result' => 'NG']);
        }

        PlanFavorite::destroy($id);

        return response()->json(['result' => 'OK']);
    }

    // Delete my plan
    public function destroyMyPlan($id)
    {
        if (Plan::findOrFail($id)->user_id !== Auth::user()->id) {
            return response()->json(['result' => 'NG']);
        }

        Plan::destroy($id);

        return response()->json(['result' => 'OK']);
    }

    // Update Profile
    public function updateProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'avatar_image' => 'image|mimes:jpeg,jpg,png,gif|max:1024',
        ]);

        $avatar = Auth::user()->avatar;
        // Save image
        if ($request->hasFile('avatar_image')) {
            if (Auth::user()->avatar) {
                $this->removeImage(Auth::user()->avatar);
            }
            $avatar = $this->saveImage($request->avatar_image);
        }
        // Remove image
        if ($request->has('remove_avatar_image')) {
            $this->removeImage(Auth::user()->avatar);
            $avatar = null;
        }

        $user = User::findOrFail(Auth::user()->id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->avatar = $avatar;;
        $user->save();

        return redirect()->route('my_page');
    }

    // Save image
    private function saveImage($image)
    {
        $image_name = Auth::user()->id. "." . $image->extension();

        $image->storeAs(self::LOCAL_STORAGE_FOLDER, $image_name);

        return $image_name;
    }

    // Remove image
    private function removeImage($image_name)
    {
        $image_path = self::LOCAL_STORAGE_FOLDER. $image_name;

        if (Storage::disk('local')->exists($image_path)) {
            Storage::disk('local')->delete($image_path);
        }
    }

}
