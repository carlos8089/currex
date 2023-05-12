<div {{ $attributes->merge(['class'=>'w-full inline-flex sm:max-w-md mt-3 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg']) }} >
    <div class="grid grid-cols-3">
        <div class="col-end-2">
            <h5 class="font-semibold"> {{ $name }} </h5>
            <span>{{ __('in '. $city.', '.$country) }}</span>
        </div>
        <div class="col-start-3">
            <x-primary-button class="ml-2">
                {{ __('S')}}
            </x-primary-button>
        </div>
    </div>
    <div>
        <span>
            {{ __('Up to '. $amount) }}
        </span>
        <br>
        <span>{{ __($stars.' stars') }}</span>
    </div>
</div>