@extends('components.htmlBase')

@section('page')
  <div class="container-product">
    <h2>{{$product->title}}</h2>
    <img src="/storage{{$product->img_url}}" alt="" />
    <p>${{$product->price}}</p>
    <p>
      {{$product->description}}
    </p>
  </div>
@endsection
