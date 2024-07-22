<x-guest-layout>

    <x-slot name="title">
        About
    </x-slot>

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light" style="background-image: url({{$banner->image}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>{{$banner->title}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">{{$banner->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <div class="default-padding">
        <div class="container">
            <h2 class="title">
                {{$mandate->title}}
            </h2>
            <div>
               {!! $mandate->description !!}
            </div>
        </div>
    </div>

    <!-- Start About
    ============================================= -->
    <div class="about-style-one-area default-padding-bottom overflow-hidden">
        <div class="container">
            <div class="row">
{{--                <div class="col-xl-6 col-lg-5">--}}
{{--                    <div class="about-style-one-thumb">--}}
{{--                        <img src="{{$introduction->image}}" alt="Image Not Found">--}}
{{--                        <div class="animation-shape">--}}
{{--                            <img src="{{asset('assetsv1/img/illustration/1.png')}}" alt="Image Not Found">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">--}}
{{--                    <div class="about-style-one-info">--}}

{{--                        <!-- <h2 class="title">About Card</h2> -->--}}
{{--                        {!! $introduction->description !!}--}}
{{--                        <div class="fun-fact-style-flex mt-35">--}}
{{--                            <div class="counter">--}}
{{--                                <div class="timer" data-to="{{$introduction->title}}" data-speed="2000">{{$introduction->title}}</div>--}}
{{--                                <!-- <div class="operator">M</div> -->--}}
{{--                            </div>--}}
{{--                            <span class="medium">{{$introduction->subtitle}}</span>--}}
{{--                        </div>--}}
                <div class="col-12 col-md-6 feature">
                    <div class="">
                            <div class="icon">
                                <img src="{{$mission->image}}" alt="Image Not Found">
                            </div>
                            <div class="info">
                                <h4>{{$mission->title}}</h4>
                                {!! $mission->description !!}
                            </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 feature">
                    <div class="">
                            <div class="icon">
                                <img src="{{$vision->image}}" alt="Image Not Found">
                            </div>
                            <div class="info text-light">
                                <h4>{{$vision->title}}</h4>
                                {!! $vision->description !!}
                            </div>
                    </div>
                </div>


{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- End About -->



    <div class="default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 our-targets about-us">
                    <div class="choose-us-style-two-content">

                        <h2 class="title">Our Targets 2030</h2>
                        <div class="choose-us-style-two-info">
                            <div class="content">
                                <div class="row justify-center">
                                    <div class="fun-fact col-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="counter">
                                            <div class="operator">{{$targets_money->subtitle}}</div>
                                            <div class="timer" data-to="{{$targets_money->title}}" data-speed="2000">{{$targets_money->title}}</div>
                                        </div>
                                        <span class="medium">{!! $targets_money->description!!}</span>
                                    </div>
                                    <div class="fun-fact col-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="counter">
                                            <div class="operator">{{$targets_policy_briefs->subtitle}}</div>
                                            <div class="timer" data-to="{{$targets_policy_briefs->title}}" data-speed="2000">{{$targets_policy_briefs->title}}</div>
                                        </div>
                                        <span class="medium">{!! $targets_policy_briefs->description!!}</span>
                                    </div>
                                    <div class="fun-fact col-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="counter">
                                            <div class="operator">{{$targets_students->subtitle}}</div>
                                            <div class="timer" data-to="{{$targets_students->title}}" data-speed="2000">{{$targets_students->title}}</div>
                                        </div>
                                        <span class="medium">{!! $targets_students->description!!}</span>
                                    </div>
                                    <div class="fun-fact col-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="counter">
                                            <div class="operator">{{$targets_dashboards->subtitle}}</div>
                                            <div class="timer" data-to="{{$targets_dashboards->title}}" data-speed="2000">{{$targets_dashboards->title}}</div>
                                        </div>
                                        <span class="medium">{!! $targets_dashboards->description!!}</span>
                                    </div>
                                    <div class="fun-fact col-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="counter">
                                            <div class="operator">{{$targets_publications->subtitle}}</div>
                                            <div class="timer" data-to="{{$targets_publications->title}}" data-speed="2000">{{$targets_publications->title}}</div>
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


    <!-- Start Choose Us
    ============================================= -->
    <div class="choose-us-style-three-area default-padding ">
{{--        <div class="illustration-bottom">--}}
{{--            <img src="{{asset('assetsv1/img/illustration/17.png')}}" alt="Image Not Found">--}}
{{--        </div>--}}
        <div class="shape" style="background-image: url({{$core_values->image}});"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 pl-60 pl-md-15 pl-xs-15">
                    <h2 class="title">{{$core_values->title}}</h2>
{{--                    <p>--}}
{{--                        Consume ipsum dolor sit amet consectetur adipisicing elit. Veritatis, illo ullam harum et fuga suscipit quibusdam sapiente. Corrupti ut consequatur magni minus! Iusto eos consectetur similique minus culpa odio temporibus.--}}
{{--                    </p>--}}
                    <div class="list-grid">
                        <ul class="list-item">
                           {!! $core_values->description !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us -->


</x-guest-layout>
