<x-auth-layout>
    <div class="auth bg-cover shadow dark" style="background: url(assetsv1/img/banner/3.jpg);">
        <div class="form">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <section>
                <div class="block">
                    <div class="container">
                        <div class="">
                            <h2 itemprop="title">CARD CMS</h2>
                            <p itemprop="description">Submit your credentials</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="col-sm-12">
                                    <input class="form-control mb-2" type="text" name="name" placeholder="Enter Name" value="{{old("name")}}">
                                    <x-input-error :messages="$errors->get('name')" class="mb-2 text-error" />
                                </div>

                                <div class="col-sm-12">
                                    <input class="form-control mb-2" type="email" name="email" placeholder="Enter Email Address" value="{{old("email")}}">
                                    <x-input-error :messages="$errors->get('email')" class="mb-2 text-error" />
                                </div>


                                <!-- Password -->
                                <div class="col-sm-12">
                                    <input class="form-control mb-2" type="password" name="password" placeholder="Password" value="{{old("password")}}">
                                    <x-input-error :messages="$errors->get('password')" class="mb-2 text-error" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-sm-12">
                                    <input class="form-control mb-2" type="password" name="password_confirmation" placeholder="Re-enter Password" value="{{old("password_confirmation")}}">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mb-2 text-error" />
                                </div>

                                <div class=" mt-4">


                                    <x-primary-button class="ml-4">
                                        {{ __('Register') }}
                                    </x-primary-button>
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


</x-auth-layout>
