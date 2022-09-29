@extends('backend.admin_master')
@section('admin_content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <a class="card-title">User List</a>
                        <a href="{{route('admin.slider_add')}}" class="btn btn-primary me-2 float-right py-1"><i class="fa fa-plus"> Add Slider</i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table border="1px" class="table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th>
                                            SN
                                        </th>
                                        <th width="5%">
                                            Slider Image
                                        </th>
                                        <th width="20%">
                                            Slider Heading En
                                        </th>
                                        <th>
                                            Slider Heading Np
                                        </th>
                                        <th scope="col" width="20%">
                                            Slider Paragraph En
                                        </th>
                                        <th scope="col" width="20%">
                                            Slider Paragraph Np
                                        </th>
                                        <th width="5%">
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
                                    @foreach($slider as $item)
                                    <tr>
                                        <td>{{$i++;}}</td>
                                        <td><img src="{{asset('./uploads/slider_image/'.$item->image)}}" width="100px" alt=""></td>
                                        <td>{{$item->heading_en}}</td>
                                        <td width="">{{$item->heading_np}}</td>
                                        <td scope="col" width="20%">{{$item->slider_para_en}}</td>
                                        <td scope="col" width="20%">{{$item->slider_para_np}}</td>
                             
                                        <td width="5%">@if($item->status == 0)<span class="badge badge-danger">Inactive</span>@else<span class="badge badge-primary">Active</span>'@endif </td>
                                        <td><a href="{{route('admin.slider_edit',$item->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a><a href="{{route('admin.slider_delete',$item->id)}}" id="deleteData" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        @if($item->status == 0)<a href="{{route('admin.slider_store_inactive',$item->id)}}" class="btn btn-danger"><i class="fa fa-arrow-down"></i></a>@else<a href="{{route('admin.slider_store_active',$item->id)}}" class="btn btn-primary"><i class="fa fa-arrow-up"></i></a>@endif
                                    
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