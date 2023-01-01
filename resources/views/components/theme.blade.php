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

@push('scripts')
    <script src="{{ asset('dist/js/theme.js') }}"></script>
@endpush
