<x-app-layout>
    @push("styles")
        @livewireScripts
    @endpush

    <x-slot name="title">
        Research Projects
    </x-slot>

    <x-slot name="header" class="">
        <h2 class=" text-xl text-gray-800 leading-tight">
            {{ __('Research Projects - New') }}
        </h2>

    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <livewire:new-project />
        </div>
    </div>

    @push("scripts")
            @livewireScripts
            <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    @endpush
</x-app-layout>
