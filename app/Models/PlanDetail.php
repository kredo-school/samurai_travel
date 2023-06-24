<?php

namespace App\Models;


use App\Models\Plan;
use App\Models\Place;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isNull;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlanDetail extends Model
{
    use HasFactory;

    public function plan(){
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function place(){
        return $this->belongsTo(Place::class, 'place_id');
    }

    public function createPlanDetail(int $target_prefecture_id, array $keyword_list = null)
    {
        if (empty($keyword_list)) {
            $place_ids = PlaceKeyword::whereIn('keyword_id', $keyword_list)->get();
            $place_list = Place::where('prefecture_id', $target_prefecture_id)->whereIn('id', $place_ids)->get();
        } else {
            $place_list = Place::where('prefecture_id', $target_prefecture_id)->get();
        }

        $plan_details = $this->setPlaceToPlanDetail($place_list);
        if (!empty(array_keys($plan_details, ''))) {
            $place_list = Place::where('prefecture_id', $target_prefecture_id)->get();
            $plan_details = $this->setPlaceToPlanDetail($place_list);
        }

        return $plan_details;
    }

    public function storePlanDetail(string $plan_id, Array $place_ids, int $day = null)
    {
        $day = is_null($day) ? 1 : $day;
        $plan_details = [];
        foreach ($place_ids as $index => $place_id) {
            $plan_details[] = ['plan_id' => $plan_id, 'day' => $day, 'place_id' => $place_id, 'sort_no' => $index ];
        }

        $result = DB::table('plan_details')->insert($plan_details);
        return $result;
    }

    public function setPlaceToPlanDetail(Collection $place_list)
    {
        $plan_details = array_fill_keys(['am1', 'lunch', 'pm1', 'pm2', 'dinner', 'hotel'], []);
        foreach ($place_list as $place) {
            switch ($place->place_category) {
                case 'hotel':
                    if (!empty($plan_details['hotel'])) break;
                    $plan_details['hotel'] = $place;
                    break;
                case 'restaurant':
                    if (!empty($plan_details['lunch']) && !empty($plan_details['dinner'])) break;
                    if (!empty($plan_details['lunch'])
                        && (
                            ($place->opening_ampm === 'am' && intval($place->opening_time) <= 1200)
                            || ($place->opening_ampm === 'pm' && intval($place->opening_time) <= 0100)
                            || is_null($place->opening_time)
                        )) {
                        $plan_details['lunch'] = $place;
                    } elseif (!empty($plan_details['dinner'])
                        && (
                            (($place->opening_ampm === 'am' && intval($place->opening_time) <= 1200)
                                || ($place->opening_ampm === 'pm' && intval($place->opening_time) <= 0600)
                                || is_null($place->opening_time)
                            ) && (
                                ($place->ending_ampm === 'pm' && intval($place->ending_time) >= 0)
                                || is_null($place->ending_time)
                        ))) {
                        $plan_details['dinner'] = $place;
                    } else {
                        if (empty($plan_details['lunch'])) {
                            $plan_details['lunch'] = $place;
                        } elseif (empty($plan_details['dinner'])) {
                            $plan_details['dinner'] = $place;
                        }
                    }
                    break;
                default:
                    if (!empty($plan_details['am1']) && !empty($plan_details['pm1']) && !empty($plan_details['pm2'])) break;
                    if (empty($plan_details['am1'])
                        && (($place->opening_ampm === 'am' && intval($place->opening_time) <= 1200)
                            || ($place->opening_ampm === 'pm' && intval($place->opening_time) <= 0100)
                            || is_null($place->ending_time)
                        )) {
                        $plan_details['am1'] = $place;
                    } elseif (empty($plan_details['pm1'])
                        && (($place->opening_ampm === 'pm' && intval($place->opening_time) <= 0300)
                            || ($place->opening_ampm === 'am' && intval($place->opening_time) <= 1200)
                            || is_null($place->opening_time) 
                        ) && (
                            ($place->ending_ampm === 'pm' && intval($place->ending_time) >= 0)
                            || is_null($place->ending_time)
                        )) {
                        $plan_details['pm1'] = $place;
                    } elseif (empty($plan_details['pm2'])
                        && (($place->opening_ampm === 'pm' && intval($place->opening_time) <= 0600)
                        || ($place->opening_ampm === 'am' && intval($place->opening_time) <= 1200)
                        || is_null($place->opening_time) 
                        ) && (
                            ($place->ending_ampm === 'pm' && intval($place->ending_time) >= 0)
                            || is_null($place->ending_time)
                        )) {
                        $plan_details['pm2'] = $place;
                    } else {
                        if (empty($plan_details['am1'])) {
                            $plan_details['am1'] = $place;
                        } elseif (empty($plan_details['pm1'])) {
                            $plan_details['pm1'] = $place;
                        } elseif (empty($plan_details['pm2'])) {
                            $plan_details['pm2'] = $place;
                        }
                    }
                    break;
            }
        }
        return $plan_details;
    }
}

