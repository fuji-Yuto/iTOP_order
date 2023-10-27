<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
      {{ __('注文管理表') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
          <table class="text-center w-full border-collapse">
            <tbody>
              <tr>
                <th class="border-2 p-3">注文番号</th>
                <th class="border-2 p-3">注文者名</th>
                <th class="border-2 p-3">注文内容</th>
                <th class="border-2 p-3">金額</th>
                <th class="border-2 p-3">調理状況</th>
                <th class="border-2 p-3">受取状況</th>
              </tr>
              @foreach ($orders as $order)
              <tr class="border hover:bg-gray-lighter">
                <td class="border p-2">{{$order->id}}</td>
                <td class="border p-2">{{$order->name}}</td>
                <td class="border p-2">
                  @if($order->taste1!=0)
                  味１:{{$order->taste1}}食
                  </br>
                  @endif
                  @if($order->taste2!=0)
                  味２:{{$order->taste2}}食
                  </br>
                  @endif
                  @if($order->taste3!=0)
                  味３:{{$order->taste3}}食
                  </br>
                  @endif
                </td>
                <td class="border p-2">{{($order->taste1 + $order->taste2 + $order->taste3)*200 }}</td>
                <td class="border p-2">
                @if ($order->recive_flag == 0)
                  未完成
                @elseif ($order->recive_flag == 1)
                  調理済
                @endif
                </td>
                <td class="border p-2">
                @if ($order->recive_flag == 0)
                  未受取
                @elseif ($order->recive_flag == 1)
                  受取済
                @endif
                </td>
                
              </tr>
                  <div class="flex">
                    <!-- 更新ボタン -->
                    <!-- 削除ボタン -->
                  </div>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>