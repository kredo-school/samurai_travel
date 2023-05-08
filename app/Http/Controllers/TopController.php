<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        return view('users.top');
    }
}
