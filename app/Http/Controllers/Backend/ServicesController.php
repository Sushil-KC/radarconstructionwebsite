<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    //Service View
    public function ServiceView()
    {
        Session::put('admin_page', 'Service');
        $services = Service::latest()->get();
        return view('backend.services.service_view',compact('services'));
    }

    //Service Add
    public function ServiceAdd()
    {
        return view('backend.services.service_add');
    }

    //Service Store
    public function ServiceStore(Request $request)
    {
        $service = new Service();
        $service->heading_en = $request->heading_en;
        $service->heading_np = $request->heading_np;
        $service->service_des_np = $request->service_des_np;
        $service->service_des_en = $request->service_des_en;
        $service->service_slug = Str::slug($request->heading_en, '-');
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink('./uploads/service_image/' . $service->image);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/service_image/'), $filename);
            $service['image'] = $filename;
        }
       
        if ($request->file('logo')) {
            $file = $request->file('logo');
            @unlink('./uploads/service_logo/' . $service->logo);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/service_logo/'), $filename);
            $service['logo'] = $filename;
        }
        $service->save();
        Toastr::success('Success', 'Services Added Successfully');
        return redirect()->route('admin.service_view');
    }

    public function ServiceEdit($id)
    {
        $edit_service = Service::find($id);
        return view('backend.services.service_edit',compact('edit_service'));
    }

    public function ServiceUpdate(Request $request, $id)
    {
        $service = Service::find($id);
        $service->heading_en = $request->heading_en;
        $service->heading_np = $request->heading_np;
        $service->service_des_np = $request->service_des_np;
        $service->service_des_en = $request->service_des_en;
        $service->service_slug = Str::slug($request->heading_en, '-');
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink('./uploads/service_image/' . $service->image);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/service_image/'), $filename);
            $service['image'] = $filename;
        }
       
        if ($request->file('logo')) {
            $file = $request->file('logo');
            @unlink('./uploads/service_logo/' . $service->logo);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/service_logo/'), $filename);
            $service['logo'] = $filename;
        }
        $service->save();
        Toastr::success('Success', 'Services Updated Successfully');
        return redirect()->route('admin.service_view');
    }

    //Delete Service
    public function ServiceDelete($id)
    {
        $projects_delete = Service::find($id);
                  $projects_delete->delete();
                  Toastr::warning('Success', 'Service Deleted Successfully');
                  return redirect()->route('admin.service_view');
    }

}
