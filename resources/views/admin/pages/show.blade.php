<x-app-layout>
    <x-slot name="title">
        Page - {{ $page->name }}
    </x-slot>

    <x-slot name="header">
        <h2 class=" text-xl text-gray-800 leading-tight">
            {{ $page->name }} Content
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($sections = $page->sections as $section)
                <div class="mb-4 text-gray-900 text-base font-weight-bold">
                    {{ $section->name }}
                </div>
            <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
               >

                <form method="post" action="{{route("pages.update",["id"=>$section->id])}}" enctype="multipart/form-data">
                    @csrf

                    @if(isset($section->image))
                        <div class="mb-4">
                            <div  class="page-image"   style="background-image: url({{asset($section->image)}});"></div>
                        </div>

                    @endif
                    <div class="mb-4">
                        <x-input-label for="image" :value="__('Image')" />
                        <input class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="file" id="image" name="image">
                    </div>

                    <div class="grid {{isset($section->image)?'grid-cols-1 md:grid-cols-2':''}}">





                        <div class="mb-4 mr-4">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{$section->title}}" required autocomplete="title" />
                        </div>
                        <div class="mb-4 mr-4">
                            <x-input-label for="subtitle" :value="__('Subtitle')" />
                            <x-text-input id="subtitle" class="block mt-1 w-full" type="text" name="subtitle" value="{{$section->subtitle}}" autocomplete="subtitle" />
                        </div>


                </div>
                    <div class="md:col-span-2">
                        <div class="mb-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea class="editor block mt-1 w-full" type="text" name="description" autocomplete="description" >{{$section->description}}</textarea>
                        </div>
                    </div>
                    <div>
                        <x-primary-button >
                            {{ __('Update') }}
                        </x-primary-button>
                    </div>
                </form>


{{--                <div class="w-8 h-8 text-white bg-gray-800 rounded-lg flex align-items-center justify-center">--}}

{{--                </div>--}}
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
