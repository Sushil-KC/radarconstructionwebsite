@extends('frontend.user_master')
@section('title')
@if(session()->get('language') =='nepali')राडार निर्माण - गृह पृष्ठ @else Radar Construction - Home Page @endif
@endsection
@section('user_content')
<!-------Hero Section Start------->
<section id="hero" class="hero">
    <div class="hero-container mb-lg-0">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
           
                @foreach($slider as $item)
               
                <!-------Slide First------->
                <div class="carousel-item {{$item->id==1?'active':''}}">
                    <div class="carousel-background"><img class="" src="{{asset('./uploads/slider_image/'.$item->image)}}" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            @if(session()->get('language') =='nepali')<h2 data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">{{$item->heading_np}}</h2> @else <h2 data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">{{$item->heading_en}}</h2> @endif
                            <p class="text-capitalize" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000"> @if(session()->get('language') =='nepali'){!! $item->slider_para_np !!} @else {!! $item->slider_para_en !!} @endif</p>
                            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <a href="{{route('user.services')}}" class="btn-menu">@if(session()->get('language') =='nepali')हाम्रो सेवाहरू @else Our Services @endif</a>
                                <a href="{{route('user.contact')}}" class="btn-book">@if(session()->get('language') =='nepali')सम्पर्क @else Contact Us @endif</a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="bi bi-chevron-left" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</section>
<!-------Hero Section End------->



<section id="section-feature" class="mt-5 mb-5">
    <div class="container" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="main-features-box">
                    <div class="icon">
                        <i class="bi bi-house-door-fill"></i>
                    </div>
                    <h3><a href="#">@if(session()->get('language') =='nepali') प्रोफेशनल बिल्डर @else Professional Builder @endif</a></h3>
                    <p>@if(session()->get('language') =='nepali')
                        हामी गुणस्तर प्रदान गर्दछौं सबै भन्दा राम्रो सेवा प्रदायक मध्ये एक हो, तिनीहरूले सबै भन्दा राम्रो समर्थनको साथ मेरो आवश्यकताहरू पूरा गर्छन्। @else We Provides are one of the best services provider, they fulfill are my needs with best support. @endif </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="main-features-box">
                    <div class="icon">
                        <i class="bi bi-building"></i>
                    </div>
                    <h3><a href="#">@if(session()->get('language') =='nepali')
                            हामी गुणस्तर प्रदान गर्दछौं @else We Deliver Quality @endif</a></h3>
                    <p>@if(session()->get('language') =='nepali')
                        हामी गुणस्तर प्रदान गर्दछौं सबै भन्दा राम्रो सेवा प्रदायक मध्ये एक हो, तिनीहरूले सबै भन्दा राम्रो समर्थनको साथ मेरो आवश्यकताहरू पूरा गर्छन्। @else We Provides are one of the best services provider, they fulfill are my needs with best support. @endif </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="main-features-box">
                    <div class="icon">
                        <i class="bi bi-stopwatch-fill"></i>
                    </div>
                    <h3><a href="#">@if(session()->get('language') =='nepali')
                            जहिले पनि समयमा @else Always On Time @endif</a></h3>
                    <p>@if(session()->get('language') =='nepali')
                        अलवेज अन टाइम तपाईंको सबै ट्रान्सक्रिप्शन आवश्यकताहरूको लागि एक सबै-इन-वन, व्यावसायिक र विश्वसनीय सेवा हो। @else Always On Time is an all-in-one, professional and reliable service for all of your transcription needs. @endif </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="main-features-box">
                    <div class="icon">
                        <i class="bi bi-hand-thumbs-up-fill"></i>
                    </div>
                    <h3><a href="#">@if(session()->get('language') =='nepali')
                            हामी प्यासियोनेट हौं @else We are pacionates @endif</a></h3>
                    <p>@if(session()->get('language') =='nepali')
                        हामी ग्राहकहरूको काम र छिटो कामको लागि प्यासियोनेटहरू हौं। @else We are pacionates for clients work and the fast works. @endif</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start About Area -->
