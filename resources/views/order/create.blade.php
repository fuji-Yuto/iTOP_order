<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('Title') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800">
          @include('common.errors')
          <form class="mb-6" action="{{ route('order.confirm') }}" method="POST">
            @csrf
            <!-- 商品タイプの選択部分 -->
            <div class="mb-6">
              <div class="flex flex-col mb-4">
                <x-input-label for="name" :value="__('お客様のお名前')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>
              <div class="flex mb-4">
                <x-input-label for="taste1" :value="__('味1')" />
                <select id="taste1" name="taste1">
                  @for ( $i= 0; $i <= 2; $i++)
                    <option value="{{ $i }}" {{ $i == 0 ? 'selected' : '' }}>{{ $i }}個</option>
                  @endfor
                </select>
              </div>
              <div class="flex mb-4">
                <x-input-label for="taste2" :value="__('味2')" />
                <select id="taste2" name="taste2">
                  @for ( $j= 0; $j <= 2; $j++)
                    <option value="{{ $j }}" {{ $j == 0 ? 'selected' : '' }}>{{ $j }}個</option>
                  @endfor
                </select>
              </div>
              <div class="flex mb-4">
                <x-input-label for="taste3" :value="__('味3')" />
                <select id="taste3" name="taste3">
                  @for ( $k= 0; $k <= 2; $k++)
                    <option value="{{ $k }}" {{ $k == 0 ? 'selected' : '' }}>{{ $k }}個</option>
                  @endfor
                </select>
              </div>
              <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">
                  {{ __('注文する') }}
                </x-primary-button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>  

</x-app-layout>
