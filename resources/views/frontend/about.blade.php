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
                        हाम्रो बारेमा
                        @else About Us @endif</h1>
                    </h1>
                    <div class="breadcrumb-link">
                        <span class="text-capitalize"><a href="{{route('/')}}">@if(session()->get('language') =='nepali')
                                घर
                                @else Home @endif</h1></a> / @if(session()->get('language') =='nepali')
                            हाम्रो बारेमा
                            @else About Us @endif</h1></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------Page Content End------->



<!-- Start About Area -->
<section class="about-area mt-5">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="about-image">
                    <img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/05/21/21/39/housebuilding-1407499_960_720.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="about-content">
                    <span>@if(session()->get('language') =='nepali')हाम्रो बारेमा @else About Us @endif</span>
                    @if(session()->get('language') =='nepali')
                    <h2 class="color-primary" style=" font-family: 'Fredericka the Great', cursive;">बिल्डर्स र राडार निर्माणमा स्वागत छ ।
                        </span></h2> @else<h2  style=" font-family: 'Fredericka the Great', cursive;">Welcome to Builders & Radar
                        Construction</h2> @endif
                    <p> @if(session()->get('language') =='nepali')
                        नेपालको निर्माण क्षेत्रमा विश्वासिलो नाम <b> राडार बिल्डर्स एण्ड कन्स्ट्रक्सन कम्पनी प्रा.लि.(आरबीसी)</b> को आधिकारिक वेबसाइटमा स्वागत छ । हामी विश्वास गर्दछौं कि अर्थपूर्ण र दिगो पूर्वाधारहरूको निर्माणले राम्रो भविष्यलाई आधार दिन्छ। हाम्रो कम्पनी संस्कृति र मूल्यहरू सँधै मूल्यमा आधारित दिगो निर्माण अभ्यासहरू बढाउने दिशामा हाम्रो प्रयासहरूलाई मार्गदर्शन गर्दछ। @else Welcome to the official website of <b>Radar Builders and Construction Company Pvt. Ltd.</b> (RBC), a trusted name in construction sector of Nepal. We believe that construction of meaningful and sustainable infrastructures underpins better future. Our company culture and values always guide our endeavors towards enhancing value based sustainable construction practices. @endif
                    </p>
                    <p> @if(session()->get('language') =='nepali')कुनै पनि देशको विकास उद्योगको विकाससँग गाँसिएको हुन्छ । कुल गार्हस्थ्य उत्पादन र रोजगारीमा प्रत्यक्ष र अप्रत्यक्ष योगदानका आधारमा निर्माण उद्योगको समग्र सामाजिक र आर्थिक विकासमा ठूलो भूमिका रहेको छ । यसले यातायात, सञ्चार खानेपानी आपूर्ति, बिजुली आदिका लागि आवश्यक पूर्वाधारहरू मात्र उत्पादन गर्दैन, तर आर्थिक र सामाजिक गतिविधिहरूलाई आश्रय दिने भवनहरू र अन्य संरचनाहरू पनि उत्पादन गर्दछ। औद्योगिक गतिविधिहरूको व्यापक दायरालाई सहजीकरण गरी आर्थिक सम्बन्ध स्थापना गरेर, जसले उपभोक्ताहरूलाई वस्तु र सेवाहरूको उत्पादन र वितरणलाई बढाउँछ, यसले अन्य आर्थिक क्षेत्रहरूमा गुणात्मक प्रभाव पार्छ। त्यसैले देशको द्रुत विकासका लागि दक्ष र भरपर्दो निर्माण उद्योगको विकास अत्यावश्यक छ। @else The development of a country is closely linked with the development of its industries. Construction industry, in view of its direct and indirect contributions to the GDP and employment has a major role in overall social and economic development. It produces not only infrastructures required for transportation, communication water supply, power etc., but also buildings and other structures that shelter economic and social activities. By facilitating wide range of industrial activities and establishing economic linkages, which enhances the production and distribution of goods and services to the consumers, it has multiplier effect on other economic sectors. Therefore development of efficient and reliable construction industry is of vital importance for the rapid development of the country.@endif </p>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection