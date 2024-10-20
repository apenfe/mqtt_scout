<x-app-layout meta-title="Dispositivos" meta-description="Listado de familias disponibles">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create a new device') }}
        </h2>
    </x-slot>

    <div class="py-4">

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form method="post" action="{{ route('devices.store') }}" class="mt-0 space-y-4">

                    <h3>Datos generales</h3>

                        <div>
                            <x-input-label for="deviceID" :value="__('Device ID')" />
                            <x-text-input id="deviceID" name="deviceID" type="text" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('deviceID')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="apikey" :value="__('API Key')" />
                            <x-text-input id="apikey" name="apikey" type="text" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('apikey')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="image" :value="__('Imagen')" />
                            <x-text-input id="image" name="image" type="file" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Descripción')" />
                            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="family_id" :value="__('Familia')" />
                            <select name="family_id" id="family_id">
                                @foreach($families as $family)
                                    <option value="{{ $family->id }}">{{ $family->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('family_id')" class="mt-2" />
                        </div>

                    <h3>Suscripciones</h3>

                    <div class="flex flex-row">
                        <x-input-label for="attrs" :value="__('Attrs')" />
                        <input type="hidden" name="attrs" value="0">
                        <input type="checkbox" id="attrs" name="attrs" value="1">
                        <x-input-error :messages="$errors->get('attrs')" class="mt-2" />

                        <x-input-label for="cmd" :value="__('Cmd')" />
                        <input type="hidden" name="cmd" value="0">
                        <input type="checkbox" id="cmd" name="cmd" value="1">
                        <x-input-error :messages="$errors->get('cmd')" class="mt-2" />

                        <x-input-label for="cmdexe" :value="__('Cmdexe')" />
                        <input type="hidden" name="cmdexe" value="0">
                        <input type="checkbox" id="cmdexe" name="cmdexe" value="1">
                        <x-input-error :messages="$errors->get('cmdexe')" class="mt-2" />
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
