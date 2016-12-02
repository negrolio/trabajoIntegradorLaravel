@extends('components.htmlBase')

@section('page')

@if (Auth::check())

  @if (Auth::user()->super_admin == 1)
    <div class="list-product-admin">
      <table class="">
        <tr>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Imagen</th>
        </tr>
        @foreach ($products as $product)

          <tr>
            <td>{{$product->title}}</td>
            <td>${{$product->price}}</td>
            <td><img src="/storage/{{$product->img_url}}" alt="" /></td>

            <td><a href="{{route('editProduct',$product->id)}}"><button type="button" name="button">Editar</button></a></td>
            <td>
              <form class="" action="{{route('eraser',$product->id)}}" method="post">
                {{ csrf_field() }}
                <input type="submit" name="submit" value="Borrar" class="button-borrar">
              </form>
            </td>
          </tr>
        @endforeach
      </table>
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
