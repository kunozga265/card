<x-app-layout>
    <x-slot name="title">
        Users
    </x-slot>

    <x-slot name="header" class="">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>

        <div class="actions">
            <a href="{{route('register')}}">
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
                    Users
                </span>
            </div>
        </li>
    </x-slot>

    <div
    >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="compound-list">
                @foreach($users as $user)
                    <!-- Single Item -->
                    <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
                    >
                        <div class="flex items-center justify-between">
                            <div class="info">
                                <div class="text-xl text-gray-800 leading-tight ">
                                    {{$user->name}}
                                </div>
                                <p class="details">
                                    <span>
                                           {{$user->email}}

                                    </span>
                                </p>
                            </div>
                            @if(\Illuminate\Support\Facades\Auth::id()==$user->id)
                                <div class="">
                                    <a class="btn" href="{{route('profile.edit')}}">
                                        <i class="mdi mdi-eye"></i>
{{--                                        <span>Profile</span>--}}
                                    </a>
                                </div>

                            @elseif(\Illuminate\Support\Facades\Auth::id()==1 || \Illuminate\Support\Facades\Auth::id()==2)
                                <div class="">
                                    <form method="POST" action="{{ route('users.destroy',["id"=>$user->id]) }}">
                                        @csrf

                                        <div class="actions">
                                            <button class="btn error" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <i class="mdi mdi-delete"></i>
{{--                                                <span>Delete</span>--}}
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
