<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your offers list') }}
        </h2>
    </x-slot>
    <!-- injection of offers number for test -->
    @php
        $offers = 10
    @endphp
    <!-- Page to render depending on offers number -->
    @switch($offers)
        @case(null)
            <div class="flex items-center justify-center h-vh-85 w-full">
                <div class="flex-col border-2 border-dashed pb-8">
                    <div class="flex w-full justify-center p-8">
                        <span class="font-bold text-4xl text-gray-500">{{ __('You\'ve no offer published for now') }}</span>
                    </div>
                    <div class="flex w-full">
                        <form action="#" method="get" class="flex w-full justify-center">
                            @csrf
                            <x-primary-button class="flex w-1/3 justify-center" type="submit">Add New Offer</x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
            @break
        @case(!null)
            <div class="flex w-full justify-center">
                @include('offers.has-offers')
            </div>
            @break
        @default
            
    @endswitch
</x-app-layout>