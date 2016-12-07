@extends('components.htmlBase')

@section('page')

	@if (Auth::check())

    @if (Auth::user()->super_admin == 1)

			<h3>Agregar nuevo producto</h3>
			<div class="container">
			  <div class="row">


			    <form class="form-horizontal" action="{{route('addProduct')}}" method="POST" enctype="multipart/form-data" id="form">
			      {{ csrf_field() }}


			        {{-- Nombre del usuario --}}
			        <div class="form-group">
			          <label for="title">Nombre del producto</label>
			          <input type="text" name="title" class="form-control">
			        </div>

			        <div class="form-group">
			           <label for="price">Precio</label> <br>
			          <input type="number" name="price" class="form-control">
			        </div>

			      <div class="form-group">
			          <label for="img_url">Imagen</label>
			          <input type="file" name="img_url" class="form-control">
			        </div>

							<div class="form-group">
								<label for="text_area">Descripción</label>
								<br>
								<textarea name="description" rows="8" cols="40"></textarea>
							</div>

			        <button type="submit" class="btn btn-primary">Guardar</button>
			    </form>
			  </div>
			</div>


		@else
      <div class="alert alert-danger" role="alert">
        <span class="sr-only">Error:</span>
        Debes ser un Administrador para poder ver este contenido
      </div>
    @endif

  @else
    @include('auth.components.login')
  @endif



@endsection
