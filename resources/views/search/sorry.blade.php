<x-app-layout>
    申し訳ございません。その注文は受理されていないようです。
    今一度、入力内容をご確認ください。

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mx-auto flex items-center mt-4">
            <a href="{{ route('search.input') }}">
                <x-primary-button>
                    {{ __('再入力する') }}
                </x-primary-button>
            </a>    
        </div>
    </div>
</x-app-layout>