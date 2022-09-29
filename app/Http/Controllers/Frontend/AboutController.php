<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class AboutController extends Controller
{
    //ABout View
    public function About()
    {
        Session::put('front_page', 'about_page');
        return view('frontend.about');
    }
}
