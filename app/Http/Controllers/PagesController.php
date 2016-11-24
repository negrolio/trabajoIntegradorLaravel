<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showHome(){
      return view('pages/home');
    }
    public function showFaq(){
      return view('pages/faq');
    }
    public function showProducts(){
      return view('pages.products');
    }
    // public function showLogin(){
    //   return view('pages/login');
    // }
    // public function showRegister(){
    //   return view ('pages/register');
    // }
}
