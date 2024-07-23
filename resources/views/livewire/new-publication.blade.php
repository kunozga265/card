<div>
    <div class="mb-4">
        <x-input-label class="mb-2" for="publication_type_id" :value="__('Type')"/>
        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            <select
                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                wire:model="publication_type_id" id="publication_type_id">
                    <option value="">Select Type</option>
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
            @error('publication_type_id') <span class="error">{{ $message }}</span> @enderror
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
    <div class="mb-4">
        <x-input-label class="mb-2" for="description" :value="__('Description')"/>
        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            <textarea type="text" id="description" wire:model="description"
                      class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                      required></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="mb-4 mr-4">
        <x-input-label class="mb-2" for="default-datepicker" :value="__('Date')"/>
        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            <div class="relative max-w-sm">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input type="date" id="date" wire:model="date"
                       class="w-full block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       required>
                {{--                    <input wire:model="date" datepicker id="default-datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">--}}
            </div>
            @error('date') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="mb-4">
        <x-input-label class="mb-2" for="link" :value="__('Link')"/>
        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            <input type="text" id="link" wire:model="link"
                   class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                   placeholder="https://">
            @error('link') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <!-- Start Authors -->
    <div class="mb-4">
        <x-input-label class="mb-2" for="authors" :value="__('Authors')"/>

        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            @foreach($authors as $key => $value)
                <div class="flex mb-4 items-center">
                    <div class="p-2">
                        {{$key + 1}}.
                    </div>
                    <input type="text" id="author-{{$key}}" wire:model="authors.{{$key}}"
                           class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <div class="col-md-2 p-2">
                        <button wire:click.prevent="removeAuthor({{$key}})" class=""><i
                                class="mdi mdi-close-circle error"></i></button>
                    </div>
                </div>
            @endforeach

            <div>
                <button wire:click.prevent="addAuthor" class="add-new"><i
                        class="mdi mdi-plus-circle info"></i> Add New
                </button>
            </div>
        </div>
    </div>
    <!-- End Authors -->


    <div style="text-align: center">
        <input wire:click.prevent="store" class="btn btn-primary" style="background: #03a100; margin-top: 12px"
               type="submit" value="Post">
    </div>


</div>
