<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = Product::with('images');
        $categories = Category::latest()->get();

        if ($request->filled('category')) {
            $category = Category::where('name', 'LIKE', "%$request->category%")->first();
            if($category){
                $products = $products->where('category_id', $category->id);
            }
        }
        
        $products = $products->latest()->get();

        return view('products', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function details(Product $product){
        return view('products-detail', [
            'product' => $product->load('images')
        ]);
    }


    public function addProductToCart(Request $request, Product $product){


        $cart = Cart::firstOrNew(
            [
                'product_id' => $product->id, 
                'user_id' =>  Auth::user()->id,
            ]
        );

        if(!$cart->exists()){
            $cart->qty = 1;
        }else{
            $cart->qty = $cart->qty + 1;
        }
        $cart->save();

        return redirect()->route('products.detail', $product->id);
    }
}
