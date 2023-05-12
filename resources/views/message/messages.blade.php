<x-app-layout>
    {{ Breadcrumbs::render('messages') }}
    <div class="flex h-full h-vh-85">
        <div class="w-1/4 h-full">
            @include('message.message-list')
        </div>
        <div class="w-3/4">
            <iframe src="{{ route('message') }}" frameborder="0" class="w-full h-full max-h-full"></iframe>
        </div>
    </div>
</x-app-layout>