<?php

use Illuminate\Database\Seeder;
use App\Product;


class ProductDestacadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $title = "Manzana";
      $price = 12.90;
      $imgUrl = "/img/apple.jpg";
      $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
      $category = 'destacado';

      $newProduct = new Product;
      $newProduct->title = $title;
      $newProduct->price = $price;
      $newProduct->img_url = $imgUrl;
      $newProduct->description = $description;
      $newProduct->category = $category;
      $newProduct->save();



      $title = "Banana";
      $price = 12.90;
      $imgUrl = "/img/banana.jpg";
      $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

      $newProduct = new Product;
      $newProduct->title = $title;
      $newProduct->price = $price;
      $newProduct->img_url = $imgUrl;
      $newProduct->description = $description;
      $newProduct->category = $category;
      $newProduct->save();


      $title = "Papas";
      $price = 12.90;
      $imgUrl = "/img/papas.jpg";
      $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

      $newProduct = new Product;
      $newProduct->title = $title;
      $newProduct->price = $price;
      $newProduct->img_url = $imgUrl;
      $newProduct->description = $description;
      $newProduct->category = $category;
      $newProduct->save();

      $title = "Sandias";
      $price = 12.90;
      $imgUrl = "/img/sandias.jpg";
      $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

      $newProduct = new Product;
      $newProduct->title = $title;
      $newProduct->price = $price;
      $newProduct->img_url = $imgUrl;
      $newProduct->description = $description;
      $newProduct->category = $category;
      $newProduct->save();

      $title = "Zanahoria";
      $price = 12.90;
      $imgUrl = "/img/zanahoria.jpg";
      $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

      $newProduct = new Product;
      $newProduct->title = $title;
      $newProduct->price = $price;
      $newProduct->img_url = $imgUrl;
      $newProduct->description = $description;
      $newProduct->category = $category;
      $newProduct->save();

      $title = "Morrones Locos";
      $price = 12.90;
      $imgUrl = "/img/sandias.jpg";
      $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

      $newProduct = new Product;
      $newProduct->title = $title;
      $newProduct->price = $price;
      $newProduct->img_url = $imgUrl;
      $newProduct->description = $description;
      $newProduct->category = $category;
      $newProduct->save();

    }
}
