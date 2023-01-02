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
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                    wire:model.defer="name" autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="mb-3">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
            </div>
        </form>
    </section>
</x-app.app-card>
