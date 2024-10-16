<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Engec | @yield('title')</title>

    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>
<div>
<nav class="bg-transparent border-gray-200">
    <div class=" flex flex-wrap items-center justify-between mx-auto px-6 py-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/engeclogo.png') }}" class="h-8" alt="Engec group Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap text-black">ENGEC GROUP</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class=" flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50
            md:flex-row md:space-x-4 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white font-semibold">
                <li>
                    <a href="/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100
                    md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-sm">HOME</a>
                </li>
                <li>
                    <a href="/about" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100
                    md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-sm">ABOUT</a>
                </li>
                <li>
                    <a href="/services" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100
                    md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-sm">SERVICES</a>
                </li>
                <li>
                    <a href="{{ route('projects') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100
                    md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-sm">OUR WORKS</a>
                </li>
                <li>
                    <a href="/contact" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100
                    md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-sm">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class=" mx-auto px-6">
    {{ $slot }}
</div>

<footer class="bg-transparent rounded-lg shadow m-4">
    <div class="w-full mx-auto  p-6 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center">© 2024
          <a href="/" class="hover:underline">ENGEC GROUP™</a>
          . All Rights Reserved.
    </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">About</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</footer>



</div>
</html>
