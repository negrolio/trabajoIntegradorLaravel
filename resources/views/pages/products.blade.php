@extends('components.htmlBase')

@section('page')

  <div class="containerProduct">

  @if (Auth::check() && Auth::user()->super_admin == 1)
    <h1>soy el super admin</h1>
  @endif

  @foreach ($products as $product)
    <article class="product">
      <img src="{{$product->img_url}}" alt="{{$product->title}}">
      <div class="precio">
        <h4>{{$product->title}}</h4>
        <p>{{$product->price}}</p>
      </div>
      <div class="button-cart">
        <span class="ion-ios-cart"></span>
        ADD TO CART
      </div>
    </article>
  @endforeach


</div>

@endsection
