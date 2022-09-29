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
                            <form action="{{route('admin.gallery_update',$edit_gallery->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                               
                                <div class="row mt-2">
                                    <div class="col-md-12"><label class="labels">Image TItle</label><input type="text" name="title" class="form-control" value="{{$edit_gallery->title}}"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Gallery Image</label><input type="file" name="image" class="form-control"></div>
                                    <div class="col-md-6"><label class="labels"></label><img src="" alt=""></div>
                                </div>
                             
                                <button type="submit" class="btn btn-primary mt-2">Update Gallery</button>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- End of Main Content-->


                    @endsection