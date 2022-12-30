<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="scrollbar-thin scrollbar-thumb-blue-500 scrollbar-track-slate-400">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- vite init --}}
    @vite(['resources/css/app.css'])

    <link rel="stylesheet" href="{{ asset('dist/css/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/fontawesome/css/all.min.css') }}" />

    @livewireStyles

    @stack('styles')
</head>

<body>
    <!-- theme section -->
    <div class="fixed top-4 right-4 md:top-10 md:right-10 z-20">
        <button id="dark_theme" onclick="setTheme('dark')" data-tooltip-target="dark-theme-tooltip" type="button"
            class="inline-flex items-center p-2 text-base text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Dark theme</span>
            <i class="fa-solid fa-moon text-gray-500 dark:text-gray-400"></i>
        </button>
        <div id="dark-theme-tooltip" role="tooltip"
            class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
            Switch to dark theme
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <button id="light_theme" onclick="setTheme('light')" data-tooltip-target="light-theme-tooltip" type="button"
            class="inline-flex items-center p-2 text-base text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Light theme</span>
            <i class="fa-solid fa-sun text-gray-500 dark:text-gray-400"></i>
        </button>
        <div id="light-theme-tooltip" role="tooltip"
            class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
            Switch to light theme
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>

    <!-- use py-5 when form will over h-screen -->
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100 dark:bg-gray-900 py-2 md:py-5">
        <div>
            <a href="{{ url('/') }}" class="flex items-center">
                <i class="fa-solid fa-layer-group text-4xl mr-2 text-blue-800" title="Logo"></i>
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name') }}</span>
            </a>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

    {{-- scripts --}}
    <script src="{{ asset('dist/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('dist/js/toastr.min.js') }}"></script>
    <script src="{{ asset('dist/js/theme.js') }}"></script>
    <script src="{{ asset('dist/js/flowbite.js') }}"></script>

    @livewireScripts

    <x-toastr-livewire-config />

    @stack('scripts')
</body>

</html>
