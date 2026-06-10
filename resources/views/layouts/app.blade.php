<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel Admin') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-['Work_Sans'] text-black antialiased bg-white selection:bg-black selection:text-white">
        <div class="min-h-screen bg-white flex flex-col">
            @include('layouts.navigation')

            @if (isset($header))
                <header class="bg-white border-b-[5px] border-black py-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="font-['Archivo_Black'] text-3xl md:text-4xl uppercase tracking-tight text-black">
                            {{ $header }}
                        </div>
                    </div>
                </header>
            @endif

            <main class="py-12 bg-white flex-grow">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>