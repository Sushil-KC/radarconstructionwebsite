<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Project;
use Illuminate\Support\Facades\Session;
class IndexController extends Controller
{
    //Home View
    public function Home()
    {
        Session::put('front_page', 'home_user');
        $projects_item = Project::latest()->get();
        $services = Service::orderBy('id','DESC')->take(6)->get();
        $slider = Slider::latest()->get();
        return view('frontend.index',compact('slider','services','projects_item'));
    }
}