<section class="about-area">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="about-image">
                    <img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/05/21/21/39/housebuilding-1407499_960_720.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0">
                <div class="about-content">
                    <span>@if(session()->get('language') =='nepali')हाम्रो बारेमा @else About Us @endif</span>
                    @if(session()->get('language') =='nepali')
                    <h2 class="color-primary" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000" style=" font-family: 'Fredericka the Great', cursive;">बिल्डर्स र राडार निर्माणमा स्वागत छ ।
                        </span></h2> @else<h2 data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000" style=" font-family: 'Fredericka the Great', cursive;">Welcome to Builders & Radar
                        Construction</h2> @endif
                    <p data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000"> @if(session()->get('language') =='nepali')
                        नेपालको निर्माण क्षेत्रमा विश्वासिलो नाम <b> राडार बिल्डर्स एण्ड कन्स्ट्रक्सन कम्पनी प्रा.लि.(आरबीसी)</b> को आधिकारिक वेबसाइटमा स्वागत छ । हामी विश्वास गर्दछौं कि अर्थपूर्ण र दिगो पूर्वाधारहरूको निर्माणले राम्रो भविष्यलाई आधार दिन्छ। हाम्रो कम्पनी संस्कृति र मूल्यहरू सँधै मूल्यमा आधारित दिगो निर्माण अभ्यासहरू बढाउने दिशामा हाम्रो प्रयासहरूलाई मार्गदर्शन गर्दछ। @else Welcome to the official website of <b>Radar Builders and Construction Company Pvt. Ltd.</b> (RBC), a trusted name in construction sector of Nepal. We believe that construction of meaningful and sustainable infrastructures underpins better future. Our company culture and values always guide our endeavors towards enhancing value based sustainable construction practices. @endif
                    </p>
                    <p data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000"> @if(session()->get('language') =='nepali')कुनै पनि देशको विकास उद्योगको विकाससँग गाँसिएको हुन्छ । कुल गार्हस्थ्य उत्पादन र रोजगारीमा प्रत्यक्ष र अप्रत्यक्ष योगदानका आधारमा निर्माण उद्योगको समग्र सामाजिक र आर्थिक विकासमा ठूलो भूमिका रहेको छ । यसले यातायात, सञ्चार खानेपानी आपूर्ति, बिजुली आदिका लागि आवश्यक पूर्वाधारहरू मात्र उत्पादन गर्दैन, तर आर्थिक र सामाजिक गतिविधिहरूलाई आश्रय दिने भवनहरू र अन्य संरचनाहरू पनि उत्पादन गर्दछ। औद्योगिक गतिविधिहरूको व्यापक दायरालाई सहजीकरण गरी आर्थिक सम्बन्ध स्थापना गरेर, जसले उपभोक्ताहरूलाई वस्तु र सेवाहरूको उत्पादन र वितरणलाई बढाउँछ, यसले अन्य आर्थिक क्षेत्रहरूमा गुणात्मक प्रभाव पार्छ। त्यसैले देशको द्रुत विकासका लागि दक्ष र भरपर्दो निर्माण उद्योगको विकास अत्यावश्यक छ। @else The development of a country is closely linked with the development of its industries. Construction industry, in view of its direct and indirect contributions to the GDP and employment has a major role in overall social and economic development. It produces not only infrastructures required for transportation, communication water supply, power etc., but also buildings and other structures that shelter economic and social activities. By facilitating wide range of industrial activities and establishing economic linkages, which enhances the production and distribution of goods and services to the consumers, it has multiplier effect on other economic sectors. Therefore development of efficient and reliable construction industry is of vital importance for the rapid development of the country.@endif </p>

                    <a href="{{route('user.about')}}" class="btn btn-primary" data-aos="zoom-out-right">Learn More <i class="bi bi-arrow-right-circle-fill"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
<!-- Start Services Area -->
<section class="services-area mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-2">
            <div class="col-md-12 mt-5 text-center heading-section" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                @if(session()->get('language') =='nepali')
                <h2 class="color-primary font-family">हाम्रो सबै भन्दा राम्रो <span class="color-warning  fw-bold">सेवाहरू</span></h2> @else <h2 class="color-primary font-family">Our Best <span class="color-warning  fw-bold">Services</span></h2> @endif
                <div class="bar-main">
                    <div class="bar bar-big"></div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            @foreach($services as $item)
            <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
                <div class="single-services-box border">
                    <div class="icon">
                        <i class="flaticon-cancer"><img class="img-fluid" src="{{asset('./uploads/service_logo/'.$item->logo)}}" alt=""></i>
                    </div>
                    <h3><a href="{{url('/service_detiails',$item->id.'/'.$item->service_slug)}}">@if(session()->get('language') =='nepali')
                            {{$item->heading_np}} @else {{$item->heading_en}} @endif</a></h3>

                    <p>@if(session()->get('language') =='nepali')
                        {!! \Illuminate\Support\Str::limit($item->service_des_en,150) !!} @else {!! \Illuminate\Support\Str::limit($item->service_des_np,150) !!} @endif
                    </p>

                <a href="{{url('/service_detiails',$item->id.'/'.$item->service_slug)}}" class="btn btn-primary mt-3">@if(session()->get('language') =='nepali')
                        थप पढ्नुहोस् @else Read More @endif <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach


            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="more-services-btn">
                    <a href="{{route('user.services')}}" class="btn btn-primary">@if(session()->get('language') =='nepali')
                    थप सेवाहरू @else More Services @endif <i class="bi bi-arrow-right-circle-fill"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->


