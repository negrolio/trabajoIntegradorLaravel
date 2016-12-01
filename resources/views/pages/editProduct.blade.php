@extends('components.htmlBase')

@section('page')

  @if (Auth::check())

    @if (Auth::user()->super_admin == 1)

      <h3>Editar nuevo producto</h3>
      @include('pages.editForm')

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
