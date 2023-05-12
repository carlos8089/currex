<div x-data="{ show: false }">
    <x-secondary-button @click="show = true">Change</x-secondary-button>

    <div class="fixed z-10 inset-0 overflow-y-auto" x-show="show">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-black bg-opacity-75 blur-sm"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Insert icon here -->
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Request a currency change from Jane Doe
                            </h3>
                            <div class="mt-2">
                                <form action="#" @submit="show = false">
                                    @csrf
                                    <div class="flex mb-4">
                                        <div class="flex flex-col gap-4">
                                            <div class="">
                                                <x-input-label :value="__('EUR to XOF')" />
                                            </div>
                                            <div class="flex flex-col gap-4">
                                                <x-text-input class="w-full" type="number" id="amount" autofocus/>
                                                <x-text-input type="number"
                                                    :value="
                                                    756"
                                                disabled/>
                                            </div>
                                            <div>
                                                <x-input-label :value="__('Preferably between')" />
                                            </div>
                                            <div class="flex justify-between">
                                                <x-text-input type="date" name="start"/><x-text-input type="date" name="end"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-center w-full">
                                        <x-primary-button class="flex justify-center w-full" type="submit">Send</x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
