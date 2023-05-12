<div class="flex flex-row">
        <div class="basis-1/4 dark:bg-slate-400">
            <a href="http://">htrtr</a>
        </div>
        <div class="basis-3/4 dark:bg-red-300">
            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <form method="POST" action="">
                                @csrf
                                <!-- Currency in possession -->
                                <div class="">
                                    <div class="mt-4">
                                        <x-input-label for="pcurrency" :value="__('I have...')" />
                                        <x-select class="block mt-1 w-full" name="pcurrency" id="pcurrency" required autofocus>
                                            <x-select-option :value="__('usd')">usd</x-select-option>
                                            <x-select-option :value="__('eur')">eur</x-select-option>
                                            <x-select-option :value="__('xof')">xof</x-select-option>
                                            <x-select-option :value="__('etb')">etb</x-select-option>
                                        </x-select>
                                        <x-input-error :messages="$errors->get('pcurrency')" class="mt-2" />
                                    </div>
                                    <!-- Amount oftransaction -->
                                    <div class="mt-4">
                                        <x-input-label for="amount" :value="__('Amount')" />
                                        <x-text-input id="amount" class="block mt-1 w-full" type="number" name="amount" :value="old('amount')" required autofocus />
                                        <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                                    </div>
                                </div>
                                

                                <!-- Currency wanted -->
                                <div class="mt-4">
                                    <x-input-label for="wcurrency" :value="__('I want...')" />
                                    <x-select class="block mt-1 w-full" name="wcurrency" id="wcurrency" required autofocus>
                                        <x-select-option :value="__('usd')">usd</x-select-option>
                                        <x-select-option :value="__('eur')">eur</x-select-option>
                                        <x-select-option :value="__('xof')">xof</x-select-option>
                                        <x-select-option :value="__('etb')">etb</x-select-option>
                                    </x-select>
                                    <x-input-error :messages="$errors->get('wcurrency')" class="mt-2" />
                                </div>

                                
                                <!-- Date of transaction -->
                                <div class="mt-4">
                                    <x-input-label for="" :value="__('Period of validity')" />
                                    <x-text-input type="date" class="block mt-1 w-full" id="date" name="date"/>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="w-full text-justify-center">
                                        {{ __('Post') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

