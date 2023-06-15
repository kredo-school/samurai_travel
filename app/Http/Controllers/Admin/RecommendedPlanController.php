<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use App\Models\Prefecture;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Interest;
use App\Models\Place;
use App\Models\User;
use App\Models\Keyword;
use App\Models\PlaceImage;
use App\Models\PlaceKeyword;
use App\Models\Plan;
use App\Models\PlanDetail;
use App\Models\PlanFavorite;
use App\Models\PlanKeyword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;


class RecommendedPlanController extends Controller

{
    private $recommended_plan;

    public function __construct(Plan $recommended_plan){
        $this->recommended_plan = $recommended_plan;
    }

    //----- For RECOMMENDED PLANS LIST PAGE -----

    # Use this to show the list of the Recommended plans
    public function index(){
        $recommended_plans = Plan::where('user_type', '=' , 'admin')->paginate(10);

        return view('admin.plans.recommended_plans', [        
            'recommended_plans' => $recommended_plans, 
        ]); 
    } 
        
    public function store(Request $request){
            $request->validate
            ([
                'title' => 'required|max:15|unique:plans,title',
            ]);
            
            $recommended_plan = new Plan;
            $recommended_plan->title =  ucwords(strtolower($request->title));
            $recommended_plan->user_id = Auth::user()->id;
            $recommended_plan->user_type = 'admin';
            $recommended_plan->save();

            return redirect()->route('recommended_plans');
    }

    public function update($id, Request $request){
        $request->validate([
            'new_title'  => 'required|max:50|unique:plans,title' 
        ]);

        $recommended_plan = Plan::findOrFail($id);
        $recommended_plan->user_id = Auth::user()->id;
        $recommended_plan->user_type = 'admin';
        $recommended_plan->title = ucwords(strtolower($request->new_title));
        $recommended_plan->save();

        return redirect()->route('recommended_plans');
    }
    
    public function destroy(Plan $recommended_plan, $id){
        $recommended_plan->destroy($id);
        return redirect()->back();
    }
        
    # -----FOR PLAN DETAILS PAGE-----
    public function showDetail(Plan $plan){
        $all_places = Place::all();
        $plans = Plan::all();
    
        return view('admin.plans.plan_details.recommended_plan_details')        
            ->with('plan_details', $plan->details)
            ->with('all_places', $all_places)
            ->with('plans', $plans);
            // 'plan_details' => $plan,
    }

    #----- FOR CREATE PAGE -----
    public function createDetail(Plan $plan, Request $request){
            $all_places = Place::all();
            $plans = Plan::all();
        return view('admin.plans.plan_details.recommended_plan_details_create')
        ->with('plans', $plans)
        ->with('all_places', $all_places)
        ->with('plan_details', $plan->details);  
        }

    # -----For display Place list page (for create page )-----
    public function createPlace(){
            $all_places = Place::latest()->paginate(10);
            $all_area = Area::all();
            $all_prefecture = Prefecture::all();
            $all_city = City::all();
            
        return view('admin.plans.place.place_create')
        ->with('all_places', $all_places)
        ->with('all_area', $all_area)
        ->with('all_prefecture', $all_prefecture)
        ->with('all_city', $all_city);
    }
        
    public function search(Request $request)
    {
        $places = new Place;
        $all_places = Place::all();
        $all_areas = Area::all();
        $all_prefectures = Prefecture::all();
        $all_cities = City::all();

        $s_place_div = $request->input('place_div');
        $s_name_en = $request->input('name_en');
        $s_area = $request->input('area');
        $s_prefecture = $request->input('prefecture');
        $s_city = $request->input('city');

        $query = Place::query();

        if(isset($s_place_div)){
            $query->whereIn('place_div', $s_place_div);
        }

        if(isset($s_name_en)){
            $query->whereIn('name_en', $s_name_en);
        }

        if(isset($s_category)){
            $query->whereIn('place_category', $s_category);
        }

        if(isset($s_area)){
            $query->whereIn('area_id', $s_area);
        }

        if(isset($s_prefecture)){
            $query->whereIn('prefecture_id', $s_prefecture);
        }

        if(isset($s_city)){
            $query->whereIn('city', $s_city);
        }

        $places = $query->paginate(10);

        return view('users.search.search')
                ->with('all_places', $all_places)
                ->with('all_areas' , $all_areas)
                ->with('all_prefectures' , $all_prefectures)
                ->with('all_cities' , $all_cities)
                ->with('places', $places)
                ->with('s_area', $s_area ?? [])
                ->with('s_prefectures', $s_prefecture ?? [])
                ->with('s_city', $s_city ?? [] );
    }

