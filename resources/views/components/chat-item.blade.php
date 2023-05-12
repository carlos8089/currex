<div {{ $attributes->merge(['class'=>'flex justify-between items-center px-6 py-2 w-full border-b']) }} role="button">
    <span class="font-semibold">{{$name}}</span>
    <span class="border rounded-full bg-slate-800 text-white w-9 h-9 flex justify-center items-center md:text-center">{{$notifs}}</span>
</div>