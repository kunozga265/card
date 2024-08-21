<x-guest-layout>

    <x-slot name="title">
        Experts
    </x-slot>

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light" style="background-image: url({{asset($banner->image)}});">
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

    <!-- Start Farmer
    ============================================= -->
    <div class="farmer-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        @foreach($experts as $expert)
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 farmer-stye-one">
                            <div class="farmer-style-one-item">
                                <div class="thumb">
                                    <img src="{{asset($expert->photo)}}" alt="Image Not Found">
                                    <div class="social">
                                        <i class="fas fa-share-alt"></i>
                                        <ul>
                                            <li class="facebook">
                                                <a href="{{$expert->getSocialLink("facebook")}}">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="{{$expert->getSocialLink("twitter")}}">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="{{$expert->getSocialLink("linkedin")}}">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>{{$expert->title}}</span>
                                    <h4>
                                        <a href="#">{{$expert->name}}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Farmer -->


</x-guest-layout>
