<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = "Producto";
        $price = 12.99;
        $imgUrl = "/img/banana.jpg";

        for ($i=0; $i < 20 ; $i++) {
          $newProduct = new Product;
          $newProduct->title = $title.$i;
          $newProduct->price = $price;
          $newProduct->img_url = $imgUrl;
          $newProduct->save();
        }
    }
}
