<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    //Contact View
    public function Contact()
    {
        Session::put('front_page', 'contact_page');
        return view('frontend.contact');
    }
}
