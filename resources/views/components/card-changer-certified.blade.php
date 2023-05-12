<div {{ $attributes->merge(['class'=>'w-full sm:max-w-md mt-2 p-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg border-l-4 border-solid border-blue-700 ']) }} >
    <form action="{{ url('changers/jane-doe') }}" method="get">
        @csrf
        <div class="flex justify-between" role="button" :href="url('www.google.com')" onclick="event.preventDefault();this.closest('form').submit();">
            <div class=" w-auto h-auto justify-center rounded-full overflow-visible">
                <div class=" p-10 bg-gradient-to-r from-indigo-700 to-pink-700 rounded-full">
                     <!--
                    <img class="rounded-full object-fit object-center" src="{{ url('https://th.bing.com/th/id/R.2599e892ae33710476439b77ab2a9242?rik=kfKfjfve7SbNlg&riu=http%3a%2f%2fwww.leawo.com%2fblog%2fwp-content%2fuploads%2f2009%2f12%2favatar20.jpg&ehk=D8K3Lmrm3fQ%2bOLYu%2fMcsTkxbi%2bJg8iFQhc0ARaWQfaQ%3d&risl=&pid=ImgRaw&r=0') }}" alt="" width="48" height="56">
                     -->
                </div>
            </div>
            <div class="w-3/4 ml-2">
                <div class="flex justify-between">
                    <h5 class="font-bold content-center"> {{ $name }} </h5>
                    <div class="inline-flex">
                        <img src="" alt="" srcset="" width="8" height="8">
                    </div>
                </div>
                <div class="row-span-2 col-span-2">
                    <span>{{ __('in '. $city.', '.$country) }}</span><span>{{ __(' '.$stars.' stars') }}</span><br>
                    <span class="pr-3">
                        {{ __('7 currencies') }}
                    </span><span class="border-l-2 border-solid border-gray-900 pl-3">
                        {{__('Fixed rate')}}
                    </span>
                </div>
            </div>
        </div>
    </form>
</div>