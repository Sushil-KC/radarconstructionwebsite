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
                            <form action="{{route('admin.service_update',$edit_service->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Service Heading En</label><input type="text" name="heading_en" class="form-control" value="{{$edit_service->heading_en}}" placeholder="Service Heading En"></div>
                                    <div class="col-md-6"><label class="labels">Service Heading Np</label><input type="text" name="heading_np" class="form-control" value="{{$edit_service->heading_en}}" placeholder="Service Heading Np"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12"><label class="labels">Service Details En</label>
                                    <textarea name="service_des_np" cols="30" rows="10"  class="form-control" id="summary-ckeditor">{{$edit_service->service_des_np}}</textarea>
                                    
                                   </div>
                                    <div class="col-md-12"><label class="labels">Service details Np</label>
                                    <textarea name="service_des_en" cols="30" rows="10"  class="form-control" id="summary-ckeditor_1">{{$edit_service->service_des_en}}</textarea>
                                    
                                    </div>
                                </div>
                                
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Service Image</label><input type="file" name="image" class="form-control"></div>
                                    <div class="col-md-6"><label class="labels"></label><img src="" alt=""></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Service Logo</label><input type="file" name="logo" class="form-control"></div>
                                    <div class="col-md-6"><label class="labels"></label><img src="" alt=""></div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Update Service</button>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- End of Main Content-->
       <!-- End of Main Content-->
       <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('summary-ckeditor', {
        filebrowserUploadUrl: "{{route('admin.service_edit',$edit_service->id, ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('summary-ckeditor_1', {
        filebrowserUploadUrl: "{{route('admin.service_edit',$edit_service->id, ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    </script>

                    @endsection