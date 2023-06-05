<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
    
                return view('admin.plans.plan_details.recommended_plan_details', [        
                    'plan_details' => $plan->details,
                ]); 
            }
            
            # ----- FOR PLAN KEYWORD PAGE-----

            public function showKeyword($id){
                // $recommended_plans = $this->recommended_plan->findOrFail($id);

                // $recommended_place = PlanDetail::select('place_id')->where('plan_id', '=', $recommended_plan->id)->get();

            }
        }

        
