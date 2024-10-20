<x-app-layout meta-title="Familias" meta-description="Listado de familias disponibles">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Families') }}
        </h2>
    </x-slot>

    @session('success')
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('success') }}
        </div>
    @endsession

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-bold">Create a new family</h2>
                    <p class="text-lg">Fill the form below to create a new family</p>
                    <a href="{{ route('families.create') }}" class="text-blue-500 hover:text-blue-700">Create</a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($families as $family)
                <div class="mt-3 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="text-2xl font-bold">{{ $family->name }}</h2>
                        <p class="text-lg">{{ $family->description }}</p>
                        <a href="{{ route('families.show', $family) }}" class="text-blue-500 hover:text-blue-700">View</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
