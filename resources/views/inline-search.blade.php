<form action="#" method="get" onsubmit="function t()" class="flex w-full justify-center">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-2 w-full justify-between">
        <div class="flex-col w-1/5 md:w-1/5 px-3 mb-6 md:mb-0">
                <x-input-label for="pcurrency" :value="__('I have...')" />
                <x-select class="flex mt-1 w-full" name="pcurrency" id="pcurrency" required autofocus>
                    <x-select-option :value="__('usd')">usd</x-select-option>
                    <x-select-option :value="__('eur')">eur</x-select-option>
                    <x-select-option :value="__('xof')">xof</x-select-option>
                    <x-select-option :value="__('etb')">etb</x-select-option>
                </x-select>
                <x-input-error :messages="$errors->get('pcurrency')" class="mt-2" />
        </div>
        <div class="w-1/5 md:w-1/5 px-3 mb-6 md:mb-0">
                <x-input-label for="amount" :value="__('Amount')" />
                <x-text-input id="amount" class="block mt-1 w-full" type="number" name="amount" :value="old('amount')" placeholder="90210" required autofocus />
                <x-input-error :messages="$errors->get('amount')" class="mt-2" />
        </div>
        <div class="w-1/5 md:w-1/5 px-3 mb-6 md:mb-0">
                <x-input-label for="wcurrency" :value="__('I want...')" />
                <div class="relative">
                    <x-select class="block mt-1 w-full" name="wcurrency" id="wcurrency" required autofocus>
                        <x-select-option :value="__('usd')">usd</x-select-option>
                        <x-select-option :value="__('eur')">eur</x-select-option>
                        <x-select-option :value="__('xof')">xof</x-select-option>
                        <x-select-option :value="__('etb')">etb</x-select-option>
                    </x-select>
                    <x-input-error :messages="$errors->get('wcurrency')" class="mt-2" />
                </div>
        </div>
        <div class="w-1/5 md:w-1/5 px-3 mb-6 md:mb-0">
                <x-input-label for="country" :value="__('Changer In')" />
                <div class="relative">
                    <x-select class="block mt-1 w-full" name="country" id="country" required autofocus>
                        <x-select-option :value="__('Togo')"></x-select-option>
                        <x-select-option :value="__('Ethiopia')"></x-select-option>
                        <x-select-option :value="__('USA')"></x-select-option>
                        <x-select-option :value="__('France')"></x-select-option>
                    </x-select>
                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                </div>
        </div>
        <div class="w-1/5 md:w-1/5 px-3 pt-6 mb-6 md:mb-0">
                <x-primary-button class="block w-full py-2 text-justify-center">
                    {{ __('Search') }}
                </x-primary-button>
        </div>
    </div>
</form>
<script>
    function t(){
        document.getElementById('results').focus();
    }
</script>
