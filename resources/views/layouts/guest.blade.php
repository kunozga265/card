<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" href="{{asset('favicon.png')}}" sizes="32x32" type="image/png">

        <title>{{ config('app.name', 'LUANAR - CARD') }}</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/perfect-scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/color.css')}}">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" href="{{asset('assets/css/revolution/settings.css')}}">
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" href="{{asset('assets/css/revolution/layers.css')}}">
        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" href="{{asset('assets/css/revolution/navigation.css')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">


        <main>
            <div class="page-loader">
                <div class="loader">
                    <div class='loader-style-1 panelLoad'>
                        <div class='cube-face cube-face-front'>L</div>
                        <div class='cube-face cube-face-back'>U</div>
                        <div class='cube-face cube-face-left'>A</div>
                        <div class='cube-face cube-face-right'>N</div>
                        <div class='cube-face cube-face-bottom'>A</div>
                        <div class='cube-face cube-face-top'>R</div>
                    </div>
                    <span class="cube-face title">Centre for Agricultural Research and Development</span>
                </div>
            </div><!-- Page Loader -->
            <header class="style2 stick flex">
                <div class="tpbr flex">
                    <div class="container">
                        <div class="tpbr-inr">
                            <div class="row justify-content-between">
                                <div class="col-md-6 col-sm-12 col-lg-6">
{{--                                    <p itemprop="description"><i class="flaticon-error thm-clr"></i><strong>Crisis Watch:</strong> Ebola in Democratic Republic of Congo</p>--}}
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 text-right">
                                    <ul class="tp-lnks">
                                        <li><i class="flaticon-user"></i><a href="{{route("login")}}" title="" itemprop="url">Login</a></li>
{{--                                        <li><i class="flaticon-portfolio"></i><a href="#" title="" itemprop="url">Careers</a></li>--}}
{{--                                        <li><i class="flaticon-hand"></i><a href="#" title="" itemprop="url">Volunteer</a></li>--}}
                                    </ul>
                                    <div class="tp-scl">
                                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a href="#" title="Pinterest" itemprop="url" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                        <a href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Top Bar -->
                <div class="wb-lgmnu-wrp">
                    <div class="container">
                        <div class="lgmnu-inr align-items-center flex justify-content-between">
                            <div class="logo">
                                <a href="{{route("home")}}" title="Home" itemprop="url">
                                    <img src="{{asset('assets/img/luanar-logo.png')}}"  alt="logo2.png" itemprop="image">
                                </a>
                            </div><!-- Logo -->
                            <nav>
                                <div>
                                    <ul>
                                        <li class=""><a href="#" title="" itemprop="url">Home</a></li>
                                        <li><a href="#" title="" itemprop="url">Newsletters</a></li>

                                        <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Downloads</a>
                                            <ul>
                                                <li><a href="#" title="" itemprop="url">Policy Briefs</a></li>
                                                <li><a href="#" title="" itemprop="url">Working Papers</a></li>
                                                <li><a href="#" title="" itemprop="url">Journal Articles</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" title="" itemprop="url">Partners</a></li>
                                        <li><a href="#" title="" itemprop="url">About</a></li>
                                        <li><a href="#" title="" itemprop="url">Contact</a></li>
                                    </ul>
                                    <a class="thm-btn" href="donate-now.html" title="" itemprop="url">Learn More<span></span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div><!-- Logo Menu Wrap -->
            </header><!-- Header -->
            <div class="sticky-header flex">
                <div class="container">
                    <div class="wb-lgmnu-wrp flex justify-content-between">
                        <div class="logo">
                            <a href="{{route("home")}}" title="Home" itemprop="url">
                                <img src="{{asset('assets/img/luanar-logo.png')}}" alt="logo2.png" itemprop="image">
                            </a>
                        </div><!-- Logo -->
                        <nav>
                            <div>
                                <ul>
                                    <li class=""><a href="#" title="" itemprop="url">Home</a></li>
                                    <li><a href="#" title="" itemprop="url">Newsletters</a></li>

                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Downloads</a>
                                        <ul>
                                            <li><a href="#" title="" itemprop="url">Policy Briefs</a></li>
                                            <li><a href="#" title="" itemprop="url">Working Papers</a></li>
                                            <li><a href="#" title="" itemprop="url">Journal Articles</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" title="" itemprop="url">Partners</a></li>
                                    <li><a href="#" title="" itemprop="url">About</a></li>
                                    <li><a href="#" title="" itemprop="url">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div><!-- Logo Menu Wrap -->
                </div>
            </div><!-- Sticky Header -->
            <div class="rspns-hdr">
                <div class="rspns-lg-mnu-br">
                    <div class="container">
                        <div class="logo">
                            <a href="{{route("home")}}" title="Home" itemprop="url">
                                <img src="{{asset('assets/img/luanar-logo.png')}}" alt="logo2.png" itemprop="image">
                            </a>
                        </div><!-- Logo -->
                        <span class="rspns-mnu-btn"><i class="fa fa-align-justify"></i></span>
                    </div>
                    <div class="rspns-mnu">
                        <span class="rspns-cls-btn"><i class="fa fa-times"></i></span>
                        <ul>
                            <li class=""><a href="#" title="" itemprop="url">Home</a></li>
                            <li><a href="#" title="" itemprop="url">Newsletters</a></li>

                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Downloads</a>
                                <ul>
                                    <li><a href="#" title="" itemprop="url">Policy Briefs</a></li>
                                    <li><a href="#" title="" itemprop="url">Working Papers</a></li>
                                    <li><a href="#" title="" itemprop="url">Journal Articles</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="" itemprop="url">Partners</a></li>
                            <li><a href="#" title="" itemprop="url">About</a></li>
                            <li><a href="#" title="" itemprop="url">Contact</a></li>
                        </ul>
                    </div>
                </div>
{{--                <div class="rspns-lnks-br">--}}
{{--                    <div class="rspns-lnks-lst">--}}
{{--                        <a href="#" title="" itemprop="url"><i class="flaticon-user"></i><span>Login</span></a>--}}
{{--                        <a href="#" title="" itemprop="url"><i class="flaticon-portfolio"></i><span>Careers</span></a>--}}
{{--                        <a href="#" title="" itemprop="url"><i class="flaticon-hand"></i><span>Volunteer</span></a>--}}
{{--                    </div>--}}
{{--                    <a class="thm-btn" href="donate-now.html" title="" itemprop="url">Donate<span></span></a>--}}
{{--                </div>--}}
            </div><!-- Responsive Header -->

            {{ $slot }}

            <footer>
                <div class="block thm-layer opc97">
                    <div class="fixed-bg patern-bg thm-bg back-blend-multiply" style="background-image: url({{asset('assets/images/pattern-bg1.jpg')}});"></div>
                    <div class="container">
                        <div class="ftr-dta-wrp2 remove-ext11">
                            <div class="row">
{{--                                <div class="col-md-6 col-sm-12 col-lg-6">--}}
{{--                                    <div class="wdgt-bx style2">--}}
{{--                                        <h4 itemprop="headline">Sign up for our news</h4>--}}
{{--                                        <form class="nwsltr-frm">--}}
{{--                                            <i class="fa fa-envelope-o"></i>--}}
{{--                                            <input type="text" placeholder="Enter your email address here">--}}
{{--                                            <button type="submit">Submit<span></span></button>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-sm-12 col-lg-6">--}}
{{--                                    <div class="wdgt-bx style2">--}}
{{--                                        <h4 itemprop="headline">Connect with social links.</h4>--}}
{{--                                        <div class="ftr-scl">--}}
{{--                                            <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>--}}
{{--                                            <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="wdgt-bx style2">
                                        <h4 itemprop="headline">Need to talk to us?</h4>
                                        <ul class="abt-cnt-lst">
                                            <li><span>Email:</span><a href="#" title="" itemprop="url">card@luanar.ac.mw</a></li>
                                            <li><span>Phone:</span>01270 757 596</li>
                                            <li><span>Map:</span>P. O. Box 123, Lilongwe Malawi</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="wdgt-bx style2">
                                        <h4 itemprop="headline">Useful links</h4>
                                        <ul>
                                            <li><a href="#" title="" itemprop="url">Newsletter</a></li>
                                            <li><a href="#" title="" itemprop="url">Partners</a></li>
                                            <li><a href="#" title="" itemprop="url">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Footer Data Wrap Style 2 -->
                    </div>
                </div>
            </footer><!-- Footer Style 2 -->

            <div class="btm-br">
                <div class="container">
                    <p itemprop="description">&copy; Copyright <span class="thm-clr">2024 <a href="{{route('home')}}" title="Card" itemprop="url">LUANAR - CARD</a></span>. All rights reserved.</p>
{{--                    <ul class="btm-lnks">--}}
{{--                        <li><a href="#" title="" itemprop="url">Site Map</a></li>--}}
{{--                        <li><a href="#" title="" itemprop="url">Privacy policy</a></li>--}}
{{--                        <li><a href="#" title="" itemprop="url">Terms & Conditions</a></li>--}}
{{--                    </ul>--}}
                </div>
            </div><!-- Bottom Bar -->
        </main><!-- Main Wrapper -->

        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/fancybox.min.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/perfectscrollbar.min.js')}}"></script>
        <script src="{{asset('assets/js/scroll-up-bar.min.js')}}"></script>
        <script src="{{asset('assets/js/counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/custom-scripts.js')}}"></script>

        <script src="{{asset('assets/js/revolution/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('assets/js/revolution/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src="{{asset('assets/js/revolution/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('assets/js/revolution/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/revolution/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script src="{{asset('assets/js/revolution/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('assets/js/revolution/extensions/revolution.extension.migration.min.js')}}"></script>
        <script src="{{asset('assets/js/revolution/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{asset('assets/js/revolution/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{asset('assets/js/revolution/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('assets/js/revolution/extensions/revolution.extension.video.min.js')}}"></script>
        <script src="{{asset('assets/js/revolution/revolution-init.js')}}"></script>
    </body>
</html>
