<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

use App\Http\Requests\AddProductRequest;
use Auth, Storage;

class AddProductController extends Controller
{
    public function addProduct(AddProductRequest $request){
      $product = new Product;
      $product->title = $request->title;
      $product->price = $request->price;
      $product->img_url = $request->img_url;
      $product->description = $request->description;

      $this->storeAvatar($product,$request);


      $product->save();

      return redirect()->route('admin')
      			->with('success_message', 'Tu producto ha sido creado con exito!');
    }

    //Lógica para almacenar las imagenes

    protected function storeAvatar($product,$request) {


      if($request->hasFile('img_url')) {
        $this->removeAvatarIfExists($product->img_url);
        $newFilename = uniqid().".".$product->img_url->extension();
        $folder = "img";
        $path = $product->img_url->storeAs($folder, $newFilename, 'public');
        $product->img_url = "/".$folder."/".$newFilename;
      }

    }


    protected function removeAvatarIfExists($product) {
   	  if($product) {

   		Storage::disk('public')->delete($product);
   	  }
    }
}
