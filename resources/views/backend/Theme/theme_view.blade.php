@extends('backend.admin_master')
@section('admin_content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class=" rounded">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Theme Setting</h4>
                            <form class="forms-sample" action="{{route('admin.theme_store')}}" method="post" enctype="multipart/form-data">
                            @csrf   
                            <div class="form-group row">

                                    <div class="col-sm-6">
                                        <label for="facebook_link">Facebook Link <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="facebook_link" id="facebook_link" placeholder="Facebook Link" value="{{$theme_edit->facebook_link}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="linkedin_link">Linkedin Link <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="linkedin_link" id="linkedin_link" placeholder="Linkedin Link" value="{{$theme_edit->linkedin_link}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="twitter_link">Twitter Link <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="twitter_link" id="twitter_link" placeholder="Twitter Link" value="{{$theme_edit->twitter_link}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="youtube_link">Youtube Link <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="youtube_link" id="youtube_link" placeholder="Youtube Link" value="{{$theme_edit->youtube_link}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="address">Address<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="{{$theme_edit->address}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="email">E-mail <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" value="{{$theme_edit->email}}" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="phone_number">Phone Number<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{$theme_edit->phone_number}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="email">Telephone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Telephone" value="{{$theme_edit->telephone}}"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="maps_link">Map Link<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="maps_link" id="maps_link" placeholder="Map Link" value="{{$theme_edit->facebook_link}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="email">Logo <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="logo" id="logo" placeholder="Logo" id="imgInp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <img src="{{asset('./uploads/theme_logo/'.$theme_edit->logo)}}" height="120px" alt="Image" id="imageOne">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2 float-end">Update</button>
                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imageOne').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
</script>
@endsection