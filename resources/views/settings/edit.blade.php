<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{ route('settings.update', $user->id) }}" class="flex flex-col">
                        @csrf
                        @method('PUT')

                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="{{ $user->name }}">

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ $user->email }}">

                        <label for="first_letters">First letters</label>
                        <input type="text" id="first_letters" name="first_letters" value="{{ $user->first_letters }}">

                        <label for="prefixes">Prefixes</label>
                        <input type="text" id="prefixes" name="prefixes" value="{{ $user->prefixes }}">

                        <label for="last_name">Last name</label>
                        <input type="text" id="last_name" name="last_name" value="{{ $user->last_name }}">

                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" value="{{ $user->address }}">

                        <label for="zip_code">Zip code</label>
                        <input type="text" id="zip_code" name="zip_code" value="{{ $user->zip_code }}">

                        <label for="city">City</label>
                        <input type="text" id="city" name="city" value="{{ $user->city }}">

                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
