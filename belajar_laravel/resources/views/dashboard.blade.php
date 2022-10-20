<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900">
                    <x-jet-button class="ml-4">
                    {{ __('CRUD') }}
                    </x-jet-button>
                    </a>
                @endif

                
            </div>
</x-app-layout>
