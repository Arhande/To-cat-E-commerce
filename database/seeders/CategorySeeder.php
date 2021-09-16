<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adult = new Category();
        $adult->name = "Adult";
        $adult->image_path = "images/foradult.png";
        $adult->save();
        
        $kitten = new Category();
        $kitten->name = "Kitten";
        $kitten->image_path = "images/forkitten.png";
        $kitten->save();
        
        $tools = new Category();
        $tools->name = "Tools";
        $tools->image_path = "images/fortools.png";
        $tools->save();
        
        $vitamin = new Category();
        $vitamin->name = "Vitamin";
        $vitamin->image_path = "images/forvitamin.png";
        $vitamin->save();
    }
}
