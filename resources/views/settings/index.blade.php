<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead>
                            <tr>
                                <th width="150px">
                                    {{ __('Name') }}
                                </th>
                                <th width="150px">
                                    {{ __('Email') }}
                                </th>
                                <th width="150px">
                                    {{ __('First letters') }}
                                </th>
                                <th width="150px">
                                    {{ __('Prefixes') }}
                                </th>
                                <th width="150px">
                                    {{ __('Last name') }}
                                </th>
                                <th width="150px">
                                    {{ __('Address') }}
                                </th>
                                <th width="150px">
                                    {{ __('Zip code') }}
                                </th>
                                <th width="150px">
                                    {{ __('City') }}
                                </th>
                                <th colspan="2" width="150px">
                                    {{ __('Actions') }}
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                {{ $user->first_letters }}
                            </td>
                            <td>
                                {{ $user->prefixes }}
                            </td>
                            <td>
                                {{ $user->last_name }}
                            </td>
                            <td>
                                {{ $user->address }}
                            </td>
                            <td>
                                {{ $user->zip_code }}
                            </td>
                            <td>
                                {{ $user->city }}
                            </td>
                            <td>
                                <a href="{{ route('settings.edit', Auth::user()->id) }}">
                                    {{ __('Edit') }}
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('settings.destroy', Auth::user()->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
