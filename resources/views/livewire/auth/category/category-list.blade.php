<x-app.app-card leftHeader="Category List">

    <x-slot name="rightHeader">
        <a href="{{ route('auth.categories.create') }}" class="btn bg-blue-700 dark:bg-blue-600">Add New</a>
    </x-slot>

    @livewire('auth.category.category-data-table')

</x-app.app-card>
