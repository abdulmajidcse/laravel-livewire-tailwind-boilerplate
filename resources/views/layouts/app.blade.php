<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="awesome-scrollbar scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- vite init --}}
    @vite(['resources/css/app.css'])

    <link rel="stylesheet" href="{{ asset('dist/css/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/fontawesome/css/all.min.css') }}" />

    <script defer src="{{ asset('dist/js/alpinejs.min.js') }}"></script>

    @livewireStyles

    @stack('styles')
</head>

<body x-data>
    <x-loading id="pre_loader" />

    <div class="dark:bg-slate-800 dark:highlight-white/5 dark:text-slate-400 min-h-screen">
        <x-app.header />

        <div class="max-w-8xl mx-auto px-4 sm:px-6 md:px-8 bg-slate-50 dark:bg-inherit">
            <x-app.sidebar />

            <div class="transition-all duration-300" :class="{ 'lg:pl-[17rem]': $store.sidebar.openIs }">
                <main class="pt-5 min-h-[calc(100vh-13rem)]">
                    {{ $slot }}
                </main>

                <x-app.footer />
            </div>
        </div>
    </div>

    {{-- scripts --}}
    <script src="{{ asset('dist/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('dist/js/toastr.min.js') }}"></script>
    <script src="{{ asset('dist/js/flowbite.js') }}"></script>
    <script src="{{ asset('/dist/js/sidebar.js') }}"></script>

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
