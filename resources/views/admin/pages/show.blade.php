<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $page->name }} Page
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($sections = $page->sections as $section)
                <div class="mb-4 text-gray-900 text-base font-weight-bold">
                    {{ $section->name }} Section
                </div>
            <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
               >

                <div class="grid grid-cols-2">
                    <div class="page-image"   style="background-image: url({{asset($section->image)}});"></div>
                    <div>
                        <form method="post" action="{{route("pages.update",["id"=>$section->id])}}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <x-input-label for="image" :value="__('Image')" />
                                <input class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="file" id="image" name="image">
                            </div>
                            <div class="mb-4">
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{$section->title}}" required autocomplete="title" />
                            </div>
                            <div class="mb-4">
                                <x-input-label for="subtitle" :value="__('Subtitle')" />
                                <x-text-input id="subtitle" class="block mt-1 w-full" type="text" name="subtitle" value="{{$section->subtitle}}" autocomplete="subtitle" />
                            </div>
                            <div class="mb-4">
                                <x-input-label for="description" :value="__('Description')" />
                                <x-text-input id="tinymce" class="tinymce block mt-1 w-full" type="text" name="description" value="{{$section->description}}" autocomplete="description" />
                            </div>

                            <x-primary-button >
                                {{ __('Update') }}
                            </x-primary-button>

                        </form>

                    </div>
                </div>


{{--                <div class="w-8 h-8 text-white bg-gray-800 rounded-lg flex align-items-center justify-center">--}}

{{--                </div>--}}
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
