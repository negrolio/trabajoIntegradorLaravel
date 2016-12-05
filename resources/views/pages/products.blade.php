@extends('components.htmlBase')

@section('page')

  <div id="catalogCarousel" class="containerProducts carousel slide" data-ride="carousel" data-interval="false">

      <div class="carousel-inner" role="listbox">

        {{-- {{dd($products->chunk(6))}} --}}
        @foreach ($products->chunk(6) as $someProducts)
            <div class="item @if ($loop->first) active @endif" >

              @foreach ($someProducts as $product)
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

            </div>
        @endforeach
      </div>

      <ol>
        @for ($i=0; $i < $products->count()/6 ; $i++)
          <button class="button-catalogo-page" data-target="#catalogCarousel" data-slide-to="{{$i}}">
            {{$i + 1}}
          </button>
        @endfor
      </ol>

    </div>




@endsection
