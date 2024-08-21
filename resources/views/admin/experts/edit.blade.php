<x-app-layout>
    @push("styles")
        @livewireStyles
    @endpush

    <x-slot name="title">
        Experts
    </x-slot>

    <x-slot name="header" class="">
        <h2 class=" text-xl text-gray-800 leading-tight">
            {{ __('Experts - Edit') }}
{{--            {{$expert->title}}--}}
        </h2>

        <form method="POST" action="{{ route('experts.destroy',["slug"=>$expert->slug]) }}">
            @csrf

            <div class="actions">
                <button class="btn error" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <i class="mdi mdi-trash"></i>
                    <span>Delete</span>
                </button>
            </div>

        </form>
    </x-slot>

        <x-slot name="breadcrumbs">
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <a href="{{route('experts.index')}}"
                       class="ms-1 text-sm font-medium text-gray-700 md:ms-2 dark:text-gray-400">
                        Experts
                    </a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                    {{$expert->name}}
                </span>
                </div>
            </li>
        </x-slot>


    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <livewire:edit-expert :expert="$expert" />
        </div>
    </div>

    @push("scripts")
            @livewireScripts
            <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    @endpush
</x-app-layout>