<!-------We Offers Section Start------>
<section class="offers pt-5 mt-5">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-2">
            <div class="col-md-12 text-center heading-section" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                @if(session()->get('language') =='nepali')
                <h2 data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="color-primary fw-bold font-family">हामी के <span class="color-warning fw-bold">प्रस्ताव ?</span></h2> @else <h2 data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="color-primary fw-bold font-family">What We <span class="color-warning fw-bold">Offer?</span></h2>@endif
                <div class="bar-main">
                    <div class="bar bar-big"></div>
                </div>
            </div>
        </div>

        <div class="row">

            <!-------We Offers First Item------>
            <div class="col-md-6 col-lg-4" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="offers-item border">
                    <a href="" class="block-20 d-flex align-items-end" style="background-image: url('https://cdn.pixabay.com/photo/2018/06/17/09/40/work-3480187_960_720.jpg'); height: 250px; background-size: cover;">

                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading text-dark fw-bold"><a href="#">@if(session()->get('language') =='nepali') परियोजना योजना
                                @else Project Planning @endif</a></h3>
                        <p>@if(session()->get('language') =='nepali') परियोजना योजना हाम्रा प्रोफेशनलहरूले ग्राहकहरूको आवश्यकताहरू पूरा गर्न र समयसीमा भन्दा पहिले यसलाई पूरा गर्न निर्माण गर्नु अघि परियोजनाको पूर्ण रोडम्याप कोर्छन् । @else Our professionals draw the complete roadmap of the project before building to meet the requirements of the clients and to complete it before the deadline. @endif</p>

                    </div>
                </div>
            </div>

            <!-------We Offers Second Item------>
            <div class="col-md-6 col-lg-4" data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="offers-item border">
                    <a href="" class="block-20 d-flex align-items-end" style="background-image: url('https://cdn.pixabay.com/photo/2016/08/06/17/50/design-1574773_960_720.jpg');height: 250px; background-size: cover;">
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading text-dark fw-bold"><a href="#">@if(session()->get('language') =='nepali') घर का जीर्णोद्धार
                                @else House Renovation @endif ​</a></h3>
                        <p class="normal-font-size">@if(session()->get('language') =='nepali') नेपाल कन्स्ट्रक्सनले तपाईंलाई आफ्नो घरको कार्य, सुन्दरता र मूल्य बढाउन नयाँ तरिकाहरूको कल्पना गर्न मद्दत गर्दछ। हामी यो पनि सुनिश्चित गर्दछौं कि रूपान्तरणले तपाईंको सान्त्वना बढाउँछ।
                            @else Nepal Construction helps you envision new ways to enhance the
                            function, beauty and value of your home. We also ensure that the conversion increases
                            your comfort. @endif</p>

                    </div>
                </div>
            </div>

            <!-------We Offers Third Item------>
            <div class="col-md-6 col-lg-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="offers-item border">
                    <a href="" class="block-20 d-flex align-items-end" style="background-image: url('https://cdn.pixabay.com/photo/2013/07/13/13/54/house-161757_960_720.png');height: 250px; background-size: cover;">
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading text-dark fw-bold"><a href="details.html">@if(session()->get('language') =='nepali') भवन निर्माण
                                @else Building Construction @endif</a>
                        </h3>
                        <p>@if(session()->get('language') =='nepali') एक टोलीको रूपमा, हामी कुशल शिल्प पेशेवरहरूको ठूलो र विविध बलको साथ तपाईंको सपना परियोजनाहरू निर्माण गर्दछौं। नेपाल कन्स्ट्रक्सनले तपाईंलाई वास्तविक सम्पत्तिमा संरचना र भिजन थप्दछ।
                            @else As a team, we build your dream projects with a large and diverse
                            force of skilled craft professionals. Nepal Construction add you structure and vision to
                            the real property. @endif</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------We Offers Section End------>
<section class="services mt-1 mb-5">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-2">
            <div class="col-md-12 mt-5 text-center heading-section" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                @if(session()->get('language') =='nepali')
                <h2 class="color-primary font-family">हाम्रो उत्कृष्ट <span class="color-warning  fw-bold">परियोजनाहरू</span></h2> @else <h2 class="color-primary font-family">Our Best <span class="color-warning  fw-bold">Projects</span></h2> @endif
                <div class="bar-main">
                    <div class="bar bar-big"></div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="video-news">
                <div class="video-slides owl-carousel owl-theme">
                    @foreach($projects_item as $item)
                    <div class="video-item">
                        <div class="video-news-image">
                            <a href="#">
                                <img src="{{asset('./uploads/project_image/'.$item->image)}}" alt="image">
                            </a>

                            <a href="{{$item->project_video_link}}" class="popup-youtube">
                                <i class="bi bi-play-circle"></i>
                            </a>
                        </div>

                        <div class="video-news-content">
                            <h3>
                                <a href="{{url('/project_detiails',$item->id.'/'.$item->project_heading_slug)}}">@if(session()->get('language') =='nepali'){{\Illuminate\Support\Str::limit($item->project_heading_np,50)}} @else {{\Illuminate\Support\Str::limit($item->project_heading_en,50)}} @endif</a>
                            </h3>
                            <span>{{$item->created_at->format('d M, Y')}}</span>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<section class="services mt-1 mb-5">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-2">
            <div class="col-md-12 mt-5 text-center heading-section" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                @if(session()->get('language') =='nepali')
                <h2 data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="color-primary fw-bold"><span class="fw-bold">हामीलाई सम्पर्क गर्नुहोस्</span></h2> @else <h2 data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="color-primary fw-bold font-family"><span class="color-warning fw-bold">Contact Us</span></h2>@endif
                <div class="bar-main">
                    <div class="bar bar-big"></div>
                </div>
            </div>
        </div>
@include('frontend.common.contact')
</div>
</section>
@endsection