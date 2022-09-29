@extends('frontend.user_master')
@section('title')
@if(session()->get('language') =='nepali')राडार निर्माण - ग्यालरी
 @else Radar Construction - Gallery Page @endif
@endsection
@section('user_content')
 
<!-------Page Content Start------->
<section class="breadcrumb-section">
    <div class="page-heading header-text" data-aos="flip-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>@if(session()->get('language') =='nepali') 
                    ग्यालरी
 @else Gallery @endif</h1>
                    </h1>
                    <div class="breadcrumb-link">
                        <span class="text-capitalize"><a href="{{route('/')}}">@if(session()->get('language') =='nepali')
                                घर
                                @else Home @endif</h1></a> / @if(session()->get('language') =='nepali') 
                    ग्यालरी
 @else Gallery @endif</h1></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------Page Content End------->
     <!-- Image Block 1 -->
     <section class="section-1 odd showcase blog-grid mt-5 mb-5 projects" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
            <div class="container smaller">
            
                <div class="row items">
                    @foreach($gallery as $item)
                    <div class="col-12 col-md-6 item mt-2">
                        <div class="row card text-center">
                            <div class="image-over">
                                <img class="img-fluid" src="{{asset('./uploads/gallery_image/'.$item->image)}}" alt="Gallery Image">
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center mx-3"><i class="bi bi-person-circle text-white mx-1"></i> Admin</a>
                                <a href="#" class="d-lg-flex align-items-center mr-2"> <i class="bi bi-clock mx-1"></i> {{$item->created_at->format('M d, Y')}}</a>
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="#">
                                        <h4>{{$item->title}}</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>     
                    @endforeach       
                </div>
            </div>
        </section>

 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
@endsection