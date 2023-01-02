<div>
    <!-- main content header -->
    <div class="sm:flex justify-between mb-6">
        <div>
            <h1 class="text-3xl text-slate-900 tracking-tight dark:text-slate-200">
                {{ $leftHeader }}
            </h1>
        </div>
        <div class="mt-3 md:mt-0">
            {{ $rightHeader }}
        </div>
    </div>
    <!-- end of main content header -->

    {{ $slot }}

</div>
