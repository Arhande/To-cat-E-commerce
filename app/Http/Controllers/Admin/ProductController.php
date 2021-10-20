<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();

        return view('dashboard-products', ['products' => $products]);
    }


    public function create(){
        $categories = Category::get();
        return view('dashboard-products-create', ['categories'=>$categories]);
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255|string',
            'harga' => 'required|integer',
            'description' => 'required|string',
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:5000'
        ]);
        
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->harga = $request->harga;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('public/products/images');
            $product->images()->create(['image_path' => Storage::url($image_path), 'image_path_directory' => $image_path, 'product_id' => $product->id]);
        }
        
        
        
        return redirect()->route('dashboard.products');
    }

    public function edit(Product $product){
        $categories = Category::get();
        return view('dashboard-products-edit', ['categories'=>$categories, 'product' => $product]);
    }

    public function update(Request $request, Product $product){
        $this->validate($request, [
            'name' => 'required|max:255|string',
            'harga' => 'required|integer',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpeg,bmp,png,jpg|max:5000'
        ]);
        $product->category_id = $request->category_id;
        $product->harga = $request->harga;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        if ($request->hasFile('image')) {
            Storage::delete($product->images[0]->image_path_directory);
            $product->images()->delete();
            $image_path = $request->file('image')->store('public/products/images');
            $product->images()->create(['image_path' => Storage::url($image_path), 'image_path_directory' => $image_path, 'product_id' => $product->id]);
        }
        
        
        
        return redirect()->route('dashboard.products');
    }
}
