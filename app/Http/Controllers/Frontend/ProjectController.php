<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    //Project View
    public function Project()
    {
        Session::put('front_page', 'project_page');
        return view('frontend.project');
    }

    //Project Details
    public function ProjectDetials($id, $slug)
    {
        Session::put('front_page', 'project_page');
        $project_details = Project::find($id);
        $blogKey = $project_details->id;
        Project::find($blogKey)->increment('view_count');
        $projects = Project::where('id', '!=', $id)->take(5)->latest()->get();
      
        return view('frontend.project_details',compact('project_details','projects'));
    }
}
