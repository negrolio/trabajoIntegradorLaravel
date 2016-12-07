@extends('components.htmlBase')

@section('page')

  <section class="presentacion">
    <h2>Bienvenidos a</h2><h2> Organic Food</h2>
    <p> Nos hemos especializado en el suministro de alimentos / productos orgánicos, producidos por agricultores locales de todo el país.</p>
  </section>

  <section class="main-categories">

    <a href="{{route('fruits')}}">
      <article class="fruit-img-categories">
        <h2>Frutas</h2>
      </article>
    </a>

    <a href="{{route('vegetables')}}">
      <article class="vegetable-img-categories">
        <h2>Vegetales</h2>
      </article>
    </a>

    <a href="{{route('cereals')}}">
      <article class="cereals-img-categories">
        <h2>Cereales</h2>
      </article>
    </a>
    
    <div class="clear"></div>
  </section>

  <div class="presentacion-productos">
    <h2>Destacados de la semana!</h2>
  </div>

  <section class="vip-products">

    @foreach ($products as $product)
      <article class="product">
        <a href="{{route('product',$product->id)}}">
          <img src="/storage/{{$product->img_url}}" alt="{{$product->title}}">
          <div class="precio">
            <h4>{{$product->title}}</h4>
            <p>${{$product->price}}</p>
          </div>
        </a>
        <div class="button-cart">
          <span class="ion-ios-cart"></span>
          ADD TO CART
        </div>
      </article>
    @endforeach


    {{-- <article class="product">
      <img src="/img/apple.jpg" alt="apple">
      <div class="precio">
        <h4>Manzana</h4>
        <p>$8.90</p>
      </div>
      <div class="button-cart">
        <span class="ion-ios-cart"></span>
        ADD TO CART
      </div>
    </article>

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

    <article class="product">
      <img src="/img/papas.jpg" alt="apple">
      <div class="precio">
        <h4>Papas</h4>
        <p>$2.74</p>
      </div>
      <div class="button-cart">
        <span class="ion-ios-cart"></span>
        ADD TO CART
      </div>
    </article>

    <article class="product">
      <img src="/img/sandias.jpg" alt="apple">
      <div class="precio">
        <h4>Sandia</h4>
        <p>$16.40</p>
      </div>
      <div class="button-cart">
        <span class="ion-ios-cart"></span>
        ADD TO CART
      </div>
    </article>

    <article class="product">
      <img src="/img/zanahoria.jpg" alt="apple">
      <div class="precio">
        <h4>Zanahoria</h4>
        <p>$5.20</p>
      </div>
      <div class="button-cart">
        <span class="ion-ios-cart"></span>
        ADD TO CART
      </div>
    </article>

    <article class="product">
      <img src="/img/morron.jpg" alt="apple">
      <div class="precio">
        <h4>Morrones Locos</h4>
        <p>$200.90</p>
      </div>
      <div class="button-cart">
        <span class="ion-ios-cart"></span>
        ADD TO CART
      </div>
    </article> --}}
  </section>

@endsection
