@extends('backend.admin_master')
@section('admin_content')
@php
use App\Models\User;
use App\Models\Service;
use App\Models\Project;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
$users = User::latest()->get();
$total_users = User::count();
$total_project = Project::count();
$total_service = Service::count();

$data = Http::get("https://nepal-weather-api.herokuapp.com/api/?place=dang");
@endphp
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome to Dashboard {{$user->name}}</h3>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button class="btn btn-sm btn-light bg-white " type="button">
                                    <i class="mdi mdi-calendar"></i> Today {{ now()->format('Y-d-M') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="{{asset('Backend/images/dashboard/people.svg')}}" alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i><sup>{{$data['max']}}</sup></h2>
                                </div>
                                <div class="ml-2">
                                    <h4 class="location font-weight-normal">Dang</h4>
                                    <h6 class="font-weight-normal">Nepal</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Total Users</p>
                                <p class="fs-30 mb-2">{{$total_users }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Services</p>
                                <p class="fs-30 mb-2">{{$total_service}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Projects</p>
                                <p class="fs-30 mb-2">{{$total_project}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Total Items</p>
                                <p class="fs-30 mb-2">{{$total_project + $total_service}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-0">User List</p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $i=1;
                                @endphp
                                <tbody>
                                    @foreach($users as $list)
                                    <tr>
                                        <td>{{$i++;}}</td>
                                        <td class="font-weight-bold">{{$list->name}}</td>
                                        <td>{{$list->email}}</td>
                                        <td>{{$list->phone}}</td>
                                        <td>{{$list->address}}</td>
                                        <td><a href="" class="btn btn-primary">Edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('backend.body.footer')
    <!-- partial -->
</div>

@endsection