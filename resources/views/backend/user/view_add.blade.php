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
                                <h4 class="text-right">User Add</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12 border-right">
                                <div class="p-1">
                                    <form action="{{route('admin.user_store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mt-2">
                                            <div class="col-md-6"><label class="labels">Name</label><input type="text" name="name" class="form-control" placeholder="Name"></div>
                                            <div class="col-md-6"><label class="labels">E-mail</label><input type="text" name="email" class="form-control" placeholder="E-Mail"></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="mobile" class="form-control" placeholder="Mobile Number"></div>
                                            <div class="col-md-6"><label class="labels">Address</label><input type="text" name="address" class="form-control" placeholder="Address"></div>
                                            <div class="col-md-6"><label class="labels">User Image</label><input type="file" name="profile_photo_path" class="form-control"></div>
                                            <div class="col-md-6"><label class="labels">Name of Your Company Position</label><input type="text" name="position" class="form-control" placeholder="Name of Your Company Position"></div>
                                            <div class="col-md-6"><label class="labels">Age</label><input type="text" class="form-control" name="age" placeholder="Age"></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Select Gender</label>
                                                    <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                                        <option value="" disabled="" selected="">Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleFormControlSelect1">Website Position</label>
                                                <input type="number" class="form-control" name="web_position" placeholder="Position">
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="mt-5 float-right"><button class="btn btn-primary profile-button py-1" type="submit">Add User</button></div>
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