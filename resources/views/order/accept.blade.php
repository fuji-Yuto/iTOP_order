<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-lg text-gray-900">
                    <p class="text-center">以下の内容で注文を受け付けました<p>
                </div>
                <div class="text-center text-gray-900 mb-10">
                    <p>注文番号<p>
                    <p class ="text-4xl" >{{$orderId}}<p>
                </div>
                <div class="mx-auto text-center">
                    <form method="GET" action="{{ route('dashboard') }}">
                        <button  class="btn btn-outline-primary">確認</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>