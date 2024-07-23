<div>
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

    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="mb-4 mr-4">
            <x-input-label class="mb-2" for="default-datepicker" :value="__('Start Date')"/>
            <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
            >
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input type="date" id="date" wire:model="date"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           required>
{{--                    <input wire:model="date" datepicker id="default-datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">--}}
                </div>
                @error('date') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mb-4">
            <x-input-label class="mb-2" for="duration" :value="__('Duration')"/>
            <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
            >
                <input type="text" id="duration" wire:model="duration"
                       class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                       required>
                @error('duration') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>


    <div class="mb-4">
        <x-input-label class="mb-2" for="active-checkbox" :value="__('Active')"/>
        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            <div class="flex items-center">
                <input checked wire:model="active" id="active-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Still Active?</label>
            </div>
            @error('active') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>

    <!-- Start Funders -->
    <div class="mb-4">
        <x-input-label class="mb-2" for="funders" :value="__('Funding Organizations')"/>

        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            @foreach($funders as $key => $value)
                <div class="flex mb-4 items-center">
                    <div class="p-2">
                        {{$key + 1}}.
                    </div>
                    <input type="text" id="funder-{{$key}}" wire:model="funders.{{$key}}"
                           class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <div class="col-md-2 p-2">
                        <button wire:click.prevent="removeFunder({{$key}})" class=""><i
                                class="mdi mdi-close-circle error"></i></button>
                    </div>
                </div>
            @endforeach

            <div>
                <button wire:click.prevent="addFunder" class="add-new"><i
                        class="mdi mdi-plus-circle info"></i> Add New
                </button>
            </div>
        </div>
    </div>
    <!-- End Funders -->


    <!-- Start Countries -->
    <div class="mb-4">
        <x-input-label class="mb-2" for="countries" :value="__('Countries')"/>

        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            @foreach($countries as $key => $value)
                <div class="flex mb-4 items-center">
                    <div class="p-2">
                        {{$key + 1}}.
                    </div>
                    <input type="text" id="country-{{$key}}" wire:model="countries.{{$key}}"
                           class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <div class="col-md-2 p-2">
                        <button wire:click.prevent="removeCountry({{$key}})" class=""><i
                                class="mdi mdi-close-circle error"></i></button>
                    </div>
                </div>
            @endforeach

            <div>
                <button wire:click.prevent="addCountry" class="add-new"><i
                        class="mdi mdi-plus-circle info"></i> Add New
                </button>
            </div>
        </div>
    </div>
    <!-- End Countries -->


    <!-- Start Implementers -->
    <div class="mb-4">
        <x-input-label class="mb-2" for="implementers" :value="__('Implementers')"/>

        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            @foreach($implementers as $key => $value)
                <div class="flex mb-4 items-center">
                    <div class="p-2">
                        {{$key + 1}}.
                    </div>
                    <input type="text" id="implementer-{{$key}}" wire:model="implementers.{{$key}}"
                           class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <div class="col-md-2 p-2">
                        <button wire:click.prevent="removeImplementer({{$key}})" class=""><i
                                class="mdi mdi-close-circle error"></i></button>
                    </div>
                </div>
            @endforeach

            <div>
                <button wire:click.prevent="addImplementer" class="add-new"><i
                        class="mdi mdi-plus-circle info"></i> Add New
                </button>
            </div>
        </div>
    </div>
    <!-- End Implementers -->


    <!-- Start Collaborators -->
    <div class="mb-4">
        <x-input-label class="mb-2" for="collaborators" :value="__('Collaborators')"/>

        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            @foreach($collaborators as $key => $value)
                <div class="flex mb-4 items-center">
                    <div class="p-2">
                        {{$key + 1}}.
                    </div>
                    <input type="text" id="collaborator-{{$key}}" wire:model="collaborators.{{$key}}"
                           class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <div class="col-md-2 p-2">
                        <button wire:click.prevent="removeCollaborator({{$key}})" class=""><i
                                class="mdi mdi-close-circle error"></i></button>
                    </div>
                </div>
            @endforeach

            <div>
                <button wire:click.prevent="addCollaborator" class="add-new"><i
                        class="mdi mdi-plus-circle info"></i> Add New
                </button>
            </div>
        </div>
    </div>
    <!-- End Collaborators -->


    <!-- Start Objectives -->
    <div class="mb-4">
        <x-input-label class="mb-2" for="objectives" :value="__('Objectives')"/>

        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            @foreach($objectives as $key => $value)
                <div class="flex mb-4 items-center">
                    <div class="p-2">
                        {{$key + 1}}.
                    </div>
                    <input type="text" id="objective-{{$key}}" wire:model="objectives.{{$key}}"
                           class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <div class="col-md-2 p-2">
                        <button wire:click.prevent="removeObjective({{$key}})" class=""><i
                                class="mdi mdi-close-circle error"></i></button>
                    </div>
                </div>
            @endforeach

            <div>
                <button wire:click.prevent="addObjective" class="add-new"><i
                        class="mdi mdi-plus-circle info"></i> Add New
                </button>
            </div>
        </div>
    </div>
    <!-- End Objectives -->


    <!-- Start Investigators -->
    <div class="mb-4">
        <x-input-label class="mb-2" for="investigators" :value="__('Investigators')"/>

        <div class="mb-6 p-6  bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            @foreach($investigators as $key => $value)
                <div class="flex mb-4 items-center">
                    <div class="p-2">
                        {{$key + 1}}.
                    </div>
                    <input type="text" id="investigator-{{$key}}" wire:model="investigators.{{$key}}"
                           class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <div class="col-md-2 p-2">
                        <button wire:click.prevent="removeInvestigator({{$key}})" class=""><i
                                class="mdi mdi-close-circle error"></i></button>
                    </div>
                </div>
            @endforeach

            <div>
                <button wire:click.prevent="addInvestigator" class="add-new"><i
                        class="mdi mdi-plus-circle info"></i> Add New
                </button>
            </div>
        </div>
    </div>
    <!-- End Investigators -->

    <div style="text-align: center">
        <input wire:click.prevent="store" class="btn btn-primary" style="background: #03a100; margin-top: 12px"  type="submit" value="Post">
    </div>



</div>
