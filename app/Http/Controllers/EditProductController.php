<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

use App\Http\Requests\AddProductRequest;
use Auth, Storage;

class EditProductController extends Controller{

  public function updateProduct(AddProductRequest $request){
    $id=$request->id;
    $product = Product::find($id);
    // dd($product);


    $product->fill([
      'title' => $request->title,
      'price' => $request->price,
      // 'img_url' => $request->img_url,
    ]);

    $this->storeAvatar($product, $request);


    $product->save();


    return redirect()->route('admin')
    ->with('success_message', 'Tu producto ha sido editado con exito!');
  }


    protected function storeAvatar($product, $request) {
      // $id=$request->id;
      // $product = Product::find($id); //El usuario de la request es el usuario autenticado. Podria obtenerlo también con Auth::user()


    	if($request->hasFile('img_url')) {
        $this->removeAvatarIfExists($product->img_url);
    		$newFilename = uniqid().".".$request->img_url->extension();

    		$folder = "img";

    		$path = $request->img_url->storeAs($folder, $newFilename, 'public');


    		$product->img_url = "/".$folder."/".$newFilename;
    	}
    }

    protected function removeAvatarIfExists($product) {

     	if($product) {

         Storage::disk('public')->delete($product);
    	}
   }
}
