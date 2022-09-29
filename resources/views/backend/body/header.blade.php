@php
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
@endphp
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{asset('./frontend/assets/img/logo/logo-blue.png')}}" class="mr-2" alt="logo" /><b>Radar</b> </a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('./frontend/assets/img/logo/logo-blue.png')}}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                        <span class="input-group-text" id="search">
                            <i class="icon-search"></i>
                        </span>
                    </div>
                   &nbsp; <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <span class="fw-bold mr-2" style="font-weight: bold;">{{$user->name}} </span> <img src="{{(!empty($user->profile_photo_path))?url('uploads/profile_photo_path/',$user->profile_photo_path):url('https://theearthcollective.in/wp-content/themes/floral/images/shadow_tst_img.png')}}" alt="profile" />
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a href="{{route('admin.profile')}}" class="dropdown-item">
                        <i class="ti-user text-primary"></i>
                        Profile
                    </a>
                    <a href="{{route('admin.reset_password')}}" class="dropdown-item">
                        <i class="ti-settings text-primary"></i>
                        Password
                    </a>

                    <a href="{{route('admin.logout')}}" class="dropdown-item">
                        <i class="ti-power-off text-primary"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>