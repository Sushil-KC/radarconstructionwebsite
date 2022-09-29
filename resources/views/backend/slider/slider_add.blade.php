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
                            <form action="{{route('admin.slider_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Slider Heading En</label><input type="text" name="heading_en" class="form-control" placeholder="Slider Heading En"></div>
                                    <div class="col-md-6"><label class="labels">Slider Heading Np</label><input type="text" name="heading_np" class="form-control" placeholder="Slider Heading Np"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12"><label class="labels">Slider Paragraph En</label>
                                    <textarea name="slider_para_en" id="summary-ckeditor" cols="30" rows="10"></textarea>
                                  </div>
                                    <div class="col-md-12"><label class="labels">Slider Paragraph Np</label>
                                    
                                    <textarea name="slider_para_np" id="summary-ckeditor_1" cols="30" rows="10"></textarea>
</div>
                                </div>
                                
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Slider Image</label><input type="file" name="image" class="form-control"></div>
                                    <div class="col-md-6"><label class="labels"></label><img src="" alt=""></div>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Slider</button>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- End of Main Content-->


                <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('summary-ckeditor', {
        filebrowserUploadUrl: "{{route('admin.slider_add', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('summary-ckeditor_1', {
        filebrowserUploadUrl: "{{route('admin.slider_add', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    </script>
                    @endsection