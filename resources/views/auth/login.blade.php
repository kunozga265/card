<x-auth-layout>
    <div class="auth bg-cover shadow dark" style="background: url({{$first_banner->image}});">
        <div class="form">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <section>
                <div class="block">
                    <div class="container">
                        <div class="">
                            <h2 itemprop="title">CARD CMS</h2>
                            <p itemprop="description">Submit your credentials</p>
                            <form method="POST" action="{{ route('login') }}" class="cnt-frm">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="form-control mb-2" type="email" name="email" placeholder="Email Address" value="{{old("email")}}">
                                        <x-input-error :messages="$errors->get('email')" class="mb-2 text-error" />
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="form-control mb-2" type="password" name="password" placeholder="Password" value="{{old("password")}}">
                                        <x-input-error :messages="$errors->get('password')" class="mb-2 text-error" />
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="thm-btn" type="submit">Proceed<span style="top: -8px; left: 206px;"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



</x-auth-layout>
