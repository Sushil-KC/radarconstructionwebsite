@extends('frontend.user_master')
@section('title')
@if(session()->get('language') =='nepali')राडार निर्माण - हाम्रो बारेमा @else Radar Construction - Home Page @endif
@endsection
@section('user_content')
   <!-------Page Content Start------->
   <section class="breadcrumb-section mb-5">
        <div class="page-heading header-text" data-aos="flip-up" data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>@if(session()->get('language') =='nepali') 
                    सेवाहरू
 @else Services @endif</h1>
                        <div class="breadcrumb-link">
                            <span class="text-capitalize"><a href="index.html">@if(session()->get('language') =='nepali') 
                            घर
 @else Home @endif</a> / @if(session()->get('language') =='nepali') 
                    सेवाहरू
 @else Services @endif</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------Page Content End------->



   


    <!-- Start Services Area -->
    <section class="services-area mt-5 mb-5">
        <div class="container mt-5" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
            <div class="row mt-5">
            @foreach($services as $item)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box border">
                    <div class="icon">
                        <i class="flaticon-cancer"><img class="img-fluid" src="{{asset('./uploads/service_logo/'.$item->logo)}}" alt=""></i>
                    </div>
                    <h3><a href="{{url('/service_detiails',$item->id.'/'.$item->service_slug)}}">@if(session()->get('language') =='nepali')
                {{$item->heading_np}} @else {{$item->heading_en}}  @endif</a></h3>

                    <p>@if(session()->get('language') =='nepali')
                {!! \Illuminate\Support\Str::limit($item->service_des_en,150) !!} @else {!! \Illuminate\Support\Str::limit($item->service_des_np,150) !!}  @endif</p>

                    <a href="{{url('/service_detiails',$item->id.'/'.$item->service_slug)}}" class="btn btn-primary mt-3">@if(session()->get('language') =='nepali')
                    थप पढ्नुहोस् @else Read More  @endif <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
              
            </div>
        </div>
    </section>
    <!-- End Services Area -->
@endsection