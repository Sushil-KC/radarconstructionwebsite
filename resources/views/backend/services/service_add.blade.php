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
                            <form action="{{route('admin.service_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Service Heading En</label><input type="text" name="heading_en" class="form-control" placeholder="Service Heading En"></div>
                                    <div class="col-md-6"><label class="labels">Service Heading Np</label><input type="text" name="heading_np" class="form-control" placeholder="Service Heading Np"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12"><label class="labels">Service Details En</label><input type="text" name="service_des_np" class="form-control" placeholder="Service Details En"></div>
                                    <div class="col-md-12"><label class="labels">Service details Np</label><input type="text" name="service_des_en" class="form-control" placeholder="Service Details Np"></div>
                                </div>
                                
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Service Image</label><input type="file" name="image" class="form-control"></div>
                                    <div class="col-md-6"><label class="labels"></label><img src="" alt=""></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Service Logo</label><input type="file" name="logo" class="form-control"></div>
                                    <div class="col-md-6"><label class="labels"></label><img src="" alt=""></div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Add Service</button>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- End of Main Content-->


                    @endsection