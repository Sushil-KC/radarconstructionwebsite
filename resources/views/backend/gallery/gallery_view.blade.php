@extends('backend.admin_master')
@section('admin_content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <a class="card-title">Project List</a>
                        <a href="{{route('admin.photo_add')}}" class="btn btn-primary me-2 float-right py-1"><i class="fa fa-plus"> Add Gallery</i></a>
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
                                            Gallery Image
                                        </th>
                                        <th width="20%">
                                            Gallery Title
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
                                    @foreach($gallery as $item)
                                    <tr>
                                        <td>{{$i++;}}</td>
                                        <td><img src="{{asset('./uploads/gallery_image/'.$item->image)}}" width="100px" alt=""></td>
                                        <td>{{$item->title}}</td>
                                        
   <td><a href="{{route('admin.photo_edit',$item->id)}}" class="btn btn-primary">Edit</a> <a href="{{route('admin.photo_delete',$item->id)}}" id="deleteData" class="btn btn-danger">Delete</a></td>
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