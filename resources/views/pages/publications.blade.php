<x-guest-layout>

    <x-slot name="title">
        Publications
    </x-slot>

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light" style="background-image: url({{asset($banner->image)}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>{{$heading}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                            <li><a href="{{route('publications')}}">{{$banner->title}}</a></li>
                            <li class="active">{{$section}}</li>
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
                                <h4 class="title">Category</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="{{route('publications')}}">All <span>{{$all}}</span></a>
                                        </li>

                                        @foreach($types as $type)
                                            <li>
                                                <a href="{{route('publications',['section'=>$type->slug])}}">{{$type->name}} <span>{{$type->publications->count()}}</span></a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                    <div
                        class="col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15 mt-md-100 mt-xs-50">
                        <div class="compound-list">
                            @foreach($publications as $publication)
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h2 class="title ">
                                        <a href="{{route("publications.download",["slug"=>$publication->slug])}}"> {{$publication->title}}</a>
                                    </h2>
                                    <p class="details">
                                    <span>
                                        {{$publication->description}}
                                    </span>
                                        <span class="status active">{{$publication->type->name}}</span>
                                    </p>

                                    <div class=" tags">
                                        <div class="">
                                            <ul>
                                                @foreach($authors = json_decode($publication->authors) as $author)
                                                    <li><a href="#">{{$author}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    {{--                                                                   <a class="btn mt-10 btn-md btn-theme animation" href="#">Learn More</a>--}}
                                </div>
                            </div>
                            <!-- End Single Item -->
                            @endforeach
                        </div>

{{--                        <!-- Pagination -->--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 pagi-area text-center">--}}
{{--                                <nav aria-label="navigation">--}}
{{--                                    <ul class="pagination">--}}
{{--                                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html"><i--}}
{{--                                                    class="fas fa-angle-double-left"></i></a></li>--}}
{{--                                        <li class="page-item active"><a class="page-link" href="blog-with-sidebar.html">1</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html">2</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html">3</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html"><i--}}
{{--                                                    class="fas fa-angle-double-right"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>


                </div>
            </div>
        </div>
    </div>


</x-guest-layout>
