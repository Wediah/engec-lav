<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EngecGroup') }}</title>
        <link rel="icon" href="{{ asset('assets/engeclogo.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                        },
                        gridTemplateRows: {
                            'auto': 'auto',
                        },
                    },
                },
            }
        </script>
    </head>
    <body class="font-sans text-black antialiased">
    <div class="h-screen flex flex-row gap-6 sm:justify-center items-center p-6 bg-gray-100 overflow-hidden">
        <!-- Image Section -->
        <div class="relative flex-1 h-full hidden md:block">
            <img src="{{ asset('assets/learn.jpg') }}" class="h-full w-full rounded-xl object-cover" alt="Engec group Logo" />
            <div class="absolute inset-x-0 bottom-5 text-white p-4">
                <p class="text-6xl font-black">Building Dreams, <br> Designing Excellence.</p>
            </div>
        </div>

        <!-- Slot Section -->
        <div class="w-full sm:max-w-md flex flex-col h-full overflow-hidden">
            <!-- Logo at the top -->
            <a href="/" class="flex flex-row gap-2 items-center p-4">
                <img src="{{ asset('assets/engeclogo.png') }}" alt="Engec logo" class="h-8">
                <p class="font-bold text-lg">Engec Group</p>
            </a>

            <!-- Slot content in the middle -->
            <div class="flex-1 flex items-center justify-center p-4 w-full overflow-hidden">
                <div class="w-full">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
