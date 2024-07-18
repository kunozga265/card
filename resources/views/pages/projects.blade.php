<x-guest-layout>

    <x-slot name="title">
        Research Projects
    </x-slot>

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
         style="background-image: url({{asset($introduction->image)}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Research Projects</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Research Projects</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <div class="default-padding">
        <div class="container">
            <div class="">
                <div class="row">
                    <!-- Start Sidebar -->
                    <div class="sidebar col-xl-4 col-lg-5 col-md-12 ">
                        <aside>
                            <div class="sidebar-item category">
                                <h4 class="title">Filter Projects</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="{{route('projects',['filter'=>'all'])}}">All <span>69</span></a>
                                        </li>
                                        <li>
                                            <a href="{{route('projects',['filter'=>'current'])}}">Current <span>25</span></a>
                                        </li>
                                        <li>
                                            <a href="{{route('projects',['filter'=>'past'])}}">Past <span>18</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                    <div
                        class="col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15 mt-md-100 mt-xs-50">
                        <div class="compound-list">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h2 class="title">
                                        <a href="#"> The Political Economy of Tobacco Farming in Low and Middle-Income Countries.</a>
                                    </h2>
                                    <p class="details">
                                        <span class="funder">
                                            Michigan State University Alliance for African Partnership
                                        </span>
                                        <span class="duration">
                                            5 Years (2017-2022)
                                        </span>
                                    </p>

                                    <div class=" tags">
                                        <div class="">
                                            <ul>
                                                <li><a href="#">Dr Innocent Phangaphanga</a>
                                                </li>
                                                <li><a href="#">Mr. Patrick Chimseu</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{--                                   <a class="btn mt-10 btn-md btn-theme animation" href="#">Learn More</a>--}}
                                </div>
                            </div>
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h2 class="title">
                                        <a href="#">Improving the Enabling Environment for Fertilizer Markets in Africa: An Institutional Collaborative Approach to Value Chain Development.</a>
                                    </h2>
                                    <p class="details">
                                        <span class="funder">
                                            Michigan State University Alliance for African Partnership
                                        </span>
                                        <span class="duration">
                                            2 Years (2017-2018)
                                        </span>
                                    </p>

                                    <div class=" tags">
                                        <div class="">
                                            <ul>
                                                <li><a href="#">Dr Innocent Phangaphanga</a>
                                                </li>
                                                <li><a href="#">Mr. Patrick Chimseu</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{--                                   <a class="btn mt-10 btn-md btn-theme animation" href="#">Learn More</a>--}}
                                </div>
                            </div>
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h2 class="title">
                                        <a href="#"> Confronting Energy Poverty: Building an Interdisciplinary Evidence Base, Network, and Capacity for Transformative Change (PIRE).</a>
                                    </h2>
                                    <p class="details">
                                        <span class="funder">
                                            University of North Carolina (Chapel Hill)
                                        </span>
                                        <span class="duration">
                                            5 Years (2017-2022)
                                        </span>
                                    </p>

                                    <div class=" tags">
                                        <div class="">
                                            <ul>
                                                <li><a href="#">Dr Innocent Phangaphanga</a>
                                                </li>
                                                <li><a href="#">Mr. Patrick Chimseu</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{--                                   <a class="btn mt-10 btn-md btn-theme animation" href="#">Learn More</a>--}}
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html"><i
                                                    class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="blog-with-sidebar.html">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html"><i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


</x-guest-layout>
