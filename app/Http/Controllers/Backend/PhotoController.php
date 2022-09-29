<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;
class PhotoController extends Controller
{
    
    //Gallery View
    public function PhotoView()
    {
        Session::put('admin_page', 'gallery');
        $gallery = Gallery::all();
        return view('backend.gallery.gallery_view', compact('gallery'));
    }

    //Gallery Add View
    public function PhotoAdd()
    {
        Session::put('admin_page', 'gallery');
        return view('backend.gallery.gallery_add');
    }

    //Gallery Store
    public function GalleryStore(Request $request)
    {
        $gallery = new Gallery();
        $gallery->title = $request->title;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink('./uploads/gallery_image/' . $gallery->image);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/gallery_image/'), $filename);
            $gallery['image'] = $filename;
        }
        $gallery->save();
        Toastr::success('Success', 'Gallery Added Successfully');
        return redirect()->route('admin.photo_view');
    }


    //Gallery Edit
    public function PhotoEdit($id)
    {
        $edit_gallery = Gallery::find($id);
        return view('backend.gallery.gallery_edit', compact('edit_gallery'));
    }

    //Gallery Update
    public function GalleryUpdate(Request $request,$id)
    {
        $update_gallery = Gallery::find($id);
        $update_gallery->title = $request->title;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink('./uploads/gallery_image/' . $update_gallery->image);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/gallery_image/'), $filename);
            $update_gallery['image'] = $filename;
        }
        $update_gallery->save();
        Toastr::success('Success', 'Gallery Updated Successfully');
        return redirect()->route('admin.photo_view');
    }

    public function PhotoDelete($id)
    {
        $del_gallery = Gallery::find($id);
$del_gallery->delete();
        Toastr::warning('Success', 'Gallery Delete Successfully');
        return redirect()->route('admin.photo_view');
    }
}
