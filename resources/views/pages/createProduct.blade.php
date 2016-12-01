@extends('components.htmlBase')

@section('page')

	@if (Auth::check())

    @if (Auth::user()->super_admin == 1)
			<div class="container">
				<div class="row">


			    <form class="form-horizontal" action="{{route('addProduct')}}" method="POST" enctype="multipart/form-data" id="form">
						{{ csrf_field() }}

							<h3>Agregar nuevo producto</h3>

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

					    <input type="submit" value="Guardar" class="btn btn-info">
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
