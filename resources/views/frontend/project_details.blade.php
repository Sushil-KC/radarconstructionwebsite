@extends('frontend.user_master')
@section('title')
@if(session()->get('language') =='nepali')राडार निर्माण - परियोजना विवरण
@else Radar Construction - Project Details @endif
@endsection
@section('user_content')

<!-------Page Content Start------->
<section class="breadcrumb-section">
    <div class="page-heading header-text" data-aos="flip-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>@if(session()->get('language') =='nepali')
                    परियोजना विवरण
                        @else Project Details @endif</h1>
                    </h1>
                    <div class="breadcrumb-link">
                        <span class="text-capitalize"><a href="{{route('/')}}">@if(session()->get('language') =='nepali')
                                घर
                                @else Home @endif</h1></a> / @if(session()->get('language') =='nepali')
                    परियोजना विवरण
                        @else Project Details @endif</h1></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------Page Content End------->
<!-- Start News Details Area -->
<section class="news-details-area mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12"  data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="blog-details-desc">
                    <div class="article-image">
                        <img class="img-fluid" src="{{asset('./uploads/project_image/'.$project_details->image)}}" alt="image">
                    </div>

                    <div class="article-content">
                        <span><a href="#"></a> {{$project_details->created_at->format('M/d/Y')}} / View: {{$project_details->view_count}}</span>
                        <h3 class="fw-bold">@if(session()->get('language') =='nepali'){{$project_details->project_heading_np}} @else {{$project_details->project_heading_en}} @endif</h3>

                        <p>@if(session()->get('language') =='nepali'){!! $project_details->project_para_np !!} @else {!! $project_details->project_para_en !!} @endif</p>
                    </div>
                </div>
                <div>
                    <!-- Remove the container if you want to extend the Footer to full width. -->
                    <div class="">
                        <!-- Footer -->
                        <footer class="text-center text-lg-start text-dark">
                            <!-- Section: Social media -->
                            <section class="d-flex justify-content-between py-3 pb-3 text-white">
                                <!-- Right -->
                                <div>
                                    <div class="addthis_inline_follow_toolbox"></div>
                                </div>
                                <!-- Right -->
                            </section>
                        </footer>
                    </div>
                </div>

                <div>
                    <div id="disqus_thread"></div>
                    <script>
                       
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document,
                                s = d.createElement('script');
                            s.src = 'https://construction-7.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
            </div>
            <div class="col-lg-4"  data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <aside class="widget-area">
                    <section class="widget widget_latest_news_thumb text-dark">
                        <h3 class="widget-title fw-bold">@if(session()->get('language') =='nepali')हाम्रा परियोजनाहरू @else Our Projects @endif</h3>
                        @foreach($projects as $item)
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg1" role="img"><img class="img-fluid" src="{{asset('./uploads/project_image/'.$item->image)}}" alt=""></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall fw-bold"><a href="{{url('/project_detiails',$item->id.'/'.$item->project_heading_slug)}}">@if(session()->get('language') =='nepali'){{\Illuminate\Support\Str::limit($item->project_heading_np,150)}} @else {{\Illuminate\Support\Str::limit($item->project_heading_en,150)}} @endif</a></h4>
                                <span class="mb-1">@if(session()->get('language') =='nepali'){!! \Illuminate\Support\Str::limit($item->project_para_np,50) !!} @else {!! \Illuminate\Support\Str::limit($item->project_para_en,50) !!} @endif</span>
                                <span>{{$item->created_at->format('d M, Y')}}</span>
                            </div>
                        </article>
                        @endforeach
                    </section>
                </aside>
            </div>
            
        </div>
</section>






@endsection