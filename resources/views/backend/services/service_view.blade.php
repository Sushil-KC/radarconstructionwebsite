@extends('backend.admin_master')
@section('admin_content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <a class="card-title">Services List</a>
                        <a href="{{route('admin.service_add')}}" class="btn btn-primary me-2 float-right py-1"><i class="fa fa-plus"> Add Services</i></a>
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
                                            Services Image
                                        </th>
                                        <th width="20%">
                                            Service Heading En
                                        </th>
                                        <th>
                                        Service Heading Np
                                        </th>
                                        <th scope="col" width="20%">
                                            Service Description En
                                        </th>
                                        <th scope="col" width="20%">
                                        Service Description Np
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
                                    @foreach($services as $item)
                                    <tr>
                                        <td>{{$i++;}}</td>
                                        <td><img src="{{asset('./uploads/service_image/'.$item->image)}}" width="100px" alt=""></td>
                                        <td>{{$item->heading_en}}</td>
                                        <td width="">{{$item->heading_np}}</td>
                                        <td scope="col" width="20%">{{\Illuminate\Support\Str::limit($item->service_des_en,30)}}</td>
                                        <td scope="col" width="20%">{{\Illuminate\Support\Str::limit($item->service_des_np,30)}}</td> 
                                        <td><a href="{{route('admin.service_edit',$item->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a><a href="{{route('admin.service_delete',$item->id)}}" id="deleteData" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                       
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