<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;
use App\Models\ThemeSetting;
use Illuminate\Support\Facades\Session;
use Brian2694\Toastr\Facades\Toastr;
class HomeController extends Controller
{
    //Slider View
    public function SliderView()
    {
        Session::put('admin_page', 'Home');
        $slider = Slider::latest()->get();
        return view('backend.slider.slider_view',compact('slider'));
    }


    //Slider Add View
    public function SliderAdd()
    {
        
        Session::put('admin_page', 'Home');
        return view('backend.slider.slider_add');
    }

    public function SliderStore(Request $request)
    {
        $slider = new Slider;
        $slider->heading_en = $request->heading_en;
        $slider->heading_np = $request->heading_np;
        $slider->slider_para_en = $request->slider_para_en;
        $slider->slider_para_np = $request->slider_para_np;
        $slider->status = $request->status;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink('./uploads/slider_image/' . $slider->logo);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/slider_image/'), $filename);
            $slider['image'] = $filename;
        }
        $slider->save();
        Toastr::success('Success', 'Slider Added Successfully');
        return redirect()->route('admin.sliderView');
    }

    public function SliderStoreActive($id)
    {
        $active = Slider::find($id);
        Slider::find($id)->update(['status'=>0]);
        Toastr::success('Success', 'Slider has been Inactive Successfully');
        return redirect()->route('admin.sliderView');

    }
    public function SliderStoreInActive($id)
    {
        $active = Slider::find($id);
        Slider::find($id)->update(['status'=>1]);
        Toastr::success('Success', 'Slider has been Active Successfully');
        return redirect()->route('admin.sliderView');

    }

    public function SliderEdit($id){
        $slider_edit = Slider::find($id);
        return view('backend.slider.slider_edit',compact('slider_edit'));
    }

    public function SliderUpdate(Request $request, $id){
        $slider = Slider::find($id);

        $slider->heading_en = $request->heading_en;
        $slider->heading_np = $request->heading_np;
        $slider->slider_para_en = $request->slider_para_en;
        $slider->slider_para_np = $request->slider_para_np;
        $slider->status = $request->status;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink('./uploads/slider_image/' . $slider->logo);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/slider_image/'), $filename);
            $slider['image'] = $filename;
        }
        $slider->save();
        Toastr::success('Success', 'Slider Updated Successfully');
        return redirect()->route('admin.sliderView');
    }

    public function SliderDelete($id){
        $slider_delete = Slider::find($id);
        $slider_delete->delete();
        Toastr::warning('Success', 'Slider Delete Successfully');
        return redirect()->route('admin.sliderView');
    }
}
