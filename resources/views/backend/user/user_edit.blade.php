@extends('backend.admin_master')
@section('admin_content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class=" rounded bg-white  stretch-card grid-margin mb-5">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="text-right">User Edit</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12 border-right">
                                <div class="p-1">
                                    <form action="{{route('admin.user_update',$user_edit->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mt-2">
                                            <div class="col-md-6"><label class="labels">Name</label><input type="text" name="name" class="form-control" placeholder="Name" value="{{$user_edit->name}}"></div>
                                            <div class="col-md-6"><label class="labels">E-mail</label><input type="text" name="email" class="form-control" placeholder="E-Mail" value="{{$user_edit->email}}"></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="mobile" class="form-control" placeholder="Mobile Number" value="{{$user_edit->mobile}}"></div>
                                            <div class="col-md-6"><label class="labels">Address</label><input type="text" name="address" class="form-control" placeholder="Address" value="{{$user_edit->address}}"></div>
                                            <div class="col-md-6"><label class="labels">User Image</label><input type="file" name="profile_photo_path" class="form-control"></div>
                                            <div class="col-md-6"><label class="labels">Name of Your Company Position</label><input type="text" name="position" class="form-control" value="{{$user_edit->position}}" placeholder="Name of Your Company Position"></div>
                                            <div class="col-md-6"><label class="labels">Age</label><input type="text" class="form-control" name="age" placeholder="Age" value="{{$user_edit->age}}"></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Select Gender</label>
                                                    <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                                        <option value="" disabled="" selected="">Select Gender</option>
                                                        <option value="Male" {{$user_edit->gender == "Male"?"selected":""}}>Male</option>
                                                <option value="Female" {{$user_edit->gender == 'Female'?"selected":""}}>Female</option>
                                                <option value="Other" {{$user_edit->gender == "Other"?"selected":""}}>Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleFormControlSelect1">Website Position</label>
                                                <input type="number" class="form-control" name="web_position" placeholder="Position" value="{{$user_edit->web_position}}">  
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="mt-5 float-right"><button class="btn btn-primary profile-button py-1" type="submit">Update Info</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection