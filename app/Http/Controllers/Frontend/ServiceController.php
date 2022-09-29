<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    //Service View
    public function Service()
    {
        Session::put('front_page', 'service_page');
        $services = Service::latest()->get();
        return view('frontend.services', compact('services'));
    }


    public function ServiceDetails($id,$slug)
    {
        Session::put('front_page', 'service_page');
        $services = Service::find($id);
        $blogKey = $services->id;
        Service::find($blogKey)->increment('view_count');
        if (Service::where('id', '!=', $id)) {

            $service_all = Service::where('id', '!=', $id)->take(5)->latest()->get();
        }
      
        return view('frontend.service_details', compact('services', 'service_all'));
    }
}
