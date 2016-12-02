@extends('components.htmlBase')

@section('page')

  <div class="containerProduct">

  @foreach ($products as $product)
    <article class="product">
      <img src="/storage/{{$product->img_url}}" alt="{{$product->title}}">
      <div class="precio">
        <h4>{{$product->title}}</h4>
        <p>${{$product->price}}</p>
      </div>
      <div class="button-cart">
        <span class="ion-ios-cart"></span>
        ADD TO CART
      </div>
    </article>
  @endforeach


</div>

@endsection
