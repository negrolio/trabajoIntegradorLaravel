<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function showHome(){
      $products = Product::where('category', '=', 'Destacado')->get();
      return view('pages/home')
              ->with('products',$products);;
    }
    public function showFaq(){
      return view('pages/faq');
    }
    public function showAdmin(){
      return view('pages.admin');
    }
    public function showCreateProduct(){
      return view('pages.createProduct');
    }
    public function showEdit(){
      return view('pages.edit');
    }
    // public function showLogin(){
    //   return view('pages/login');
    // }
    // public function showRegister(){
    //   return view ('pages/register');
    // }
}
