<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="icon" href="{{asset('favicon.png')}}" sizes="32x32" type="image/png">

    <title>{{ config('app.name', 'LUANAR - CARD') }}</title>

    <!-- CSS -->
    <link href="{{asset('assetsv1/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetsv1/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetsv1/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assetsv1/css/flaticon-set.css')}}" rel="stylesheet">
    <link href="{{asset('assetsv1/css/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetsv1/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetsv1/css/validnavs.css')}}" rel="stylesheet">
    <link href="{{asset('assetsv1/css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('assetsv1/css/unit-test.css')}}" rel="stylesheet">
    <link href="{{asset('assetsv1/css/shop.css')}}" rel="stylesheet">
    <link href="{{asset('assetsv1/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assetsv1/css/style-extra.css')}}" rel="stylesheet">

    <!-- Scripts -->

</head>
<body class="">


    <!-- Start Preloader
============================================= -->
    <div id="preloader">
        <div id="agrica-preloader" class="agrica-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    {{ $slot }}


<!-- jQuery Frameworks
============================================= -->
<script src="{{asset('assetsv1/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assetsv1/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assetsv1/js/jquery.appear.js')}}"></script>
<script src="{{asset('assetsv1/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assetsv1/js/progress-bar.min.js')}}"></script>
<script src="{{asset('assetsv1/js/circle-progress.js')}}"></script>
<script src="{{asset('assetsv1/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assetsv1/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assetsv1/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('assetsv1/js/count-to.js')}}"></script>
<script src="{{asset('assetsv1/js/jquery.scrolla.min.js')}}"></script>
<script src="{{asset('assetsv1/js/ScrollOnReveal.js')}}"></script>
<script src="{{asset('assetsv1/js/YTPlayer.min.js')}}"></script>
<script src="{{asset('assetsv1/js/validnavs.js')}}"></script>
<script src="{{asset('assetsv1/js/gsap.js')}}"></script>
<script src="{{asset('assetsv1/js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('assetsv1/js/SplitText.min.js')}}"></script>
<script src="{{asset('assetsv1/js/main.js')}}"></script>

</body>
</html>
