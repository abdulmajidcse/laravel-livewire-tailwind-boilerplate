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
    <x-loading id="pre_loader" />

    <!-- theme section -->
    <div class="fixed top-4 right-4 md:top-10 md:right-10 z-20">
        <x-theme />
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
    <script src="{{ asset('dist/js/flowbite.js') }}"></script>

    @livewireScripts

    <x-toastr-livewire-config />

    <script>
        window.addEventListener("load", function() {
            document.querySelector('#pre_loader').classList.add('hidden');
        });
    </script>

    @stack('scripts')
</body>

</html>
