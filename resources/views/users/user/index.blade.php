<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
                {{ __('User Management') }}
            </h2>
        </div>
    </x-slot>

    <x-users.navigation />

</x-app-layout>
