<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('New exchange offer') }}
        </h2>
    </x-slot>
    <div class="flex w-full justify-center text-slate-500">
        <div class="flex w-4/5 p-4 justify-center my-4">
            <div class="flex w-full max-w-7xl border-2 rounded-lg shadow-xs p-8 bg-white">
                <form action="" method="post" class="w-full justify-center">
                    @csrf
                    <div class="pb-8 border-b flex-col space-y-8">
                        <div class="flex justify-start gap-8">
                            <div class="w-1/4">
                                <x-input-label for="" :value="__('I have')" />
                                <x-text-input class="form-input w-full mt-1 block" id="" name="" type="number" required autofocus />
                            </div>
                            <div class="w-1/4">
                                <x-input-label :value="__('Currency')" />
                                <x-select class="form-select w-full mt-1 block">
                                    <x-select-option :value="__('EUR')"></x-select-option>
                                </x-select>
                            </div>
                        </div>
                        <div class="flex justify-start">
                            <div class="w-1/4">
                                <x-input-label for="" :value="__('Exchange with')" />
                                <x-select class="form-select w-full mt-1 block">
                                    <x-select-option :value="__('EUR')"></x-select-option>
                                    <x-select-option :value="__('USD')"></x-select-option>
                                </x-select>
                            </div>
                        </div>
                    </div>
                    <div class="pb-8 border-b space-y-4">
                        <div class="mt-4"><span class="text-2xl font-medium">{{ __('Exchange Rate Informations') }}</span></div>
                        <div class="flex items-center gap-4">
                            <input class="flex form-checkbox p-1 border-2 border-slate-500 rounded" type="checkbox" name="" id=""> <span class="font-semibold">{{ __('Open to negociation on the rate') }}</span>
                        </div>
                        <div class="flex gap-8">
                            <div class="w-1/4">
                                <x-input-label :value="__('EUR')" /><!-- Change by the value of "currency" select box -->
                                <x-text-input type="number" class="form-input mt-1 block w-full" :value="__('1')" name="" id="" disabled/>
                            </div>
                            <div class="flex items-center">
                                <span>{{ __('To') }}</span>
                            </div>
                            <div class="w-1/4">
                                <x-input-label :value="__('USD')" /><!-- Change by the value of "exchange with" select box -->
                                <x-text-input type="number" class="form-input mt-1 block w-full" name="" id="" required autofocus/>
                            </div>
                        </div>
                    </div>
                    <div class="pb-8 border-b space-y-4">
                        <div class="mt-4"><span class="text-2xl font-medium">{{ __('Your Location') }}</span></div>
                        <div class=" flex items-center gap-4">
                            <input class="flex form-checkbox p-1 border-2 border-slate-500 rounded" type="checkbox" name="" id="currentLocation"> <span class="font-semibold">{{ __('Use my current location') }}</span>
                        </div>
                        <div class="flex justify-start gap-8" id="locationSelect">
                            <div class="w-1/4">
                                <x-input-label :value="__('Country')" />
                                <x-select class="form-select block mt-1 w-full">
                                    <x-select-option :value="__('Ghana')"></x-select-option>
                                </x-select>
                            </div>
                            <div class="w-1/4">
                                <x-input-label :value="__('City')" />
                                <x-select class="form-select block mt-1 w-full">
                                    <x-select-option :value="__('Accra')"></x-select-option>
                                </x-select>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4">
                        <span class="text-sm font-medium">{{ __('By clicking the publish button, you certified that you\'ve read and understand our policy concerning the creation and the handling of exchange offer on this platform as stated in the Terms of Utilization') }}</span>
                        <div class="flex items-center w-1/4">
                            <x-primary-button class="w-full justify-center mt-4" type="submit">{{ __('Publish') }}</x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    function (){
       $i = document.getElementById('currentLocation');
       if (isset($i)) {
            document.getElementById('locationSelect').hidden;
       } else {
            return ();
       }
    }
</script>