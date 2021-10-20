<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::where('user_id', '=', Auth::user()->id)->latest()->get();
        return view('orders', ['orders' =>$orders]);
    }

    public function store(Request $request){
        $validation = $this->validate($request, [
            'nama_penerima' => 'required|max:255|string',
            'alamat' => 'required|max:255|string',
            'provinsi' => 'required|max:255|string',
            'kota' => 'required|max:255|string',
            'kode_pos' => 'required|string',
            'negara' => 'required|max:255|string',
            'phone' => 'required|string',
            'kurir' => 'required|max:255|string',
            'pembayaran' => 'required|max:255',
            'total' => 'required|numeric'
        ]);
        

        $order = new Order();

        $order->user_id = Auth::user()->id;
        $order->nama_penerima = $request->nama_penerima;
        $order->alamat = $request->alamat;
        $order->provinsi = $request->provinsi;
        $order->kota = $request->kota;
        $order->kode_pos = $request->kode_pos;
        $order->negara = $request->negara;
        $order->phone = $request->phone;
        $order->kurir = $request->kurir;
        $order->rekening_id = $request->pembayaran;
        $order->status= "Unpaid";
        $order->total_harga = $request->total + 10000;
        $order->save();

        $carts = Cart::where('user_id', Auth::user()->id)->with('products')->get();

        $products = [];

        foreach($carts as $cart){
            $products[$cart->product_id]['qty'] = $cart->qty;
        }
        
        $order->products()->attach($products);
        
        $deleteCart = Cart::where('user_id', Auth::user()->id)->delete();

        return redirect()->route('orders.index');
    }

    public function show(Order $order){
        return view('invoice', ['order'=>$order]);
    }

    public function bukti(Order $order){
        return view('upload-bukti', ['order' => $order]);
    }


    public function storeBukti(Request $request, Order $order){
        $this->validate($request, [
            'atas_nama' => 'required|max:255|string',
            'dari_rekening' => 'required|max:255|string',
            'image_bukti' => 'required|mimes:jpeg,bmp,png,jpg|max:5000'
        ]);

        $order->atas_nama = $request->atas_nama;
        $order->dari_rekening = $request->dari_rekening;
        $order->atas_nama = $request->atas_nama;

        if ($request->hasFile('image_bukti')) {
            $image_path = $request->file('image_bukti')->store('public/orders/images');
            $order->image_path = Storage::url($image_path); 
            $order->image_bukti_path = $image_path;
        }

        $order->save();

        return redirect()->route('orders.show', ['order'=>$order->id]);
    }
}
