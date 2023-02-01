<header
    class="p-4 text-base border-b border-slate-900/10 dark:border-slate-300/10 sticky top-0 z-40 w-full flex-none bg-white dark:bg-slate-800">
    <!-- navbar -->
    <nav class="flex justify-between mx-1">
        <!-- brand -->
        <a href="{{ route('auth.dashboard') }}" class="flex items-center">
            <!-- an example to use logo -->
            <!-- <img
              src="https://flowbite.com/docs/images/logo.svg"
              class="mr-2 h-7"
              alt="Logo"
              title="Logo"
            /> -->
            <i class="fa-solid fa-layer-group text-2xl mr-2 text-blue-800" title="Logo"></i>
            <span
                class="self-center text-lg font-semibold whitespace-nowrap dark:text-white hidden sm:inline-block">Tailwind
                Admin</span>
        </a>

        <!-- menu wrapper for mobile menu -->
        <div x-data="{ mobileMenuOpen: false }" class="flex justify-between lg:w-[calc(100%-15rem)]">
            <ul class="flex">
                <li>
                    <button title="Sidebar Menu" type="button"
                        class="inline-flex items-center p-2 text-base text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        data-tooltip-target="sidebar-menu-tooltip" x-on:click="$store.sidebar.toggle()">
                        <span class="sr-only">Sidebar menu</span>
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div id="sidebar-menu-tooltip" role="tooltip"
                        class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                        Sidebar menu
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </li>

                <li>
                    <a href="{{ route('home') }}" data-tooltip-target="visit-site-tooltip"
                        class="inline-flex items-center p-2 text-base text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Visit site</span>
                        <i class="fa-solid fa-home"></i>
                    </a>
                    <div id="visit-site-tooltip" role="tooltip"
                        class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                        Visit site
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </li>

                <li>
                    <button type="button"
                        class="inline-flex items-center p-2 text-base text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        data-tooltip-target="search-tooltip" data-modal-toggle="search-modal">
                        <span class="sr-only">Search</span>
                        <i class="fa-solid fa-search"></i>
                    </button>
                    <div id="search-tooltip" role="tooltip"
                        class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                        Search here
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </li>

                <li>
                    <x-theme />
                </li>

                <!-- mobile menu toggle button -->
                <li class="lg:hidden">
                    <button type="button"
                        class="inline-flex items-center p-2 text-base text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        x-on:click="mobileMenuOpen = !mobileMenuOpen">
                        <span class="sr-only">Topbar menu</span>
                        <i class="fa-solid fa-circle-chevron-down"></i>
                    </button>
                </li>
            </ul>

            <!-- mobile menu display blur wrapper -->
            <div class="min-h-screen w-full fixed top-0 left-0 z-20 lg:hidden bg-black/20 backdrop-blur-sm dark:bg-slate-900/80"
                :class="{ 'hidden': !mobileMenuOpen }" x-on:click="mobileMenuOpen = false"></div>

            <!-- main header menu -->
            <ul class="lg:flex"
                :class="{
                    'hidden': !
                        mobileMenuOpen,
                    'fixed lg:relative top-4 lg:top-0 right-4 lg:right-0 z-50 bg-white lg:bg-inherit p-6 lg:p-0 shadow-lg lg:shadow-none rounded-lg lg:rounded-none dark:bg-slate-800 dark:highlight-white/5 dark:text-slate-400': mobileMenuOpen
                }">
                <li>
                    <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        type="button">
                        <i class="fa-solid fa-bell text-base"></i>
                        <div class="flex relative">
                            <div
                                class="inline-flex relative -top-2 right-2 w-3 h-3 bg-red-500 rounded-full border-2 border-white dark:border-gray-900">
                            </div>
                        </div>
                        Notifications
                        <i class="fa-solid fa-chevron-down text-xs ml-1"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNotification"
                        class="hidden z-20 w-full max-w-sm bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-800 dark:divide-gray-700 max-h-[calc(100vh-100%)] overflow-y-auto scrollbar-thin scrollbar-thumb-blue-500 scrollbar-track-slate-400"
                        aria-labelledby="dropdownNotificationButton">
                        <div
                            class="block py-2 px-4 font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-800 dark:text-white">
                            Notifications
                        </div>
                        <div class="divide-y divide-gray-100 dark:divide-gray-700">
                            <a href="#" class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="flex-shrink-0">
                                    <img class="w-11 h-11 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-1.jpg"
                                        alt="Jese image" />
                                    <div
                                        class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-blue-600 rounded-full border border-white dark:border-gray-800">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                            </path>
                                            <path
                                                d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="pl-3 w-full">
                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                        New message from
                                        <span class="font-semibold text-gray-900 dark:text-white">Jese
                                            Leos</span>: "Hey, what's up? All set for the presentation?"
                                    </div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">
                                        a few moments ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="flex-shrink-0">
                                    <img class="w-11 h-11 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                        alt="Joseph image" />
                                    <div
                                        class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-gray-900 rounded-full border border-white dark:border-gray-800">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="pl-3 w-full">
                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                        <span class="font-semibold text-gray-900 dark:text-white">Joseph
                                            Mcfall</span>
                                        and
                                        <span class="font-medium text-gray-900 dark:text-white">5 others</span>
                                        started following you.
                                    </div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">
                                        10 minutes ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="flex-shrink-0">
                                    <img class="w-11 h-11 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                        alt="Bonnie image" />
                                    <div
                                        class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-red-600 rounded-full border border-white dark:border-gray-800">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="pl-3 w-full">
                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                        <span class="font-semibold text-gray-900 dark:text-white">Bonnie
                                            Green</span>
                                        and
                                        <span class="font-medium text-gray-900 dark:text-white">141
                                            others</span>
                                        love your story. See it and view more stories.
                                    </div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">
                                        44 minutes ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="flex-shrink-0">
                                    <img class="w-11 h-11 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                        alt="Leslie image" />
                                    <div
                                        class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-green-400 rounded-full border border-white dark:border-gray-800">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="pl-3 w-full">
                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                        <span class="font-semibold text-gray-900 dark:text-white">Leslie
                                            Livingston</span>
                                        mentioned you in a comment:
                                        <span class="font-medium text-blue-500" href="#">@bonnie.green</span>
                                        what do you say?
                                    </div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">
                                        1 hour ago
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="flex-shrink-0">
                                    <img class="w-11 h-11 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                        alt="Robert image" />
                                    <div
                                        class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-purple-500 rounded-full border border-white dark:border-gray-800">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="pl-3 w-full">
                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                        <span class="font-semibold text-gray-900 dark:text-white">Robert
                                            Brown</span>
                                        posted a new video: Glassmorphism - learn how to
                                        implement the new design trend.
                                    </div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">
                                        3 hours ago
                                    </div>
                                </div>
                            </a>
                        </div>
                        <a href="#"
                            class="block py-2 text-sm font-medium text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                            <div class="inline-flex items-center">
                                <svg class="mr-2 w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                View all
                            </div>
                        </a>
                    </div>
                </li>

                <li>
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        type="button">
                        <span class="sr-only">Open user menu</span>
                        <!-- <img
                                class="mr-2 w-8 h-8 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                alt="user photo"
                            /> -->
                        <i class="fa-solid fa-user-circle text-base mr-2"></i>
                        {{ auth()->user()->name }}
                        <i class="fa-solid fa-chevron-down text-xs ml-1"></i>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatarName"
                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                        <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
                            <div class="font-medium">{{ Str::title(auth()->user()->roles[0]->name) }}</div>
                            <div class="truncate">{{ auth()->user()->email }}</div>
                        </div>
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                            <li>
                                <a href="{{ route('auth.profile.edit') }}"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i
                                        class="fas fa-user"></i><span class="ml-2">Profile</span></a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    <i class="fas fa-sign-out"></i><span class="ml-2">{{ __('Log Out') }}</span></a>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- search modal -->
<div id="search-modal" tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full backdrop-blur-sm">
    <div class="relative h-full min-w-full sm:min-w-[90vw] md:min-w-[70vw] lg:min-w-[50vw]">
        <div class="relative bg-white rounded shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-600 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white z-10"
                data-modal-toggle="search-modal">
                <i class="fas fa-close text-lg"></i>
                <span class="sr-only">Close modal</span>
            </button>

            <div class="relative bg-dark-700 pt-8 px-8 pb-16">
                <div class="relative w-full overflow-hidden transition-all duration-500 focus-within:border-gray-600">
                    <i class="fas fa-search absolute bottom-2 left-1 text-gray-500"></i>
                    <input type="text"
                        class="flex-1 w-full pl-8 pr-4 py-1 tracking-wide text-gray-700 dark:text-white placeholder-gray-700 dark:placeholder-white/50 bg-transparent focus:outline-none border-0 border-b-2 border-gray-300 dark:border-gray-600 dark:focus:border-blue-500 focus:ring-0 focus:border-blue-600"
                        placeholder="Search here" />
                </div>

                <!-- search modal open message -->
                <div class="mt-8 max-h-32 text-center">
                    <p>Enter a search term to find results.</p>
                </div>
            </div>
        </div>
    </div>
</div>
