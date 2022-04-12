<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rent ') }} {{ $car->brand }} {{ $car->model }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{ route('rentThis', $car->id) }}" class="flex flex-col">
                        @csrf

                        <input type="hidden" name="employee_id" value="1">
                        <input type="hidden" name="customer_id" value="{{ Auth::user()->id }}">

                        <label for="start">Start date</label>
                        <input type="date" id="start" name="start">

                        <label for="end">End date</label>
                        <input type="date" id="end" name="end">

                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
