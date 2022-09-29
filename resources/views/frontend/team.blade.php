@extends('frontend.user_master')
@section('title')
@if(session()->get('language') =='nepali')राडार निर्माण - टोलीहरू
 @else Radar Construction - Teams Page @endif
@endsection
@section('user_content')
 @php
    use App\Models\User;

    $users = User::where('id','!=',2)->orderBy('web_position','ASC')->get();
 @endphp
    
  <!-------Page Content Start------->
  <section class="breadcrumb-section">
        <div class="page-heading header-text" data-aos="flip-up" data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>@if(session()->get('language') =='nepali') 
                    टोलीहरू
 @else Team Members @endif</h1></h1>
                        <div class="breadcrumb-link">
                            <span class="text-capitalize"><a href="{{route('/')}}">@if(session()->get('language') =='nepali') 
                            घर
 @else Home @endif</h1></a> / @if(session()->get('language') =='nepali') 
                    टोलीहरू
 @else Team Members @endif</h1></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------Page Content End------->
      <!-------Our Mission Section End------->
      <section class="offers-section pt-5 mt-5 mb-5" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
        <div class="container">
            <div class="row">
                @foreach($users as $user)
                <div class="col-md-4 col-lg-4 col-md-4 mb-5 pb-4" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div class="single-team text-center  pt-4 border pb-4">
                        <div class="team-thumb">
                            <img class="img-fluid" width="120px"
                                src="{{asset('./uploads/profile_photo_path/'.$user->profile_photo_path)}}" alt="">
                        </div>
                        <div class="team-info mt-4">
                            <h3><a href="teacher-single.html">{{$user->name}}</a></h3>
                            <span class="text-primary" style="font-size: 14px;">{{$user->position}}</span><br>
                            <span>{{$user->email}}</span><br>
                            <span>
                                Executive Member Radar Construction</span>

                        </div>
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
    </section>


@endsection