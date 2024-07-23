<x-app-layout>
    <x-slot name="title">
        Research Projects
    </x-slot>

    <x-slot name="header" class="">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Publications') }}
        </h2>

        <div class="actions">
            <a href="{{route('publications.create')}}">
                <i class="mdi mdi-plus"></i>
                <span>New</span>
            </a>
        </div>
    </x-slot>

    <x-slot name="breadcrumbs">
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                    Publications
                </span>
            </div>
        </li>
    </x-slot>

    <div
    >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="compound-list">
                @foreach($publications as $publication)
                    <!-- Single Item -->
                    <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
                    >


                        <div class="">
                            <div class="info">
                                <div class="text-xl text-gray-800 leading-tight ">
                                    <a href="{{route("publications.edit",["slug"=>$publication->slug])}}"> {{$publication->title}}</a>
                                </div>
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
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
