<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class ProjectsController extends Controller
{
      //Project View
      public function ProductView()
      {
          Session::put('admin_page', 'projects');
          $projects = Project::latest()->get();
          return view('backend.project.project_view',compact('projects'));
      }

      //Project Add View
      public function ProductAdd()
      {
          Session::put('admin_page', 'projects');
          return view('backend.project.project_add');
      }

      //Project Store View
      public function ProjectsStore(Request $request)
      {
        $projects = new Project();
        $projects->project_heading_en = $request->project_heading_en;
        $projects->project_heading_np = $request->project_heading_np;
        $projects->project_video_link = $request->project_video_link;
        $projects->project_para_np = $request->project_para_np;
        $projects->project_para_en = $request->project_para_en;
        $projects->view_count = 1;
        $projects->project_heading_slug = Str::slug($request->project_heading_en, '-');
        $projects->project_para_slug = Str::slug($request->project_para_en, '-');

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink('./uploads/project_image/' . $projects->image);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/project_image/'), $filename);
            $projects['image'] = $filename;
        }
        $projects->save();
        Toastr::success('Success', 'Project Added Successfully');
        return redirect()->route('admin.product_view');
      }

       //Project View
       public function ProjectEdit($id)
       {
           $projects_edit = Project::find($id);
           return view('backend.project.project_edit',compact('projects_edit'));
       }

       //Project Update
       public function ProjectsUpdate(Request $request, $id)
       {
        $projects_update = Project::find($id);
        $projects_update->project_heading_en = $request->project_heading_en;
        $projects_update->project_heading_np = $request->project_heading_np;
        $projects_update->project_video_link = $request->project_video_link;
        $projects_update->project_para_np = $request->project_para_np;
        $projects_update->project_para_en = $request->project_para_en;
        $projects_update->project_heading_slug = Str::slug($request->project_heading_en, '-');
        $projects_update->project_para_slug = Str::slug($request->project_para_en, '-');

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink('./uploads/project_image/' . $projects_update->image);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/project_image/'), $filename);
            $projects_update['image'] = $filename;
        }
        $projects_update->save();
        Toastr::success('Success', 'Project Update Successfully');
        return redirect()->route('admin.product_view');
       }

              //Project Delete
              public function ProjectDelete($id)
              {
                  $projects_delete = Project::find($id);
                  $projects_delete->delete();
                  Toastr::warning('Success', 'Project Deleted Successfully');
                  return redirect()->route('admin.product_view');
              }
}
