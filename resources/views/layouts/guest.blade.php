<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-['Work_Sans'] text-black antialiased bg-white selection:bg-black selection:text-white">
        <div class="min-h-screen flex flex-col mt-4 sm:justify-center items-center pt-6 sm:pt-0 bg-white">
            <div>
                <a href="/">
                    <x-application-logo />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-10 px-8 py-10 bg-white border-[5px] border-black rounded-none">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>