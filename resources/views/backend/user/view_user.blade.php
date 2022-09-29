@extends('backend.admin_master')
@section('admin_content')


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <a class="card-title">User List</a>
                        <a href="{{route('admin.user_add')}}" class="btn btn-primary me-2 float-right py-1"><i class="fa fa-plus"> Add User</i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="complex_header" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            SN
                                        </th>
                                        <th>
                                            User Name
                                        </th>
                                        <th>
                                            E-mail
                                        </th>
                                        <th>
                                            Address
                                        </th>
                                        <th>
                                            Position
                                        </th>
                                        <th>
                                            Card Position
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                @php
                                $i=1;
                                @endphp
                                <tbody>
                                    @foreach ($user as $item)


                                    <tr>
                                        <td class="py-1">
                                            {{$i++}}
                                        </td>
                                        <td>
                                            {{$item->name}}
                                        </td>
                                        <td>
                                            {{$item->email}}
                                        </td>
                                        <td>
                                            {{$item->address}}
                                        </td>
                                        <td>
                                            {{$item->position}}
                                        </td>
                                        <td>
                                            {{$item->position}}
                                        </td>
                                        <td>
                                            {{$item->position}}
                                        </td>
                                        <td>
                                            <a href="{{route('admin.user_edit',$item->id)}}" class="btn btn-primary btn-sm py-1 mr-1"><i class="fa fa-pencil"></i></a><a href="{{route('admin.user_delete',$item->id)}}" id="deleteData" class="btn btn-danger btn-sm py-1"><i class="fa fa-archive"></i></a>
                                        </td>
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

</div>

@endsection