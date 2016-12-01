@extends('components.htmlBase')

@section('page')

  @if (session('success_message'))
    <div class="alert alert-success">
      {{session('success_message')}}
    </div>
  @endif
  
  @if (Auth::check())

    @if (Auth::user()->super_admin == 1)
      <a href="{{route('createProduct')}}"><button class="btn" type="button" name="button">Agregar Producto</button></a>
      <a href="#"><button class="btn" type="button" name="button">Editar/Borrar</button></a>
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
