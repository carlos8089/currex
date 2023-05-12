<div class="grid grid-cols-12 justify-even gap-2 py-2 dark:bg-gray-700">
    <div class="h-screen col-span-2" id="filters" scrollable>
        <div>
            <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4">{{ __('Filters') }}</h4>
        </div>
        <div class="mt-4">
            <h5 class="font-semibold">{{ __('Amount') }}</h5>
            <input type="range" name="" id="" min="100" max="1000000" autofocus>
        </div>
        <div class="mt-4">
            <h5 class="font-semibold">{{ __('Type of currency') }}</h5>
            <div>
                <input type="checkbox" name="" id="" autofocus>
                <label for="">  {{ __('State\'s currencies') }} </label>
            </div>
            <div>
                <input type="checkbox" name="" id="" autofocus>
                <label for="">  {{ __('Cryptocurrencies') }} </label>
            </div>
        </div>
        <div class="mt-4">
            <h5 class="font-semibold">{{ __('Transaction method') }}</h5>
            <div>
                <input type="radio" name="" id="" autofocus checked>
                <label for=""> {{ __('Physical cash') }}</label>
            </div>
            <div>
                <input type="radio" name="" id="" autofocus>
                <label for=""> {{ __('Mobile money') }}</label>
            </div>
            <div>
                <input type="radio" name="" id="" autofocus>
                <label for=""> {{ __('Bank Account') }}</label>
            </div>
            <div>
                <input type="radio" name="" id="" autofocus>
                <label for=""> {{ __('Online Account') }}</label>
            </div>
            <div>
                <input type="radio" name="" id="" autofocus>
                <label for=""> {{ __('Other') }}</label>
            </div>
        </div>
        <div class="mt-4">
            <h5 class="font-semibold">{{ __('Type of changer') }}</h5>
            <div>
                <input type="checkbox" name="" id="">
                <label for="">{{ __('Certified') }}</label>
            </div>
            <div>
                <input type="checkbox" name="" id="">
                <label for="">{{ __('Every changer') }}</label>
            </div>
        </div>
    </div>
    <div class="col-start-3 col-end-13 w-full" id="list">
        <div class="">
            <div class="w-full flex justify-between" id="listBanner">
                <div class="flex">
                    <h4 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ __('50 result in Accra, Ghana') }}</h4>
                </div>
                <div class="flex">
                    <x-dropdown align="right" width='48'>
                        <x-slot name='trigger'>
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ __('Sort By') }}</div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                        </x-slot>
                        <x-slot name="content">
                            
                        </x-slot>
                    </x-dropdown>
                </div>    
            </div>
            <div class="w-full gap-2" id="listItems">
                @for ($i = 0; $i < 50; $i++)
                    <div class="p-1 inline-grid">
                        <x-card-changer-certified :name=$name :city=$city :country=$country :amount=$max :stars=$stars/>
                    </div>
                @endfor
            </div>
        </div>
    </div>    
</div>