<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($pages as $page)
                <a href="{{route("pages.show",["id"=>$page->id])}}">
            <div class="p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg flex align-items-center justify-between">
                <div class="text-gray-900 text-lg font-weight-bold">
                    {{ $page->name }} Page
                </div>
                <div class="text-base text-gray-500">{{$page->sections->count()}} Sections</div>
{{--                <div class="w-8 h-8 text-white bg-gray-800 rounded-lg flex align-items-center justify-center">--}}

{{--                </div>--}}
            </div>
                </a>
            @endforeach
        </div>
    </div>
</x-app-layout>
