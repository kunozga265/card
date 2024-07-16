<x-guest-layout>

    <x-slot name="title">
        About
    </x-slot>

{{--    <!-- Start Preloader--}}
{{--     ============================================= -->--}}
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
{{--    <!-- End Preloader -->--}}




    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light" style="background-image: url(assets/img/banner/15.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index-2.html"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
    ============================================= -->
    <div class="about-style-one-area default-padding overflow-hidden">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-6 col-lg-5">
                    <div class="about-style-one-thumb">
                        <img src="{{$introduction->image}}" alt="Image Not Found">
                        <div class="animation-shape">
                            <img src="{{asset('assetsv1/img/illustration/1.png')}}" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="about-style-one-info">

                        <!-- <h2 class="title">About Card</h2> -->
                        {!! $introduction->description !!}
                        <div class="fun-fact-style-flex mt-35">
                            <div class="counter">
                                <div class="timer" data-to="{{$introduction->title}}" data-speed="2000">{{$introduction->title}}</div>
                                <!-- <div class="operator">M</div> -->
                            </div>
                            <span class="medium">{{$introduction->subtitle}}</span>
                        </div>
                        <ul class="top-feature">
                            <li>
                                <div class="icon">
                                    <img src="{{$mission->image}}" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <h4>{{$mission->title}}</h4>
                                    {!! $mission->description !!}
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{$vision->image}}" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <h4>{{$vision->title}}</h4>
                                    {!! $vision->description !!}
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->


    <!-- Start Timeline
    ============================================= -->
    <div class="timeline-area default-padding-bottom" style="background-image: url(assets/img/shape/21.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading">
                        <h2 class="title">Farming have been <br> since 1866</h2>
                        <div class="row">
                            <div class="col-xl-10 offset-xl-2">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam eaque laborum ad asperiores dolorem. Adipisci error eaque dolorem, itaque aliquam animi fuga dolor ipsam! Velit ratione hic corporis veritatis odit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="timeline-items">
                        <!-- Single Item -->
                        <div class="timeline-item">
                            <h2>1906</h2>
                            <h4>Open Farm</h4>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="timeline-item">
                            <h2>1920</h2>
                            <h4>Farm Remodelacion</h4>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="timeline-item">
                            <h2>1925</h2>
                            <h4>Grainfarmers Formed</h4>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="timeline-item">
                            <h2>1930</h2>
                            <h4>Start of Agriculture</h4>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Timeline -->

    <!-- Start Choose Us
    ============================================= -->
    <div class="choose-us-style-three-area default-padding bg-dark text-light">
        <div class="illustration-bottom">
            <img src="assets/img/illustration/17.png" alt="Image Not Found">
        </div>
        <div class="shape" style="background-image: url(assets/img/about/3.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 pl-60 pl-md-15 pl-xs-15">
                    <h2 class="title">Healthy life with <br> fresh products</h2>
                    <p>
                        Consume ipsum dolor sit amet consectetur adipisicing elit. Veritatis, illo ullam harum et fuga suscipit quibusdam sapiente. Corrupti ut consequatur magni minus! Iusto eos consectetur similique minus culpa odio temporibus.
                    </p>
                    <div class="list-grid">

                        <div class="achivement-content">
                            <div class="item">
                                <div class="progressbar">
                                    <div class="circle" data-percent="87">
                                        <strong></strong>
                                    </div>
                                </div>
                                <h4>Organic Solutions</h4>
                            </div>
                        </div>
                        <ul class="list-item">
                            <li>Biodynamic food</li>
                            <li>Organic gardening</li>
                            <li>Organic food certification</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us -->

    <!-- Start Team
    ============================================= -->
    <div class="team-style-one-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4">
                    <h4 class="sub-title">Our Farmers</h4>
                    <h2 class="title">Meet our professional farm experts</h2>
                    <a class="btn btn-theme secondary mt-10 btn-md radius animation" href="farmers.html">Meet all Farmers</a>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="team-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="assets/img/farmers/1.jpg" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>Farmer of tomatoes</span>
                                        <h4><a href="farmer-details.html">Aleesha Brown</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="assets/img/farmers/2.jpg" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>Farmer of cherry</span>
                                        <h4><a href="farmer-details.html">Kevin Martin</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="assets/img/farmers/3.jpg" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>Farmer of potato</span>
                                        <h4><a href="farmer-details.html">Sarah Albert</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->

</x-guest-layout>
