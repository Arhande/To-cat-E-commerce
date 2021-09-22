<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $carts = Cart::where('user_id', Auth::user()->id)->with('products.images')->latest()->get();
        $total = 0;

        foreach($carts as $cart){
            $total += $cart->products->harga * $cart->qty;
        }
        return view('cart', [
            'carts' => $carts,
            'total' => $total
        ]);
    }
}
