<x-app-layout>
    <!-- main content header -->
    <div class="md:flex md:justify-between mb-6">
        <div>
            <h1 class="text-3xl sm:text-4xl text-slate-900 tracking-tight dark:text-slate-200">
                {{ __('Profile') }}
            </h1>
        </div>
        <div class="mt-3 md:mt-0">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <i class="fas fa-home"></i>
                            <span class="ml-2">Home</span>
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fa-solid fa-angle-right text-slate-400"></i>
                            <span
                                class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ __('Profile') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- end of main content header -->

    <section class="bg-white dark:bg-white/5 rounded shadow-lg p-3 mb-5">
        @livewire('auth.update-profile', ['user' => $user])
    </section>

    <section class="bg-white dark:bg-white/5 rounded shadow-lg p-3 mb-5">
        @livewire('auth.update-password')
    </section>

    <section class="bg-white dark:bg-white/5 rounded shadow-lg p-3 mb-5">
        @livewire('auth.delete-user-account')
    </section>

</x-app-layout>
