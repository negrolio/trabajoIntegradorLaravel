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

        for ($i=0; $i < 18 ; $i++) {
          $newProduct = new Product;
          $newProduct->title = $title.$i;
          $newProduct->price = $price;
          $newProduct->img_url = $imgUrl;
          $newProduct->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
          if ($i < 6) {
            $newProduct->category = 'fruit';
          }
          if ($i > 6) {
            $newProduct->category = 'vegetables';
          }
          if ($i > 12) {
            $newProduct->category = 'cereals';
          }
          $newProduct->save();
        }
    }
}
