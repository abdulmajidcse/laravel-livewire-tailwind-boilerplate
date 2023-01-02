<x-app-layout>
    <x-app.app-card leftHeader="{{ __('Dashboard') }}">
        <x-slot name="rightHeader">
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
                                class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ __('Dashboard') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </x-slot>

        <section class="mb-5">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 xl:w-3/12">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white dark:bg-white/5 rounded mb-6 xl:mb-0 shadow-lg mr-0 lg:mr-4">
                        <div class="flex-auto p-3">
                            <div class="flex flex-wrap">
                                <div class="text-white px-6 py-5 shadow-lg rounded bg-blue-500">
                                    <i class="fas fa-users text-lg"></i>
                                </div>

                                <div class="ml-2">
                                    <h5 class="mb-3 font-semibold">New Users</h5>
                                    <p class="font-bold">450</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 xl:w-3/12">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white dark:bg-white/5 rounded mb-6 xl:mb-0 shadow-lg mr-0 xl:mr-4">
                        <div class="flex-auto p-3">
                            <div class="flex flex-wrap">
                                <div class="text-white px-6 py-5 shadow-lg rounded bg-yellow-500">
                                    <i class="fa-solid fa-cart-shopping text-lg"></i>
                                </div>

                                <div class="ml-2">
                                    <h5 class="mb-3 font-semibold">Total Products</h5>
                                    <p class="font-bold">5045</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 xl:w-3/12">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white dark:bg-white/5 rounded mb-6 xl:mb-0 shadow-lg mr-0 lg:mr-4">
                        <div class="flex-auto p-3">
                            <div class="flex flex-wrap">
                                <div class="text-white px-6 py-5 shadow-lg rounded bg-red-500">
                                    <i class="fa-solid fa-bag-shopping text-lg"></i>
                                </div>

                                <div class="ml-2">
                                    <h5 class="mb-3 font-semibold">New Orders</h5>
                                    <p class="font-bold">370</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 xl:w-3/12">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white dark:bg-white/5 rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-3">
                            <div class="flex flex-wrap">
                                <div class="text-white px-6 py-5 shadow-lg rounded bg-green-500">
                                    <i class="fa-solid fa-truck-fast text-lg"></i>
                                </div>

                                <div class="ml-2">
                                    <h5 class="mb-3 font-semibold">Sales</h5>
                                    <p class="font-bold">1040</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5 flex flex-wrap">
            <div class="overflow-hidden w-full lg:w-8/12 mb-5 lg:mb-0">
                <div class="bg-white dark:bg-white/5 text-slate-800 dark:text-slate-100 shadow rounded-lg mr-0 lg:mr-3">
                    <div class="py-3 px-5 bg-gray-100 dark:bg-gray-400/10">
                        Sales Report
                    </div>
                    <canvas class="p-10" id="chartLine"></canvas>
                </div>
            </div>

            <div
                class="bg-white dark:bg-white/5 text-slate-800 dark:text-slate-100 shadow rounded-lg overflow-hidden w-full lg:w-4/12">
                <div class="py-3 px-5 bg-gray-100 dark:bg-gray-400/10">
                    Order Report
                </div>
                <canvas class="p-10" id="chartDoughnut"></canvas>
            </div>
        </section>

        <section class="bg-white dark:bg-white/5 rounded shadow-lg p-3 mb-5">
            <h2 data-docsearch-ignore="true"
                class="text-slate-900 text-xl tracking-tight font-semibold mb-3 dark:text-slate-200">
                Product List
            </h2>

            <input type="text" name="name" placeholder="Search here..." class="w-full mb-6 dark:bg-gray-900" />

            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">Product name</th>
                            <th scope="col" class="py-3 px-6">Color</th>
                            <th scope="col" class="py-3 px-6">Category</th>
                            <th scope="col" class="py-3 px-6">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="py-4 px-6">Sliver</td>
                            <td class="py-4 px-6">Laptop</td>
                            <td class="py-4 px-6">$2999</td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="py-4 px-6">White</td>
                            <td class="py-4 px-6">Laptop PC</td>
                            <td class="py-4 px-6">$1999</td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="py-4 px-6">Black</td>
                            <td class="py-4 px-6">Accessories</td>
                            <td class="py-4 px-6">$99</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <nav class="mt-5 mb-3 flex justify-end" aria-label="pagination">
                <ul class="inline-flex -space-x-px">
                    <li>
                        <a href="#"
                            class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                    </li>
                </ul>
            </nav>
        </section>
    </x-app.app-card>

    @push('scripts')
        {{-- chartjs --}}
        <script src="{{ asset('dist/chartjs/chart.min.js') }}"></script>
        <script src="{{ asset('dist/chartjs/dashboard-chart.js') }}"></script>
    @endpush
</x-app-layout>
