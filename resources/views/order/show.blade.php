<x-app-layout>
    @php
     $count_taste1 = $order->taste1;
     $count_taste2 = $order->taste2;
     $count_taste3 = $order->taste3;
     $sum = ($count_taste1 + $count_taste2 + $count_taste3)*200;
    @endphp
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mx-auto my-3 w-3/5 bg-gray-100">
                    <p class="text-center pt-2">ご注文情報<p>
                    <table class="mx-auto mb-4">
                        <tr class="p-10">
                            <td class="pt-3 pl-3 pr-40 border-b-2 ">注文番号</td>
                            <td class="pt-3 px-4 border-b-2"><p class="text-xl">{{$order->id}}</p></td>
                            <td class="pt-3 border-b-2">　</td>
                        </tr>    
                        <tr class="p-10">
                            <td class="pt-4 pl-3 pr-40 border-b-2 ">お名前</td>
                            <td class="pt-4 px-4 border-b-2 text-xl">{{$order->name}}</td>
                            <td class="pt-4 border-b-2">様</td>
                        </tr>
                    </table>
                </div>
                <div class="mx-auto mb-10 w-3/5 bg-gray-100">
                    <p class="text-center pt-2">ご注文内容<p>
                    <table class="mx-auto mb-10">
                        @if ($count_taste1 != 0)
                        <tr class="p-10">
                            <td class="pt-4 pl-3 pr-40 border-b-2 ">味1</td>
                            <td class="pt-4 px-4 border-b-2 text-xl">{{$count_taste1}}</td>
                            <td class="pt-4 border-b-2">コ</td>
                        </tr>
                        @endif
                        @if ($count_taste2 != 0)
                        <tr class="p-10">
                            <td class="pt-4 pl-3 pr-40 border-b-2 ">味2</td>
                            <td class="pt-4 px-4 border-b-2 text-xl">{{$count_taste2}}</td>
                            <td class="pt-4 border-b-2">コ</td>
                        </tr>
                        @endif
                        @if ($count_taste3 != 0)
                        <tr class="p-10">
                            <td class="pt-4 pl-3 pr-40 border-b-2 ">味3</td>
                            <td class="pt-4 px-4 border-b-2 text-xl">{{$count_taste3}}</td>
                            <td class="pt-4 border-b-2">コ</td>
                        </tr>
                        @endif
                        <tr class="p-10">
                            <td class="pt-4 pl-3 pr-40 border-b-2 ">合計金額</td>
                            <td class="pt-4 px-4 border-b-2 text-xl">{{$sum}}</td>
                            <td class="pt-4 border-b-2">円</td>
                        </tr>
                    </table>
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('dashboard') }}" class="d-inline-block">
                        <button class="btn custom-btn">
                            {{ __('戻る') }}
                        </button>
                    </a>    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>