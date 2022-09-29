<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('./frontend/assets/img/logo/logo-blue.png')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('./frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('./frontend/assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('./frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('./frontend/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('./frontend/assets/gallery/css/jquery.lightbox.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->
    @include('frontend.body.header')
    @yield('user_content')
    @include('frontend.body.footer')
    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <!-------Jquery Plugin------>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="{{asset('./frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('./frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('./frontend/assets/js/script.js')}}"></script>
    <script src="{{asset('./frontend/assets/js/script.js')}}"></script>
    <script id="dsq-count-scr" src="//construction-7.disqus.com/count.js" async></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6332dbf32e4d6084"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{{asset('./frontend/assets/gallery/js/jquery.lightbox.min.js')}}"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>   // preloader
    function preloader() {
        $('#preloader').delay(0).fadeOut();
    };
    
    $(window).on('load', function () {
        preloader(),
        wowanimation();
        mainSlider();
        counter()
    });
    </script>
</body>

</html>