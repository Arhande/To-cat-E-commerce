<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = new Product();
        $product1->category_id = 1;
        $product1->name = "Royal Canin Chaton Sterllise";
        $product1->harga = 360000;
        $product1->description = "ini deskripsi nya";
        $product1->save();
        $product1_images = new ProductImage();
        $product1_images->product_id = $product1->id;
        $product1_images->image_path = "images/details/produk1/detail1.png";
        $product1_images->save();
        $product1_images = new ProductImage();
        $product1_images->product_id = $product1->id;
        $product1_images->image_path = "images/details/produk1/detail2.png";
        $product1_images->save();

        $product2 = new Product();
        $product2->category_id = 2;
        $product2->name = "Royal Canin Chaton Sterllise yang Ke 2";
        $product2->harga = 5000000;
        $product2->description = "ini deskripsi nya beda dari yang tadi";
        $product2->save();
        $product2_images = new ProductImage();
        $product2_images->product_id = $product2->id;
        $product2_images->image_path = "images/details/produk1/detail3.png";
        $product2_images->save();
        $product2_images = new ProductImage();
        $product2_images->product_id = $product2->id;
        $product2_images->image_path = "images/details/produk1/detail4.png";
        $product2_images->save();



    }
}
