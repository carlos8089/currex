<div class="flex-col w-4/5 p-4">
    <div class="flex-col border rounded-md shadow-md bg-white mb-4 p-4" id="latest">
        <div class="flex w-full border-b justify-between items-center pb-2">
            <div><span class="font-bold text-2xl text-slate-800">{{ __('Active Offers') }}</span></div>
        </div>
        <div class="flex w-full border-b justify-between py-2">
            <div class="flex-col">
                <span class="flex font-medium text-slate-500">{{ __('Exchange details') }}</span>
                <span class="flex justify-start font-bold text-slate-500 text-4xl">100 USD to EUR</span>
            </div>
            <div class="flex-col ">
                <span class="flex justify-end font-medium text-slate-500">{{ __('Time Remaining') }}</span>
                <span class="font-bold text-slate-500 text-4xl flex justify-end">26 days</span>
            </div>
        </div>
        <!-- Accordion containing a list of changer who reacted to the active offer -->
        <div class="flex w-full justify-between">
            <span class="flex text-base font-semibold text-slate-500">7 Reactions to this offer</span>
            <span class="flex"></span>
        </div>
    </div>
    <div class="flex-col border rounded-md shadow-md bg-white mb-4 p-4 " id="previous-list">
        <div class="border-b pb-2"><span class="font-bold text-2xl text-slate-800">{{ __('Your Closed Offers') }}</span></div>
        <div class="flex max-h-vh-60 overflow-y-scroll overflow-x-hidden">
            <table class="border-collapse table-fixed w-full">
                <thead class="font-semibold border-b text-lg">
                    <tr>
                        <th class="dark:border-slate-600 font-semibold py-3 text-slate-600 dark:text-slate-200 text-left">{{ __('Closed on') }}</th>
                        <th class="dark:border-slate-600 font-semibold py-3 text-slate-600 dark:text-slate-200 text-left">{{ __('Reactions') }}</th>
                        <th class="dark:border-slate-600 font-semibold py-3 text-slate-600 dark:text-slate-200 text-left">{{ __('Details') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 17; $i++)
                    <tr class="border-b">
                        <td class="border-slate-100 dark:border-slate-700 py-2 text-slate-500 dark:text-slate-400">{{ today()}}</td>
                        <td class="border-slate-100 dark:border-slate-700 py-2 text-slate-500 dark:text-slate-400">23</td>
                        <td class="border-slate-100 dark:border-slate-700 py-2 text-slate-500 dark:text-slate-400">200 USD to XOF</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    <div class="flex-col border rounded-md shadow-md bg-white mb-4 p-4">
        <div class="border-b pb-2"><span class="font-bold text-2xl text-slate-800">{{ __('Keep the Control') }}</span></div>
        <div class="py-1"><a href="">{{ __('Upgrade to Business Account') }}</a></div>
        <div class="py-1"><a href="">{{ __('Request full Offers report') }}</a></div>
        <div class="py-1"><a href="">{{ __('Offer policy') }}</a></div>
        <div class="py-1"><a href="">{{ __('Delete closed offers history') }}</a></div>
    </div>
</div>