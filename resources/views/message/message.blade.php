<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/css/my.css', 'resources/js/app.js'])
</head>
<body>
    <div class="w-full min-h-screen">
        <div id="header" class="flex h-vh-10 p-4 items-center bg-white border-b shadow">
            <span class="text-3xl font-semibold">Koffi Anan</span>
        </div>
        <div id="message-box" class="h-vh-80 self-stretch py-2 px-4 bg-slate-50 scroll-auto">
            <div class="flex justify-start">
                <div class="flex border rounded-b-lg w-fit rounded-tr-lg p-2 bg-white text-slate-800 shadow-sm">
                    <span class="flex">Lorem Ipsum blablablablablablablablablablablablablablablablablabla</span>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="flex border rounded-b-lg w-fit rounded-tl-lg p-2 mt-2 bg-gray-700 text-slate-50 shadow-sm">
                    <span class="flex">Lorem Ipsum blablablablablablablablablablablablablablablablablabla</span>
                </div>
            </div>
        </div>
        <div id="text-zone" class="h-vh-10 p-4 flex self-end gap-4 w-full items-center border-t shadow bg-white">
            <div class="w-11/12">
                <x-text-input class="block mt-1 w-full" type="text" name="" id="" />
            </div>
            <div class="w-1/12">
                <x-primary-button class="w-full justify-center">SEND</x-primary-button>
            </div>
        </div>
    </div>
</body>
</html>
