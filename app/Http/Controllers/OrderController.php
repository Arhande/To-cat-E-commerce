<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request){
        $order = new Order();

        $order->user_id = Auth::user()->id;
        $order->nama_penerima = $request->nama_penerima;
        $order->alamat = $request->alamat;
        $order->provinsi = $request->provinsi;
        $order->kota = $request->city;
        $order->kode_pos = $request->kode_pos;
        $order->negara = $request->negara;
        $order->phone = $request->phone;
        $order->kurir = $request->shipment;
        $order->rekening_id = $request->pembayaran;
        $order->status= "Unpaid";
        $order->total_harga = $request->total;
        $order->save();

        $carts = Cart::where('user_id', Auth::user()->id)->with('products')->get();

        $products = [];

        foreach($carts as $cart){
            $products[$cart->product_id]['qty'] = $cart->qty;
        }
        
        $order->products()->attach($products);
        
        $deleteCart = Cart::where('user_id', Auth::user()->id)->delete();

        return redirect()->route('cart');
    }
}
