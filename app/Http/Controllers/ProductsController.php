<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProducts(){

      $products = Product::all();

      return view('pages.products')->with('products',$products);
    }
}
