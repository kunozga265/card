<x-guest-layout>

    <x-slot name="title">
        Partners
    </x-slot>

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light" style="background-image: url({{asset($banner->image)}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>{{$banner->title}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">{{$banner->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <div class="partners default-padding ">
        <div class="container">
            <div class="row">
                @for ($i = 1; $i < 24; $i++)
                    <div class="partner col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{asset('uploads/logos/'.$i.'.png')}}" alt="Partner Logo">
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- End Farmer -->


</x-guest-layout>
