@extends('frontend.user_master')
@section('title')
@if(session()->get('language') =='nepali')राडार निर्माण - सेवाहरू
 @else Radar Construction - About Page @endif
@endsection
@section('user_content')

  <!-------Page Content Start------->
  <section class="breadcrumb-section">
        <div class="page-heading header-text" data-aos="flip-up" data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>@if(session()->get('language') =='nepali') 
                    हामीलाई सम्पर्क गर्नुहोस्
 @else Contact Us @endif</h1></h1>
                        <div class="breadcrumb-link">
                            <span class="text-capitalize"><a href="{{route('/')}}">@if(session()->get('language') =='nepali') 
                            घर
 @else Home @endif</h1></a> / @if(session()->get('language') =='nepali') 
                     सम्पर्क
 @else Contact Us @endif</h1></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------Page Content End------->
    <section class="services mt-1 mb-5">
    <div class="container mb-5">
       
   @include('frontend.common.contact')
</div>
    </section>
<!-- Start Contact Area -->

   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact mt-5" >
    <div class="container mt-4">
        <div class="row mt-5">
            <div class="col-md-12">
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1479.3925210143511!2d82.29592188102514!3d28.127966835401697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3997f5b58b0fe765%3A0x614e0900d7a2f2a!2sRadar%20builders%20and%20construction%20company%20pvt.ltd.!5e0!3m2!1sen!2snp!4v1660881226899!5m2!1sen!2snp"
                        frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->
@endsection