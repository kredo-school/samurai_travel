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

        $recommended_plans = Plan::where('user_type', '=' , 'admin')->get();
        
        $places= [];
        $plan_details = null;

        // foreach ($recommended_plans as $recommended_plan){
        //     $placeIds= PlanDetail::select('place_id')->where('plan_id', '=', $recommended_plan->id)->get();
        //     $places = Place::whereIn('id', $placeIds)->get();
        //     $plan_details = PlanDetail::where('plan_id', $recommended_plan->id)->first();     
        // }

        $placeForPlanGroups = $places;

            return view('admin.plans.recommended_plans', [        
                'recommended_plans' => $recommended_plans, 
                'places' => $places,
                'plan_details' => $plan_details,
                'placeForPlanGroups' => $placeForPlanGroups,
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
                $recommended_plan->save();

                return redirect()->route('recommended_plans');
        }
    

        public function update($id, Request $request){
            $request->validate([
                'new_title'  => 'required|max:50' 
            ]);

            $recommended_plan = Plan::findOrFail($id);
            $recommended_plan->user_id = Auth::user()->id;
            $recommended_plan->title = ucwords(strtolower($request->new_title));
            $recommended_plan->save();

            return redirect()->route('recommended_plans');
        }
    
        public function destroy(Plan $recommended){
            $recommended->delete();
            return redirect()->back();
        }
        
        # -----FOR PLAN DETAILS PAGE-----
        
        public function showDetail($id){
            $recommended_plans = $this->recommended_plan->findOrFail($id);
                $placeIds= PlanDetail::select('place_id')->where('plan_id', '=', $recommended_plans->id)->get();
                $places = Place::whereIn('id', $placeIds)->get();
                $plan_details = PlanDetail::where('plan_id', $recommended_plans->id)->first(); 

                $placeForPlanGroups = $places;

                //testing
                $recommended_plans_test = Plan::where('user_type', '=' , 'admin')->take(3)->get();
        
            
                return view('admin.plans.plan_details.recommended_plan_details', [        
                    'plans' => $recommended_plans, 
                    'places' => $places,
                    'plan_details' => $plan_details,
                    'placeForPlanGroups' => $placeForPlanGroups,
                    'recommended_plans'=>$recommended_plans_test
                ]); 
            }
            // $recommended_plans = Plan::where('user_type', '=' , 'admin')->get();
            
            // $places= [];
            // $plan_details = null;
    
            // foreach ($recommended_plans as $recommended_plan){
            //     $placeIds= PlanDetail::select('place_id')->where('plan_id', '=', $recommended_plan->id)->get();
            //     $places = Place::whereIn('id', $placeIds)->get();
            //     $plan_details = PlanDetail::where('plan_id', $recommended_plan->id)->first();     
            // }
    
            // $placeForPlanGroups = $places;
    
            //     return view('admin.plans.plan_details.recommended_plan_details', [        
            //         'recommended_plans' => $recommended_plans, 
            //         'places' => $places,
            //         'plan_details' => $plan_details,
            //         'placeForPlanGroups' => $placeForPlanGroups,
            //     ]); 
            
        }

        
