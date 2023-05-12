<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center h-vh-50">
            <div class="flex-col w-full">
                <div class="flex items-center place-self-center w-full sm:justify-center py-12">
                    <span class=" font-bold text-3xl">{{ __('Find a currency exchanger in your area') }}</span>
                </div>
                <div class="flex items-center w-full sm:justify-center">
                    @include('inline-search')
                </div>
            </div>
        </div>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="results" focus>
        @include('results')
    </div>  
</x-app-layout>
