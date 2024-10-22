<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="icon" href="{{asset('favicon.png')}}" sizes="32x32" type="image/png">

    <title>{{ config('app.name', 'LUANAR - CARD') }} - {{$title}}</title>

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
{{--    <div id="preloader">--}}
{{--        <div id="agrica-preloader" class="agrica-preloader">--}}
{{--            <div class="animation-preloader">--}}
{{--                <div class="spinner"></div>--}}
{{--            </div>--}}
{{--            <div class="loader">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-3 loader-section section-left">--}}
{{--                        <div class="bg"></div>--}}
{{--                    </div>--}}
{{--                    <div class="col-3 loader-section section-left">--}}
{{--                        <div class="bg"></div>--}}
{{--                    </div>--}}
{{--                    <div class="col-3 loader-section section-right">--}}
{{--                        <div class="bg"></div>--}}
{{--                    </div>--}}
{{--                    <div class="col-3 loader-section section-right">--}}
{{--                        <div class="bg"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- End Preloader -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area top-bar-style-one bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-8">
                    <ul class="item-flex">
                        <li>
                            <i class="fas fa-clock"></i> {{$operating_hours->title}} :  {!! $operating_hours->description !!}
                        </li>
                        <li>
                            <a href="tel:{{$phone_number->subtitle}}"><i class="fas fa-phone-alt"></i> {{$phone_number->subtitle}}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 text-end">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="{{$facebook->subtitle}}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$twitter->subtitle}}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$youtube->subtitle}}">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$linkedin->subtitle}}">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav inc-shape navbar-sticky navbar-default validnavs dark">

            <div class="container d-flex justify-content-between align-items-center">


                <div class="navbar-brand-left">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand d-flex" href="{{route('home')}}">
                            <span>CARD</span>
                            <img src="{{asset('assets/img/luanar-logo.png')}}" class="logo" alt="Logo">
                        </a>
                    </div>
                    <!-- End Header Navigation -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="{{asset('assets/img/luanar-logo.png')}}" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li >
                            <a href="{{route('home')}}" class="">Home</a>
                        </li>
                        <li >
                            <a href="{{route('about-us')}}" class="">About Us</a>
                        </li>
                        <li >
                            <a href="{{route('projects')}}" class="">Research Projects</a>
                        </li>
                        <li >
                            <a href="{{route('experts')}}" class="">Experts</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('publications')}}" class="dropdown-toggle" data-toggle="dropdown" >Publications</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('publications',['section'=>'policy-briefs'])}}">Policy Briefs</a></li>
                                <li><a href="{{route('publications',['section'=>'journal-articles'])}}">Journal Articles</a></li>
                                <li><a href="{{route('publications',['section'=>'working-papers'])}}">Working Papers</a></li>

                            </ul>
                        </li>

                        <li >
                            <a href="{{route('partners')}}" class="">Partners</a>
                        </li>
                        <li >
                            <a href="{{route('contact-us')}}" class="">Contact Us</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

{{--                <div class="attr-right">--}}
{{--                    <!-- Start Atribute Navigation -->--}}
{{--                    <div class="attr-nav">--}}
{{--                        <ul>--}}
{{--                            <li class="button"><a href="{{route("login")}}">Login</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <!-- End Atribute Navigation -->--}}

{{--                </div>--}}

                <!-- Main Nav -->
            </div>
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->

        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    {{ $slot }}


    <!-- Start Footer
    ============================================= -->
    <footer class=" text-light" style="background-image: url();">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">

                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 item">
                        <div class="footer-item about">
                            <img class="logo" src="{{asset('assets/img/luanar-logo.png')}}" alt="Logo">
                            <p>
                                Centre for Agriculture Research and Development
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> Go</button>
                            </form>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 item">
                        <div class="footer-item link">
                            <h4 class="widget-title">Explore</h4>
                            <ul>
                                <li>
                                    <a href="{{route('about-us')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{route('projects')}}">Research Projects</a>
                                </li>
                                <li>
                                    <a href="{{route('experts')}}">Experts</a>
                                </li>
{{--                                <li>--}}
{{--                                    <a href="{{route('publications',)}}">Publications</a>--}}
{{--                                </li>--}}
                                <li>
                                    <a href="{{route('partners')}}">Partners</a>
                                </li>
                                <li>
                                    <a href="{{route('contact-us')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Itme -->

{{--                    <!-- Single Itme -->--}}
{{--                    <div class="col-lg-3 col-md-6 item">--}}
{{--                        <div class="footer-item recent-post">--}}
{{--                            <h4 class="widget-title">Recent Posts</h4>--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <div class="thumb">--}}
{{--                                        <a href="">--}}
{{--                                            <img src="{{asset('assetsv1/img/thumbs/1.jpg')}}" alt="Thumb">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="info">--}}
{{--                                        <div class="meta-title">--}}
{{--                                            <span class="post-date">12 Sep, 2023</span>--}}
{{--                                        </div>--}}
{{--                                        <h5><a href="">Meant widow equal an share least--}}
{{--                                                part. </a></h5>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="thumb">--}}
{{--                                        <a href="">--}}
{{--                                            <img src="{{asset('assetsv1/img/thumbs/2.jpg')}}" alt="Thumb">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="info">--}}
{{--                                        <div class="meta-title">--}}
{{--                                            <span class="post-date">18 Jul, 2023</span>--}}
{{--                                        </div>--}}
{{--                                        <h5><a href="">Future Plan & Strategy for--}}
{{--                                                Consutruction </a></h5>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End Single Itme -->--}}

                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 item">
                        <div class="footer-item contact">
                            <h4 class="widget-title">Contact Info</h4>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Address:</strong>
                                        {!! $address->description !!}
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Email:</strong>
                                        <a href="mailto:{{$email->subtitle}}">{{$email->subtitle}}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Phone:</strong>
                                        <a href="tel:{{$phone_number->subtitle}}">{{$phone_number->subtitle}}</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Itme -->

                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <p>&copy; Copyright  <script>document.write(new Date().getFullYear())</script>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->

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
