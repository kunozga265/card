<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section>
        <div class="block">
            <div class="container">
                <div class="cnt-inr" style="background-image: url({{asset('assets/images/pattern-bg2.png')}});">
                    <h2 itemprop="headline">Login <span class="thm-clr">Administration Panel</span></h2>
                    <p itemprop="description">Submit your credentials below</p>
                    <form method="POST" action="{{ route('login') }}" class="cnt-frm">
                        @csrf
                        <div class="row mrg10">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input type="email" name="email" placeholder="Email Address">
                                <x-input-error :messages="$errors->get('email')" class="mb-2 text-error" />
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input type="password" name="password" placeholder="Password">
                                <x-input-error :messages="$errors->get('password')" class="mb-2 text-error" />
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="thm-btn" type="submit">Proceed<span style="top: -8px; left: 206px;"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
