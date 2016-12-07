<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProducts(){

      $products = Product::all();
      // dd($products);
      return view('pages.products')->with('products',$products);
    }
    public function showProductsFruits(){
      $products = Product::where('category', '=', 'fruit')->get();
      return view('pages.products')->with('products',$products);
    }
    public function showProductsVegetables(){
      $products = Product::where('category', '=', 'vegetables')->get();
      return view('pages.products')->with('products',$products);
    }
    public function showProductsCereals(){
      $products = Product::where('category', '=', 'cereals')->get();
      return view('pages.products')->with('products',$products);
    }


    public function showProduct($id){
      $product = Product::find($id);
      return view('pages.product')->with('product',$product);
    }

    public function showProductsToEdit(){
      $products = Product::all();
      // dd($products);
      return view('pages.edit')->with('products',$products);
    }

    public function showProductToEdit($id){

      $product = Product::find($id);

      return view('pages.editProduct')->with('product',$product);
    }

    public function eraser($id){

      $product = Product::find($id);
      $product->delete();

      return redirect()->route('edit');
    }
}
