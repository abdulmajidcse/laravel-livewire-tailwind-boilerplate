<x-app.app-card leftHeader="Category List">
    <div wire:loading>
        <x-loading />
    </div>

    <x-slot name="rightHeader">
        <a href="{{ route('auth.categories.create') }}" class="btn bg-blue-700 dark:bg-blue-600">Add New</a>
    </x-slot>

    <section class="bg-white dark:bg-white/5 rounded shadow-lg p-3 mb-5">
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">Sl</th>
                        <th scope="col" class="py-3 px-6">Name</th>
                        <th scope="col" class="py-3 px-6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = $categories->perPage() * ($categories->currentPage() - 1);
                    @endphp
                    @forelse ($categories as $category)
                        <tr>
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ ++$i }}</td>
                            <td class="py-4 px-6">{{ $category->name }}</td>
                            <td class="py-4 px-6">
                                <a href="{{ route('auth.categories.edit', $category->id) }}"
                                    class="btn bg-blue-700 dark:bg-blue-600">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100%" class="py-4 px-6 text-red-400 text-center">No data available!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $categories->links() }}
        </div>
    </section>
</x-app.app-card>
