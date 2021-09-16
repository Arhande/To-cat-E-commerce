<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = Product::with('images');

        if ($request->filled('category')) {
            $categories = Category::where('name', 'LIKE', "%$request->category%")->first();
            if($categories){
                $products = $products->where('category_id', $categories->id);
            }
        }
        
        $products = $products->latest()->get();

        return view('products', [
            'products' => $products
        ]);
    }

    public function details(Product $product){
        return view('products-detail', [
            'products' => $product->load('images')
        ]);
    }
}
