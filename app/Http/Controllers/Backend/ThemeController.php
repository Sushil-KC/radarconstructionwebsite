<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\ThemeSetting;
use Brian2694\Toastr\Facades\Toastr;

class ThemeController extends Controller
{
    //View Theme
    public function ThemeView()
    {
        Session::put('admin_page', 'theme');
        $theme_edit = ThemeSetting::first();
        return view('backend.theme.theme_view',compact('theme_edit'));
    }

    public function ThemeStore(Request $request)
    {
        $theme = ThemeSetting::find(1);
        $theme->facebook_link = $request->facebook_link;
        $theme->linkedin_link = $request->linkedin_link;
        $theme->twitter_link = $request->twitter_link;
        $theme->youtube_link = $request->youtube_link;
        $theme->address = $request->address;
        $theme->email = $request->email;
        $theme->phone_number = $request->phone_number;
        $theme->phone_number = $request->phone_number;
        $theme->maps_link = $request->maps_link;
        if ($request->file('logo')) {
            $file = $request->file('logo');
            @unlink('./uploads/theme_logo/' . $theme->logo);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/theme_logo/'), $filename);
            $theme['logo'] = $filename;
        }
        $theme->save();
        Toastr::success('Success', 'Theme Updated Successfully');
        return redirect()->back();
    }
}
