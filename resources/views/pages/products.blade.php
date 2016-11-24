@extends('htmlBase')

@section('page')

  <div class="containerProduct">
  @for ($i=0; $i < 9 ; $i++)
      <article class="product">
        <img src="/img/banana.jpg" alt="apple">
        <div class="precio">
          <h4>Banana</h4>
          <p>$4.98</p>
        </div>
        <div class="button-cart">
          <span class="ion-ios-cart"></span>
          ADD TO CART
        </div>
      </article>
  @endfor
</div>

@endsection
