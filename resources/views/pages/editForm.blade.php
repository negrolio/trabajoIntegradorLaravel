<div class="container">
  <div class="row">


    <form class="form-horizontal" action="{{route('editarProducto', $product->id)}}" method="POST" enctype="multipart/form-data" id="form">
      {{ csrf_field() }}


        {{-- Nombre del usuario --}}
        <div class="form-group">
          <label for="title">Nombre del producto</label>
          <input type="text" name="title" class="form-control" value="{{$product->title}}">
        </div>

        <div class="form-group">
           <label for="price">Precio</label> <br>
          <input type="number" name="price" class="form-control" value="{{$product->price}}">
        </div>

      <div class="form-group">
          <label for="img_url">Imagen</label>
          <input type="file" name="img_url" class="form-control">
      </div>

      <div class="form-group">
        <label for="text_area">Descripción</label>
        <br>
        <textarea name="description" rows="8" cols="40">{{$product->description}}</textarea>
      </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

        @if($product->img_url)
		      	<div style="margin-top:20px; margin-bottom:20px; text-align:center">
		      		<img class="img-responsive img-thumbnail img-rounded" style="width:30%" src="/storage/{{ $product->img_url }}">
		      	</div>
	      @endif
    </form>
  </div>
</div>
