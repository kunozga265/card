<x-guest-layout>

    <x-slot name="title">
        Partners
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

    <!-- Start Contact Us
     ============================================= -->
    <div class="contact-area contact-page overflow-hidden bg-gray default-padding">
        <div class="sahpe-right-bottom">
            <img src="assets/img/shape/16.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-xl-7 col-lg-7">
                    <div class="contact-form-style-one mb-md-50">
{{--                        <img src="assets/img/illustration/10.png" alt="Image Not Found">--}}
                        <h5 class="sub-title">{{$first_heading->subtitle}}</h5>
                        <h2 class="heading">{{$first_heading->title}}</h2>
                        <form action="#" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-xl-5 col-lg-5 pl-80 pl-md-15 pl-xs-15">
                    <div class="contact-style-one-info">
                        <h2>
                            Contact
                            <span>
                                Information
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0" style="animation-play-state: running;"></path></svg>
                            </span>
                        </h2>
                        <p>
                            {{$second_heading->subtitle}}
                        </p>
                        <ul>
                            <li>
                                <div class="content">
                                    <h5 class="title">{{$phone_number->title}}</h5>
                                    <a href="tel:{{$phone_number->subtitle}}">{{$phone_number->subtitle}}</a>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">{{$address->title}}</h5>
                                   {!! $address->description !!}
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <h5 class="title">{{$email->title}}</h5>
                                    <a href="mailto:{{$email->subtitle}}">{{$email->subtitle}}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->


</x-guest-layout>
