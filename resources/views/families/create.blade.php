<x-app-layout meta-title="Familias" meta-description="Listado de familias disponibles">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create a new family') }}
        </h2>
    </x-slot>

    <div class="py-4">

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form method="post" action="{{ route('families.store') }}" class="mt-0 space-y-4">

                    <div>
                        <x-input-label for="name" :value="__('Nombre')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="description" :value="__('Descripción')" />
                        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="image" :value="__('Imagen')" />
                        <x-text-input id="image" name="image" type="file" class="mt-1 block w-full" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>

                    @csrf
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
