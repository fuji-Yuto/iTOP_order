<x-app-layout>
    @php
     $count_taste1 = $Orderdata['taste1'];
     $count_taste2 = $Orderdata['taste2'];
     $count_taste3 = $Orderdata['taste3'];
     $sum = ($count_taste1 + $count_taste2 + $count_taste3)*200;
    @endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="mx-auto">
                    <tr>
                        <td>お客様のお名前</td><td>{{$Orderdata['name']}}</td>
                    </tr>
                    @if ($count_taste1 != 0)
                    <tr>
                        <td>味1</td><td>{{$count_taste1}}個</td>
                    </tr>
                    @endif
                    @if ($count_taste2 != 0)
                    <tr>
                        <td>味2</td><td>{{$count_taste2}}個</td>
                    </tr>
                    @endif
                    @if ($count_taste3 != 0)
                    <tr>
                        <td>味3</td><td>{{$count_taste3}}個</td>
                    </tr>
                    @endif
                    <tr>
                        <td>合計金額</td><td>{{$sum}}</td>
                    </tr>
                </table>
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <form method="POST" action="{{ route('order.store') }}">
                        @csrf
                        <input type="hidden" name="name" value="{{ $Orderdata['name'] }}">
                        <input type="hidden" name="taste1" value="{{ $Orderdata['taste1'] }}">
                        <input type="hidden" name="taste2" value="{{ $Orderdata['taste2'] }}">
                        <input type="hidden" name="taste3" value="{{ $Orderdata['taste3'] }}">
                        <button  class="btn btn-outline-primary" type="submit">注文を確定する</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>