@extends('backend.admin_master')
@section('admin_content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class=" rounded bg-white  stretch-card grid-margin mb-5">

                <div class="row">
                    
                    <div class="col-md-4 border-right">
                    <form action="{{route('admin.profile_img')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" height="150px"src="{{(!empty($user->profile_photo_path))?url('uploads/profile_photo_path/',$user->profile_photo_path):url('https://theearthcollective.in/wp-content/themes/floral/images/shadow_tst_img.png')}}">
                            <span class="font-weight-bold mt-2">{{$user->name}}</span><span class="text-black-50 mt-1">{{$user->email}}</span><span> </span>
                        </div>
                        <div class="container">
                            <div class="row ">
                                <div class="col-md-6"><input type="file" name="profile_photo_path" class="form-control-file mt-2"></div>
                                <div class="col-md-6"><input type="submit" class="btn btn-primary btn-sm mt-2" value="Update"></div>
                            </div>

                        </div>
                        </form>
                    </div>
                 
                    <div class="col-md-8 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <form action="{{route('admin.profile_info')}}" method="post">
                                @csrf
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Name</label><input type="text" name="name" class="form-control" placeholder="Name" value="{{$user->name}}"></div>
                                    <div class="col-md-6"><label class="labels">E-mail</label><input type="text" name="email" class="form-control" value="{{$user->email}}" placeholder="E-Mail" disabled=""></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="mobile" class="form-control" placeholder="Mobile Number" value="{{$user->mobile}}"></div>
                                    <div class="col-md-12"><label class="labels">Address</label><input type="text" name="address" class="form-control" placeholder="Address" value="{{$user->address}}"></div>

                                    <div class="col-md-12"><label class="labels">Name of Your Company Position</label><input type="text" name="position" class="form-control" placeholder="Name of Your Company Position" value="{{$user->position}}"></div>
                                    <div class="col-md-12"><label class="labels">Age</label><input type="text" class="form-control" name="age" placeholder="Age" value="{{$user->age}}"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select Gender</label>
                                            <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                                <option value="" disabled="" selected="">Select Gender</option>
                                                <option value="Male" {{$user->gender == "Male"?"selected":""}}>Male</option>
                                                <option value="Female" {{$user->gender == 'Female'?"selected":""}}>Female</option>
                                                <option value="Other" {{$user->gender == "Other"?"selected":""}}>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6"><label class="labels">Telephone</label><input type="text" name="telephone" class="form-control" value="{{$user->telephone}}" placeholder="Telephone"></div>
                                </div>
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection