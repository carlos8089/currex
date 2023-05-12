@inject('quote', 'Illuminate\Foundation\Inspiring')
<x-app-layout>
    <section class="relative block py-48">
        <div class="absolute text-5xl flex content-center top-0 w-full h-full bg-center bg-gradient-to-r from-indigo-600 to-pink-500 text-white">
            <div class="flex justify-start content-center w-full">
                <div class=" w-1/2 font-serif italic text-3xl text-white p-8">
                    {!! $quote->quote() !!}
                </div>
            </div>
        </div>
    </section>
    <section class="absolute py-8 top-2/4 w-full text-slate-800">
        <div class="flex h-vh-75 justify-center">
            <div class="flex mb-auto mx-8 max-w-6xl h-full bg-white dark:bg-slate-700 p-4 border rounded-lg shadow-md w-full">
                <div class="w-1/4 flex justify-center" id="changer-info">
                    <div class="absolute -top-4 flex mb-8">
                        <div class="w-36 h-36 rounded-full bg-slate-600 border-4 border-white shadow shadow-slate-800">

                        </div>
                    </div>
                    <div class="mt-16 w-full flex flex-col justify-between">
                        <div class="">
                            <div class="flex justify-center my-4">
                                <span class="font-serif text-slate-800 dark:text-slate-200 font-bold text-3xl">
                                    Jane Doe
                                </span>
                            </div>
                            <div class="flex justify-center">
                                    <span class="font-semibold text-slate-500 dark:text-slate-500">
                                        {{ __('Certified Changer') }}
                                    </span>
                            </div>
                                <div class="flex justify-center">
                                    <span class="font-semibold text-slate-500 dark:text-slate-500">
                                        {{ __('7 Satrs') }}
                                    </span>
                                </div>
                            <div class="flex justify-center">
                                    <span class="font-semibold text-slate-500 dark:text-slate-500">
                                        {{ __('1999 Transactions') }}
                                    </span>
                            </div>
                        </div>
                        <div class="flex justify-between px-4">
                            <div class="flex justify-center my-2">
                                    <x-secondary-button>
                                        <span>Call</span>
                                    </x-secondary-button>
                            </div>
                            <div class="flex justify-center my-2">
                                    <x-primary-button>
                                        <a href="{{ route('messages') }}">Message</a>
                                    </x-primary-button>
                            </div>
                        </div>
                        
                    </div>
                    <div class=" z">
    
                    </div>
                </div>
                <div class="w-3/4" id="transaction-details">
                    @include('table_example')
                </div>
            </div>
        </div>
    </section>
</x-app-layout>