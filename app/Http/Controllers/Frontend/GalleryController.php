<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Session;
class GalleryController extends Controller
{
    //Gallery View
    public function Gallery()
    {
        Session::put('front_page', 'gallery_page');
        $gallery = Gallery::latest()->get();
        return view('frontend.gallery',compact('gallery'));
    }
}
