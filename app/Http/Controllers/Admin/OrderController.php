<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::latest()->get();
        return view('dashboard-transactions', ['orders'=>$orders]);
    }

    public function edit(Order $order){
        return view('dashboard-transactions-edit', ['order' => $order]);
    }

    public function update(Request $request, Order $order)
    {
        $this->validate($request, [
            'no_resi' => 'required|max:255|string',
            'status' => 'required|max:255|string'
        ]);

        $order->no_resi = $request->no_resi;
        $order->status = $request->status;
        $order->save();


        return redirect()->route('dashboard.transactions', ['order'=>$order->id]);
    }
}
