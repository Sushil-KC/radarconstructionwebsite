@php
use App\Models\Service;

$service = Service::orderBy('id','ASC')->take(5)->get();
@endphp

<footer class="text-lg-start text-xxl-start text-white pt-4 mt-5 bg-primary" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
    <!-- Section: Links  -->
    <section class="">
        <div class="container  text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-2">
                        @if(session()->get('language') =='nepali')परिचय
                        @else Introduction @endif
                    </h6>
                    <hr class="mb-3 mt-0 d-inline-block m-auto" style="width: 60px; background-color: #fff; height: 2px" />
                    <p>@if(session()->get('language') =='nepali')रडार बिल्डर र निर्माण हो 
हाल नेपालमा एक स्थापित कम्पनी र धेरै निर्माण गरेको छ
 नेपालका केही प्रतिष्ठित परियोजनाहरू अन्तर्गत 
नेपालभरका सरकारी तथा निजी क्षेत्रका ग्राहकहरू । @else Radar Builder and Construction is 
presently an established Company in Nepal and has constructed many
 prestigious projects in Nepal under some reputed 
Clients of both the Government and Private Sector all over Nepal. @endif</p>
                    <div class="mt-4">
                        <!-- Facebook -->
                        <div class="addthis_inline_follow_toolbox"></div>
                    </div>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4  Footer-Our-Company">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-2">
                        @if(session()->get('language') =='nepali')द्रुत पहुँच
                        @else Quick Access @endif

                    </h6>
                    <hr class="mb-3 mt-0 d-inline-block m-auto" style="width: 60px; background-color: #fff; height: 2px" />

                    <p>
                        <a href="" class="text-reset normal-font-size"><i class="bi bi-toggle-on"></i> @if(session()->get('language') =='nepali')सेवाहरू @else Services @endif</a>
                    </p>
                    <p>
                        <a href="" class="text-reset normal-font-size"><i class="bi bi-toggle-on"></i> @if(session()->get('language') =='nepali')टोलीहरू @else Team @endif</a>
                    </p>
                    <p>
                        <a href="" class="text-reset normal-font-size"><i class="bi bi-toggle-on"></i> @if(session()->get('language') =='nepali')परियोजनाहरू @else Projects @endif</a>
                    </p>
                    <p>
                        <a href="" class="text-reset normal-font-size"><i class="bi bi-toggle-on"></i> @if(session()->get('language') =='nepali')ग्यालरी @else Gallery @endif</a>
                    </p>
                    <p>
                        <a href="" class="text-reset normal-font-size"><i class="bi bi-toggle-on"></i> @if(session()->get('language') =='nepali')सम्पर्क @else Contact Us @endif</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4 Footer-Our-Services">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-2">
                        @if(session()->get('language') =='nepali')हाम्रा सेवाहरू @else Our Services @endif

                    </h6>
                    <hr class="mb-3 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #fff; height: 2px" />
                    @foreach($service as $item)
                    <p>
                        <a href="#!" class="text-reset normal-font-size"><i class="bi bi-toggle-on"></i> @if(session()->get('language') =='nepali'){{$item->heading_np}} @else {{$item->heading_en}} @endif</a>
                    </p>
                    @endforeach

                </div>
                <!-- Grid column -->

                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-2">
                        @if(session()->get('language') =='nepali')सम्पर्क @else Contact Details @endif

                    </h6>
                    <hr class="mb-4 mt-0 d-inline-block me-auto" style="width: 60px; background-color: #fff; height: 2px" />
                    <p class="normal-font-size"><i class="btn btn-light text-primary bi bi-house-fill me-3"></i>@if(session()->get('language') =='nepali')तुलसीपुर–५, दाङ @else Tulsipur-5, Dang @endif</p>
                    <p class="normal-font-size">
                        <i class="btn btn-light text-primary bi bi-envelope-fill me-3"></i>
                        radarbuilder@gmail.com
                    </p>
                    <p class="normal-font-size"><i class="btn btn-light text-primary bi bi-phone-fill me-3"></i>@if(session()->get('language') =='nepali')९८५७८७७७७६/९८५७८४२२८८ @else 9857877776/9857842288 @endif</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- start footer alter -->
        <div class="footer-alt bg-primary text-white pt-3 pb-3">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> &copy;  @if(session()->get('language') =='nepali')सुशील के.सी

                        @else Developed By @endif <a href="{{route('login')}}" class="text-white"> @if(session()->get('language') =='nepali')द्वारा विकसित
                        @else Sushil K.C. @endif</a>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer alter -->
    </section>
</footer>