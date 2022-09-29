@extends('backend.admin_master')
@section('admin_content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <a class="card-title">Project List</a>
                        <a href="{{route('admin.product_add')}}" class="btn btn-primary me-2 float-right py-1"><i class="fa fa-plus"> Add Project</i></a>
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
                                            Project Image
                                        </th>
                                        <th width="20%">
                                            Project Heading En
                                        </th>
                                        <th>
                                            Project Heading Np
                                        </th>
                                        <th scope="col" width="20%">
                                            Project Description En
                                        </th>
                                        <th scope="col" width="20%">
                                            Project Description Np
                                        </th>
                                        <th>
                                            Videos
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
                                    @foreach($projects as $project)
                                    <tr>
                                        <td>{{$i++;}}</td>
                                        <td><img src="{{asset('./uploads/project_image/'.$project->image)}}" width="100px" alt=""></td>
                                        <td>{{$project->project_heading_en}}</td>
                                        <td>{{$project->project_heading_np}}</td>
                                        <td>{{\Illuminate\Support\Str::limit($project->project_para_np,30)}}</td>
                                        <td>{{\Illuminate\Support\Str::limit($project->project_para_en,30)}}</td>
                                        <td> <iframe height="100px" width="100px" src="{{$project->project_video_link}}">
                                            </iframe></td>
                                        <td><a href="{{route('admin.project_edit',$project->id)}}" class="btn btn-primary">Edit</a> <a href="{{route('admin.project_delete',$project->id)}}" id="deleteData" class="btn btn-danger">Delete</a></td>
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