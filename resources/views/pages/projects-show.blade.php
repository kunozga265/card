<x-guest-layout>

    <x-slot name="title">
        Research Projects - {{$project->title}}
    </x-slot>

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
         style="background-image: url({{asset($banner->image)}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>{{$banner->title}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                            <li><a href="{{route('projects')}}">{{$banner->title}}</a></li>
                            <li class="active">{{$project->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <div class="project default-padding-top">
        <div class="container">
            <div class="">
                <div class="row">
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-12 ">
                        <aside>
                            <div class="sidebar-item category">
                                <div class="compound-list">
                                    <!-- Single Item -->
                                    <div class="">
                                        <div class="info">
                                            <h2 class="title">
                                                {{$project->title}}
                                            </h2>
                                            <p class="details">
                                        <span class="duration m-0">
                                            {{$project->duration}}
                                        </span>

                                                <span
                                                    class="status {{$project->active? "active":''}}">{{$project->active? "Current":'Past'}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                    <div class="col-sm-12 col-md-12">
                        <div class="compound-list padding-40">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h2 class="title">
                                        Funding Organisations
                                    </h2>
                                    <ol class="details">
                                        @foreach($funders = json_decode($project->funders) as $funder)
                                            <li class="">
                                                {{$funder}}
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h2 class="title">
                                        Countries
                                    </h2>
                                    <ol class="details">
                                        @foreach($countries = json_decode($project->countries) as $country)
                                            <li class="">
                                                {{$country}}
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h2 class="title">
                                        Implementers
                                    </h2>
                                    <ol class="details">
                                        @foreach($implementers = json_decode($project->implementers) as $implementer)
                                            <li class="">
                                                {{$implementer}}
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h2 class="title">
                                        Collaborators
                                    </h2>
                                    <ol class="details">
                                        @foreach($collaborators = json_decode($project->collaborators) as $collaborator)
                                            <li class="">
                                                {{$collaborator}}
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h2 class="title">
                                        Objectives
                                    </h2>
                                    <ol class="details">
                                        @foreach($objectives = json_decode($project->objectives) as $objective)
                                            <li class="">
                                                {{$objective}}
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item b-0">
                                <div class="info">
                                    <h2 class="title">
                                        Investigators
                                    </h2>

                                    <div class=" tags">
                                        <div class="">
                                            <ul>
                                                @foreach($investigators = json_decode($project->investigators) as $investigator)
                                                    <li><a href="#">{{$investigator}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    {{--                                   <a class="btn mt-10 btn-md btn-theme animation" href="#">Learn More</a>--}}
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


</x-guest-layout>
