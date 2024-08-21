<x-app-layout>
    <x-slot name="title">
        Users - New
    </x-slot>

    <x-slot name="header" class="">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Users - New') }}
        </h2>
    </x-slot>

    <x-slot name="breadcrumbs">
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 9 4-4-4-4"/>
                </svg>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                    Users
                </span>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 9 4-4-4-4"/>
                </svg>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                    New
                </span>
            </div>
        </li>
    </x-slot>

    <div
    >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="form">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')"/>

                    <section>
                        <div class="block">
                            <div class="container">
                                <div class="">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div>
                                            <x-input-label class="mb-2" for="title" :value="__('Name')"/>
                                            <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
                                            >
                                                <input
                                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                                    type="text" name="name"
                                                    placeholder="Enter Name" value="{{old("name")}}">
                                                <x-input-error :messages="$errors->get('name')"
                                                               class="mb-2 text-error"/>
                                            </div>
                                        </div>

                                        <div>
                                            <x-input-label class="mb-2" for="title" :value="__('Email')"/>
                                            <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
                                            >
                                                <input
                                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                                    type="email" name="email"
                                                    placeholder="Enter Email Address" value="{{old("email")}}">
                                                <x-input-error :messages="$errors->get('email')"
                                                               class="mb-2 text-error"/>
                                            </div>
                                        </div>


                                        <!-- Password -->
                                        <div>
                                            <x-input-label class="mb-2" for="title" :value="__('Password')"/>
                                            <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
                                            >
                                                <input
                                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                                    type="password" name="password"
                                                    placeholder="Password" value="{{old("password")}}">
                                                <x-input-error :messages="$errors->get('password')"
                                                               class="mb-2 text-error"/>
                                            </div>
                                        </div>

                                        <!-- Confirm Password -->
                                        <div>
                                            <x-input-label class="mb-2" for="title"
                                                           :value="__('Password Confirmation')"/>
                                            <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
                                            >
                                                <input
                                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                                    type="password"
                                                    name="password_confirmation" placeholder="Re-Enter Password"
                                                    value="{{old("password_confirmation")}}">
                                                <x-input-error :messages="$errors->get('password_confirmation')"
                                                               class="mb-2 text-error"/>
                                            </div>
                                        </div>

                                        <div class=" mt-4">


                                            <x-primary-button class="ml-4">
                                                {{ __('Register') }}
                                            </x-primary-button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