    //Create the content of the plan
    public function storeDetail(Request $request, PlanDetail $plan_detail){

        $request->validate([
            'place_id'  => 'required',
            'day' => 'required',
            'sort_no' => 'required',
            'plan_id' => 'required'
        ]);
        
        $plan_detail = new PlanDetail();
        $plan_detail->plan_id = $request->plan_id;
        $plan_detail->place_id = $request->place_id;
        $plan_detail->day = $request->day;
        $plan_detail->sort_no = $request->sort_no;
        $plan_detail->save();
        
        return redirect()->route('show.plan_details', ['plan' => $request->plan_id]);
    }
        
    // Use this to display the edit page       
    public function editDetail(Plan $plan, PlanDetail $detail){
        $all_places = Place::all();
        $plans = Plan::all();

        return view('admin.plans.plan_details.recommended_plan_details_edit', [
            'plans' => $plans,
            'all_places' => $all_places,
            'plan_details' => $plan->details,
            'plan_detail' => $detail
        ]);
    }

    # -----For display Place list page (for edit page)-----
    public function updatePlace(Plan $plan){
        $all_places = Place::latest()->paginate(10);
        $all_area = Area::all();
        $all_prefecture = Prefecture::all();
        $all_city = City::all();
        $plans = Plan::all();

    return view('admin.plans.place.place_edit')
    ->with('all_places', $all_places)
    ->with('all_area', $all_area)
    ->with('all_prefecture', $all_prefecture)
    ->with('all_city', $all_city)
    ->with('plan_details', $plan->details);
}
    

    //PLAN DETAILS の内容を更新
    public function updateDetail(Request $request, PlanDetail $plan_detail){
        $request->validate([
            'place_id'  => 'required',
            'day' => 'required',
            'sort_no' => 'required',
            'plan_id' => 'required'
        ]);
        
        // $plan_detail = PlanDetail::find($request->id);
        // $plan_detail->plan_id = $request->plan_id;
        // $plan_detail->place_id = $request->place_id;
        // $plan_detail->day = $request->day;
        // $plan_detail->sort_no = $request->sort_no;
        $plan_detail->save();

        return redirect()->route('show.plan_details', ['plan' => $request->plan_id],['plan_detail' => $request->id]);
    }
    
    public function destroyDetail(PlanDetail $plan_detail, $id){
        $plan_detail->destroy($id);
        return redirect()->back();

    }

    # ----- FOR PLAN KEYWORD PAGE-----

    public function showKeyword(Plan $plan){               
        $all_keywords = Keyword::all();

        $planKeywords = $plan->keywords;

        return view('admin.plans.keywords.recommended_plan_keyword', [        
        'plan_keywords' => $planKeywords,
        'recommended_plan' => $plan,
        'all_keywords' => $all_keywords,
        ]); 
    }

    public function storeKeyword(Request $request){
        $request->validate
        ([
            'keyword_id' => 'required',
            'plan_id' => 'required'
        ]);

        $plan = Plan::find($request->plan_id);
        $plan->keywords()->attach($request->keyword_id);

        return redirect()->back();
    }

    public function updateKeyword(Request $request, Keyword $keyword)
    {
        $request->validate([
            'keyword_id' => 'required'
        ]);

        $plan = Plan::find($request->plan_id);
        $plan->keywords()->detach($keyword->id);
        $plan->keywords()->attach($request->keyword_id);

        return redirect()->back();
    }

    public function destroyKeyword(Plan $plan, Keyword $keyword){
        $plan->keywords()->detach($keyword->id);
        $keyword->delete();
        return redirect()->back();
    }

}