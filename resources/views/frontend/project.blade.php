@extends('frontend.user_master')
@section('title')
@if(session()->get('language') =='nepali')राडार निर्माण - परियोजनाहरू
@else Radar Construction - Project Page @endif
@endsection
@section('user_content')
@php
    use App\Models\Project;
    $project = Project::latest()->get();
@endphp
<!-------Page Content Start------->
<section class="breadcrumb-section mb-5">
    <div class="page-heading header-text" data-aos="flip-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>@if(session()->get('language') =='nepali')
                        परियोजनाहरू
                        @else Projects @endif</h1>
                    </h1>
                    <div class="breadcrumb-link">
                        <span class="text-capitalize"><a href="{{route('/')}}">@if(session()->get('language') =='nepali')
                                घर
                                @else Home @endif</h1></a> / @if(session()->get('language') =='nepali')
                            परियोजनाहरू
                            @else Projects @endif</h1></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------Page Content End------->


<!-------We Offers Section End------>
<section class="services mt-5 mb-5">
    <div class="container" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
        <div class="row mb-5 mt-5">
            <div class="video-news">
                <div class="video-slide">
                    <div class="row">
                        @foreach($project as $item)
                        <div class="col-md-4">
                            <div class="video-item border mt-2">
                                <div class="video-news-image">
                                    <a href="#">
                                        <img class="img-fluid" src="{{asset('./uploads/project_image/'.$item->image)}}" alt="image">
                                    </a>

                                    <a href="{{$item->project_video_link}}" class="popup-youtube">
                                        <i class="bi bi-play-circle"></i>
                                    </a>
                                </div>

                                <div class="post-content">
                                    <div class="post-meta">
                                        <ul>
                                            <li>@if(session()->get('language') =='nepali')
                                            दृश्यहरू:
                        @else Views: @endif <a href="#">{{$item->view_count}}</a></li>
                                            <li>{{$item->created_at->format('d M, Y')}}</li>
                                        </ul>
                                    </div>

                                    <h3><a href="#">@if(session()->get('language') =='nepali')
                                    {{$item->project_heading_np}}
                        @else {{$item->project_heading_en}} @endif</a></h3>
                                    <p>@if(session()->get('language') =='nepali')
                                    {!! \Illuminate\Support\Str::limit($item->project_para_np,150) !!}
                        @else {!! \Illuminate\Support\Str::limit($item->project_para_en,150) !!} @endif</p>
                                    <a href="{{url('/project_detiails',$item->id.'/'.$item->project_heading_slug)}}" class="btn btn-primary mt-4">@if(session()->get('language') =='nepali')
                        थप पढ्नुहोस् @else Read More @endif <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection