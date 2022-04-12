<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>
                        Heel veel info over rent a car.
                    </p>
                    <p>
                        Telefoon: 06 87651234
                    </p>
                    <img src="{{ asset('img/ferarri.png') }}" alt="car" width="20%" height="20%" >
                    <img src="{{ asset('img/bentley.png') }}" alt="car" width="20%" height="20%">
                    <img src="{{ asset('img/maclaren.png') }}" alt="car" width="20%" height="20%">
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
