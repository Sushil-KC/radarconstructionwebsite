@extends('backend.admin_master')
@section('admin_content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class=" rounded">
            <div class="row">



                <!-- ===============================================-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12  bg-white card p-3">
                            <form action="{{route('admin.projects_update',$projects_edit->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Project Heading En</label><input type="text" name="project_heading_en" class="form-control" value="{{$projects_edit->project_heading_en}}"></div>
                                    <div class="col-md-6"><label class="labels">Project Heading Np</label><input type="text" name="project_heading_np" class="form-control" value="{{$projects_edit->project_heading_np}}"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12"><label class="labels">Project Details En</label>
                                    <textarea name="project_para_en" id="summary-ckeditor" cols="30" rows="10" class="form-control">{{$projects_edit->project_para_en}}</textarea>
                                    <div class="col-md-12"><label class="labels">Project details Np</label>
                                    <textarea name="project_para_np" id="summary-ckeditor_1" cols="30" rows="10" class="form-control">{{$projects_edit->project_para_np}}</textarea>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12"><label class="labels">Project Video Link</label><input type="text" name="project_video_link" class="form-control" value="{{$projects_edit->project_video_link}}"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Project Image</label><input type="file" name="image" class="form-control"></div>
                                    <div class="col-md-6"><label class="labels"></label><img src="" alt=""></div>
                                </div>
                             
                                <button type="submit" class="btn btn-primary mt-2">Update Project</button>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- End of Main Content-->
                <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('summary-ckeditor', {
        filebrowserUploadUrl: "{{route('admin.project_edit',$projects_edit->id, ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('summary-ckeditor_1', {
        filebrowserUploadUrl: "{{route('admin.project_edit',$projects_edit->id, ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    </script>

                    @endsection