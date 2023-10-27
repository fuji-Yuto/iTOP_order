<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto flex items-center mt-4">
                <a href="{{ route('order.create') }}">
                    <x-primary-button>
                        {{ __(' 注文する') }}
                    </x-primary-button>
                </a>    
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto flex items-center mt-4">
                <a href="{{ route('search.input') }}">
                    <x-primary-button>
                        {{ __('注文確認') }}
                    </x-primary-button>
                </a>    
            </div>
        </div>
</x-app>