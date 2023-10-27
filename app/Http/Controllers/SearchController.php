<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $orderID = trim($request->id);
        $customerName = trim($request->name);
        $orders = Order::getIdorder($orderID);

        if(count($orders) != 1){
            return view('search.sorry');
        }else if(count($orders)== 1){
            foreach($orders as $order){
                if( $customerName == $order->name){
                    return response()->view('order.show',compact('order'));
                }else{
                    return view('search.sorry');
                }
            }
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('search.input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
