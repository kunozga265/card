<x-guest-layout>

    <x-slot name="title">
        Home
    </x-slot>

    <!-- Start Banner Area
    ============================================= -->
    <div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                <div class="swiper-slide swiper-scrollbar banner-style-one" data-swiper-autoplay="5000">
                    <div class="banner-thumb bg-cover shadow dark"
                         style="background: url({{$first_banner->image}});"></div>
                    <!-- <div class="shape">
                        <img src="assetsv1/img/shape/2.png" alt="Image Not Found">
                    </div> -->
                    <div class="container">
                        <div class="row align-center">
                            <div class="offset-xl-1 col-xl-9">
                                <div class="content">
                                    <!-- <div class="badge">
                                        <div class="curve-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                                <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                                <text><textPath href="#textPath">100% Organic Product</textPath></text>
                                            </svg>
                                            <a href="https://www.youtube.com/watch?v=ipUuoMCEbDQ" class="popup-youtube"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div> -->
                                    <div class="info">
                                        <h2 data-swiper-parallax="-100">{{$first_banner->title}}</h2>
                                        <p data-swiper-parallax="-200">
                                            {{$first_banner->subtitle}}
                                        </p>
                                        <div class="button">
                                            <a class="btn btn-theme btn-md radius animation" href="#">Contact
                                                Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="swiper-slide swiper-scrollbar banner-style-one" data-swiper-autoplay="5000">
                    <div class="banner-thumb bg-cover shadow dark"
                         style="background: url({{$second_banner->image}});"></div>
                    <!-- <div class="shape">
                        <img src="assetsv1/img/shape/2.png" alt="Image Not Found">
                    </div> -->
                    <div class="container">
                        <div class="row align-center">
                            <div class="offset-xl-1 col-xl-9">
                                <div class="content">
                                    <!-- <div class="badge">
                                        <div class="curve-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                                <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                                <text><textPath href="#textPath">100% Organic Product</textPath></text>
                                            </svg>
                                            <a href="https://www.youtube.com/watch?v=ipUuoMCEbDQ" class="popup-youtube"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div> -->
                                    <div class="info">
                                        <h2 data-swiper-parallax="-100">{{$second_banner->title}}</h2>
                                        <p data-swiper-parallax="-200">
                                            {{$second_banner->subtitle}}
                                        </p>
                                        <div class="button">
                                            <a class="btn btn-theme btn-md radius animation" href="#">Contact
                                                Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

            </div>

            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>
    <!-- End Banner -->

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
                                <div class="timer" data-to="{{$introduction->title}}"
                                     data-speed="2000">{{$introduction->title}}</div>
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

    <!-- Start Services
   ============================================= -->
    <div class="services-style-one-area bg-gray default-padding bottom-less">
        {{--        <div class="shape-right-top" style="background-image: url(assetsv1/img/shape/9.png);"></div>--}}
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="site-heading text-center">
                        {{--                        <h5 class="sub-title">our rich database</h5>--}}
                        <h2 class="title">Publications</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-center">
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 service-one-single">
                    <div class="service-style-one-item">
                        <!-- <div class="thumb">
                            <img src="assetsv1/img/about/1.jpg" alt="Image Not Found">
                        </div> -->
                        <div class="info">
                            <div class="top">
                                <h4><a href="#">Policy Briefs <span>12 Items</span></a></h4>
                            </div>
                            <p>
                                <!-- Seeing rather her you not esteem men settle genius excuse. Deal say over means age from. Comparison new melancholy son devonshire to the dispatched. -->
                            </p>
                        </div>
                        <a href="services-details.html" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 service-one-single">
                    <div class="service-style-one-item">
                        <!-- <div class="thumb">
                            <img src="assetsv1/img/illustration/3.png" alt="Image Not Found">
                        </div> -->
                        <div class="info">
                            <div class="top">
                                <h4><a href="#">Journal Articles <span>5 Items</span></a></h4>
                            </div>
                            <p>
                                <!-- Perming rather her you not esteem men settle genius excuse.  -->
                            </p>
                            <a href="services-details.html" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 service-one-single">
                    <div class="service-style-one-item">
                        <!-- <div class="thumb">
                            <img src="assetsv1/img/illustration/4.png" alt="Image Not Found">
                        </div> -->
                        <div class="info">
                            <div class="top">
                                <h4><a href="#">Working Papers <span>16 Items</span></a></h4>
                            </div>
                            <p>
                                <!-- Seeing rather her you not esteem men settle genius excuse. Deal say over means age from. Comparison new melancholy son devonshire to the dispatched. -->
                            </p>
                            <a href="services-details.html" class="btn-angle"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Services -->
    <!-- Start Benifits
   ============================================= -->
    <div class="benifits-area default-padding-top video-bg-live bg-cover mt--50 mt-md-0 mt-xs-0"
         style="background-image: url({{asset($thematic_areas->image)}});">
        <div class="player"
             data-property="{videoURL:'w9eRIGTHKJM',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:13, opacity:1, quality:'default'}"></div>
{{--        <div class="shape-top-center"--}}
{{--             style="background-image: url({{asset('uploads/thematic-area-overlay.png')}});"></div>--}}
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="benifit-items text-light">
                        {{--                        <div class="shape">--}}
                        {{--                            <img src="assetsv1/img/illustration/8.png" alt="Image Not Found">--}}
                        {{--                        </div>--}}
                        <h2 class="title">{{$thematic_areas->title}}
                        </h2>
                        <p>
                            <!-- Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously. -->
                        </p>
                        <ul class="list-standard">
                            {!! $thematic_areas->description !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Benifits -->

    <div class="choose-us-style-two-area overflow-hidden default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 pr-100 pr-md-15 pr-xs-15 pb-120 pb-md-60 pb-xs-60">
                    <h4 class="title" style="color: white">Our Pillars</h4>
                    <ul class="list-simple text-light">
                        <li>
                            <h4>{{$pillars_research->title}}</h4>
                            {!! $pillars_research->description !!}
                        </li>
                        <li>
                            <h4>{{$pillars_consultancy->title}}</h4>
                            {!! $pillars_consultancy->description !!}
                        </li>
                        <li>
                            <h4>{{$pillars_training->title}}</h4>
                            {!! $pillars_training->description !!}
                        </li>
                        <li>
                            <h4>{{$pillars_outreach->title}}</h4>
                            {!! $pillars_outreach->description !!}
                        </li>
                    </ul>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 our-targets">
                    <div class="choose-us-style-two-content">

                        <h2 class="title">Our Targets 2030</h2>
                        <div class="choose-us-style-two-info">
                            <div class="content">
                                <div class="row">
                                    <div class="fun-fact col-12 col-sm-6">
                                        <div class="counter">
                                            <div class="operator">{{$targets_money->subtitle}}</div>
                                            <div class="timer" data-to="{{$targets_money->title}}"
                                                 data-speed="2000">{{$targets_money->title}}</div>
                                        </div>
                                        <span class="medium">{!! $targets_money->description!!}</span>
                                    </div>
                                    <div class="fun-fact col-12 col-sm-6">
                                        <div class="counter">
                                            <div class="operator">{{$targets_policy_briefs->subtitle}}</div>
                                            <div class="timer" data-to="{{$targets_policy_briefs->title}}"
                                                 data-speed="2000">{{$targets_policy_briefs->title}}</div>
                                        </div>
                                        <span class="medium">{!! $targets_policy_briefs->description!!}</span>
                                    </div>
                                    <div class="fun-fact col-12 col-sm-6">
                                        <div class="counter">
                                            <div class="operator">{{$targets_students->subtitle}}</div>
                                            <div class="timer" data-to="{{$targets_students->title}}"
                                                 data-speed="2000">{{$targets_students->title}}</div>
                                        </div>
                                        <span class="medium">{!! $targets_students->description!!}</span>
                                    </div>
                                    <div class="fun-fact col-12 col-sm-6">
                                        <div class="counter">
                                            <div class="operator">{{$targets_dashboards->subtitle}}</div>
                                            <div class="timer" data-to="{{$targets_dashboards->title}}"
                                                 data-speed="2000">{{$targets_dashboards->title}}</div>
                                        </div>
                                        <span class="medium">{!! $targets_dashboards->description!!}</span>
                                    </div>
                                    <div class="fun-fact col-12 col-sm-6">
                                        <div class="counter">
                                            <div class="operator">{{$targets_publications->subtitle}}</div>
                                            <div class="timer" data-to="{{$targets_publications->title}}"
                                                 data-speed="2000">{{$targets_publications->title}}</div>
                                        </div>
                                        <span class="medium">{!! $targets_publications->description!!}</span>
                                    </div>

                                </div>
                                <div class="content">

                                </div>
                                <!-- <div class="thumb">
                                    <img src="assetsv1/img/thumb/4.jpg" alt="Image Not Found">
                                    <a href="https://www.youtube.com/watch?v=3JigXb9KXqI" class="popup-youtube video-play-button">
                                        <i class="fas fa-play"></i>
                                        <div class="effect"></div>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
