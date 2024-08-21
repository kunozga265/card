<div>



    <div class="mb-4">
        <div class="flex items-center">
            @if ($photo)
                <div class="avatar mr-4" style="width: auto">
                    <img src="{{ $photo->temporaryUrl() }}">
                </div>
            @endif
            <div class="w-full">
                <x-input-label class="mb-2" for="photo" :value="__('Photo')"/>
                <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
                >
                    <input type="file" id="photo" accept="image/*" wire:model="photo"
                           class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                           placeholder="https://">
                    @error('photo') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

    </div>

    <div class="mb-4">
        <x-input-label class="mb-2" for="name" :value="__('Name')"/>
        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            <input type="text" id="name" wire:model="name"
                   class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                   required>
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="mb-4">
        <x-input-label class="mb-2" for="title" :value="__('Title')"/>
        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            <input type="text" id="title" wire:model="title"
                   class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                   required>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>




    <!-- Start socials -->
    <div class="mb-4">
        <x-input-label class="mb-2" for="socials" :value="__('Socials')"/>

        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            @foreach($socials as $key => $value)
                <div class="flex mb-4 items-center">
                    <div class="col-md-2 p-2">
                        @if($key == 0)
                            <i class="mdi mdi-facebook"></i>
                        @elseif($key == 1)
                            <i class="mdi mdi-twitter"></i>
                        @else
                            <i class="mdi mdi-linkedin"></i>
                        @endif

                    </div>
                    <input type="text" id="social-{{$key}}" wire:model="socials.{{$key}}.link"
                           class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">

                </div>
            @endforeach

            {{--            <div>--}}
            {{--                <button wire:click.prevent="addSocial" class="add-new"><i--}}
            {{--                        class="mdi mdi-plus-circle info"></i> Add New--}}
            {{--                </button>--}}
            {{--            </div>--}}
        </div>
    </div>
    <!-- End socials -->


    <div style="text-align: center">
        <input wire:click.prevent="update" class="btn btn-primary" style="background: #03a100; margin-top: 12px"
               type="submit" value="Post">
    </div>


</div>
