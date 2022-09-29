<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    //Team Page View
    public function Teams()
    {
        Session::put('front_page', 'team_page');
        return view('frontend.team');
    }
}
