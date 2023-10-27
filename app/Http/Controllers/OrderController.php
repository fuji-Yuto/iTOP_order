<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Order;
use App\Rules\NonZeroTastes; 

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $orders = Order::getAllorders();
        return response()->view('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('order.create');
    }

    public function confirm(Request $request)
    {
        $data = $request->all();
        // バリデーションルールを設定
        $rules = [
            'name' => 'required|string|max:255',
            'taste1' => 'required|integer',
            'taste2' => 'required|integer',
            'taste3' => ['required', 'integer', new NonZeroTastes],
        ];

        // バリデーションメッセージ
        $messages = [
            'name.required' => 'お名前は必須です。',
            'name.string' => 'お名前には文字を入力してください.',
            'taste1.required' => '味1は必須です。',
            'taste1.integer' => '個数選択は整数でお願いします。',
            'taste2.required' => '味2は必須です。',
            'taste2.integer' => '個数選択は整数でお願いします。',
            'taste3.required' => '味3は必須です。',
            'taste3.integer' => '個数選択は整数でお願いします。',
        ];

        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            // バリデーションに失敗した場合
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        return view('order.confirm')->with('Orderdata',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $result = Order::create($request->all());

    $orderId = $result->id;

    return view('order.accept', compact('orderId'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
