@extends('frontend.user_master')
@section('title')
@if(session()->get('language') =='nepali')राडार निर्माण - सेवाहरू
@else Radar Construction - About Page @endif
@endsection
@section('user_content')

<!-------Page Content Start------->
<section class="breadcrumb-section">
    <div class="page-heading header-text" data-aos="flip-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>@if(session()->get('language') =='nepali')
                        सेवा विवरण
                        @else Service Details @endif</h1>
                    </h1>
                    <div class="breadcrumb-link">
                        <span class="text-capitalize"><a href="{{route('/')}}">@if(session()->get('language') =='nepali')
                                घर
                                @else Home @endif</h1></a> / @if(session()->get('language') =='nepali')
                            सेवा विवरण
                            @else Service Details @endif</h1></span>
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
                        <img class="img-fluid" src="{{asset('./uploads/service_image/'.$services->image)}}" alt="image">
                    </div>

                    <div class="article-content">
                        <span><a href="#"></a> {{$services->created_at->format('M/d/Y')}} / View: {{$services->view_count}}</span>
                        <h3 class="fw-bold">@if(session()->get('language') =='nepali'){{$services->heading_np}} @else {{$services->heading_en}} @endif</h3>

                        <p>@if(session()->get('language') =='nepali'){!! $services->service_des_en !!} @else {!! $services->service_des_np !!} @endif</p>
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
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
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
                        <h3 class="widget-title fw-bold">@if(session()->get('language') =='nepali')हाम्रो सेवाहरू @else Our Services @endif</h3>
                        @foreach($service_all as $service)
                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg1" role="img"><img class="img-fluid" src="{{asset('./uploads/service_logo/'.$service->logo)}}" alt=""></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall fw-bold"><a href="{{url('/service_detiails',$service->id.'/'.$service->service_slug)}}">@if(session()->get('language') =='nepali'){{\Illuminate\Support\Str::limit($service->heading_np,150)}} @else {{\Illuminate\Support\Str::limit($service->heading_en,150)}} @endif</a></h4>
                                <span class="mb-1">@if(session()->get('language') =='nepali'){!! \Illuminate\Support\Str::limit($service->service_des_en,50) !!} @else {!! \Illuminate\Support\Str::limit($service->service_des_np,50) !!} @endif</span>
                                <span>{{$services->created_at->format('d M, Y')}}</span>
                            </div>
                        </article>
                        @endforeach
                    </section>
                </aside>
            </div>
        </div>
</section>






@endsection