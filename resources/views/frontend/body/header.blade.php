<header data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand d-none d-lg-flex" href="#"><img class="img-fluid" src="{{asset('./frontend/assets/img/logo/logo.png')}}" alt="" width="100px"></a>
            <button class="navbar-toggler" id="toggler-button" onclick="hoverButton()" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 ">
                  
                      @if (Session::get('front_page') == 'home_user')
                @php  $active = "active" @endphp
            @else
                @php  $active = " " @endphp
            @endif
                    <li class="nav-item">
                        <a class="nav-link  {{$active}}" aria-current="page" href="{{route('/')}}">@if(session()->get('language') =='nepali')घर @else Home @endif</a>
                    </li>
                   
                  
            @if(Session::get('front_page') == 'about_page')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="nav-item">
                        <a class="nav-link {{ $active }}" href="{{route('user.about')}}">@if(session()->get('language') =='nepali')हाम्रो बारेमा @else About @endif</a>
                    </li>

                                
            @if(Session::get('front_page') == 'service_page')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="nav-item">
                        <a class="nav-link {{$active}}" href="{{route('user.services')}}">@if(session()->get('language') =='nepali')सेवाहरू @else Services @endif</a>
                    </li>
                                
            @if(Session::get('front_page') == 'team_page')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="nav-item">
                        <a class="nav-link {{$active}}" href="{{route('user.teams')}}">@if(session()->get('language') =='nepali')टोलीहरू @else Team @endif</a>
                    </li>
                                
            @if(Session::get('front_page') == 'project_page')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="nav-item">
                        <a class="nav-link {{$active}}" href="{{route('user.projects')}}">@if(session()->get('language') =='nepali')परियोजनाहरू @else Projects @endif</a>
                    </li>
                                
            @if(Session::get('front_page') == 'gallery_page')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="nav-item">
                        <a class="nav-link {{$active}}" href="{{route('user.gallery')}}">@if(session()->get('language') =='nepali')ग्यालरी @else Gallery @endif</a>
                    </li>
                                
            @if(Session::get('front_page') == 'contact_page')
                        @php $active = "active" @endphp
                    @else
                        @php $active = "" @endphp
                    @endif
                    <li class="nav-item">
                        <a class="nav-link {{$active}}" href="{{route('user.contact')}}">@if(session()->get('language') =='nepali')सम्पर्क @else Contact Us @endif</a>
                    </li>


                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(session()->get('language') == 'nepali') भाषा @else Lanuage @endif
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if(session()->get('language') == 'nepali')
                            <a class="dropdown-item" href="{{route('english.language')}}">English</a>

                            @else
                            <a class="dropdown-item" href="{{route('nepali.language')}}">नेपाली</a>
                            @endif
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>