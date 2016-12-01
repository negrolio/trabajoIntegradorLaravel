@extends('components.htmlBase')

@section('page')

@if (Auth::check())

  @if (Auth::user()->super_admin == 1)
    <div class="list-product-admin">
      <ul class="list-group">
        @foreach ($products as $product)

          <div class="">
            <li class="list-group-item"><h3>{{$product->title}}</h3></li>
            <li class="list-group-item"><p>{{$product->price}}</p></li>
            <img src="/storage/{{$product->img_url}}" alt="" />
            <a href="{{route('editProduct',$product->id)}}"><button type="button" name="button">Editar</button></a>
          </div>
        @endforeach
      </ul>
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
