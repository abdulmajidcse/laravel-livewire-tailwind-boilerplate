<x-app.app-card leftHeader="Create Category">
    <div wire:loading>
        <x-loading />
    </div>

    <x-slot name="rightHeader">
        <a href="{{ route('auth.categories.index') }}" class="btn bg-blue-700 dark:bg-blue-600">Category List</a>
    </x-slot>

    <section class="bg-white dark:bg-white/5 rounded shadow-lg p-3 mb-5">
        <form wire:submit.prevent="store">

            <div class="mb-3">
                <x-input-label for="parent_id" :value="__('Category ')" />
                <x-select-input id="parent_id" class="mt-1 block w-full" wire:model.defer="parent_id">
                    <option value="">Select a Category</option>
                    @foreach ($topCategories as $topCategory)
                        <option value="{{ $topCategory->id }}">{{ $topCategory->name }}</option>
                    @endforeach
                </x-select-input>

                <x-input-error class="mt-2" :messages="$errors->get('parent_id')" />
            </div>

            <div class="mb-3">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name"
                    autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="mb-3">
                <x-input-label for="slug" value="Slug (Whitespace auto replace with '-')" />
                <x-text-input id="slug" type="text" class="mt-1 block w-full" wire:model.defer="slug"
                    autocomplete="slug" />
                <x-input-error class="mt-2" :messages="$errors->get('slug')" />
            </div>

            <div class="mb-3">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
            </div>
        </form>
    </section>
</x-app.app-card>
