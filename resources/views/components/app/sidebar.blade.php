<!-- mobile menu display blur wrapper in sidebar -->
<div class="min-h-screen w-full fixed top-0 left-0 z-20 lg:hidden bg-black/20 backdrop-blur-sm dark:bg-slate-900/80"
    :class="!$store.sidebar.openIs && 'hidden'" x-on:click="$store.sidebar.openIs = false"></div>

<div class="fixed z-20 inset-0 top-[3.8125rem] right-auto w-[17rem] pb-10 px-4 overflow-y-auto bg-white dark:bg-inherit border-r border-slate-900/10 dark:border-slate-300/10 shadow-2xl transition-all duration-300 scrollbar-thin scrollbar-thumb-blue-500 scrollbar-track-slate-400"
    :class="$store.sidebar.openIs ? 'lg:left-0' : '-left-[20rem]'">
    <aside class="lg:text-sm lg:leading-6 relative mt-8 ta-sidebar">
        <ul class="text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 text-base">
            <li class="mb-1">
                <a href="{{ route('auth.dashboard') }}"
                    class="top-link flex items-center lg:leading-6 text-base rounded p-2 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 hover:bg-gray-300 dark:hover:bg-slate-300/10 {{ request()->routeIs('auth.dashboard') ? 'active' : '' }}">
                    <div class="mr-2 shadow-sm dark:highlight-white/10">
                        <i class="fa-solid fa-grip text-lg"></i>
                    </div>
                    Dashboard
                </a>
            </li>
            <li x-data="{ open: false }" class="mb-1">
                <a href="#"
                    class="sub-link flex items-center lg:leading-6 text-base relative rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600"
                    :class="{ 'active': open }" x-on:click="open = !open">
                    <div class="mr-2 shadow-sm dark:highlight-white/10">
                        <i class="fa-solid fa-file-lines text-lg"></i>
                    </div>
                    Pages
                    <i class="fas fa-angle-left absolute right-2" :class="{ '-rotate-90': open }"></i>
                </a>
                <!-- dropdown menu -->
                <ul class="my-1" x-show="open">
                    <li>
                        <a href="#"
                            class="sub-link block mb-1 rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600">
                            <i class="far fa-circle mr-2"></i> Blank
                        </a>
                    </li>

                    <li x-data="{ open: false }">
                        <a href="#"
                            class="sub-link block rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 relative"
                            x-on:click="open = !open" :class="{ 'active': open }">
                            <i class="far fa-circle mr-2"></i> Auth
                            <i class="fas fa-angle-left absolute right-2 mt-1" :class="{ '-rotate-90': open }"></i>
                        </a>
                        <!-- sub dropdown menu -->
                        <ul class="my-1" x-show="open">
                            <li>
                                <a href="#"
                                    class="sub-link block mb-1 rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600">
                                    <i class="far fa-dot-circle mr-2"></i> Register
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="sub-link block rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600">
                                    <i class="far fa-dot-circle mr-2"></i> Log In
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"
                            class="sub-link block rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600">
                            <i class="far fa-circle mr-2"></i> 404 Error
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="sub-link block rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600">
                            <i class="far fa-circle mr-2"></i> 500 Error
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mb-1">
                <a href="#"
                    class="top-link flex items-center lg:leading-6 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 text-base rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 relative">
                    <div class="mr-2 shadow-sm dark:highlight-white/10">
                        <i class="fa-solid fa-pen-to-square text-lg"></i>
                    </div>
                    Forms
                    <span
                        class="bg-red-600 dark:bg-red-800 text-white/80 dark:text-white/50 text-sm font-semibold px-2 py-0.5 rounded absolute right-2">New</span>
                </a>
            </li>

            <li class="mb-1">
                <a href="#"
                    class="top-link flex items-center lg:leading-6 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 text-base rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 relative">
                    <div class="mr-2 shadow-sm dark:highlight-white/10">
                        <i class="fa-solid fa-table-list text-lg"></i>
                    </div>
                    Tables
                </a>
            </li>

            <li class="mb-1">
                <span class="block my-1 text-sm p-2 pl-0 font-semibold uppercase">Components</span>
            </li>

            <li class="mb-1">
                <a href="#"
                    class="top-link flex items-center lg:leading-6 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 text-base rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 relative">
                    <div class="mr-2 shadow-sm dark:highlight-white/10">
                        <i class="fa-solid fa-triangle-exclamation text-lg"></i>
                    </div>
                    Alerts
                </a>
            </li>

            <li class="mb-1">
                <a href="#"
                    class="top-link flex items-center lg:leading-6 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 text-base rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 relative">
                    <div class="mr-2 shadow-sm dark:highlight-white/10">
                        <i class="fa-solid fa-toggle-off text-lg"></i>
                    </div>
                    Buttons
                </a>
            </li>

            <li class="mb-1">
                <a href="#"
                    class="top-link flex items-center lg:leading-6 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 text-base rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 relative">
                    <div class="mr-2 shadow-sm dark:highlight-white/10">
                        <i class="fa-solid fa-bars-staggered text-lg"></i>
                    </div>
                    Cards
                </a>
            </li>

            <li class="mb-1">
                <a href="#"
                    class="top-link flex items-center lg:leading-6 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300 text-base rounded p-2 hover:bg-gray-300 dark:hover:bg-slate-300/10 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600 relative">
                    <div class="mr-2 shadow-sm dark:highlight-white/10">
                        <i class="fa-solid fa-cube text-lg"></i>
                    </div>
                    Modals
                </a>
            </li>
        </ul>
    </aside>
</div>
