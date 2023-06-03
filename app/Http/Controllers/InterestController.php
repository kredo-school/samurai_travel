<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;


class InterestController extends Controller
{
    private $interest;

    public function __construct(Interest $interest){
        $this->interest = $interest;
    }

    public function store($keyword_id){
        $this->interest->user_id = Auth::user()->id;
        $this->interest->keyword_id = $keyword_id; 
        $this->interest->save();

        return redirect()->back();
    }
}
