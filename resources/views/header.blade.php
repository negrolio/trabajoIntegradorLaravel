<header>
  <nav class="navbar navbar-default navbar-static-top">
      <div class="container-nav">
          <div class="navbar-header">

              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <!-- Branding Image -->
              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                  &nbsp;
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a href="{{ url('/login') }}">Login</a></li>
                      <li><a href="{{ url('/register') }}">Register</a></li>
                  @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ url('/logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endif
              </ul>
          </div>
      </div>
  </nav>

  <img src="/img/sello.jpg" alt="sello-confiable" class="sello" />

  <div class="option-rigth">
    <div class="registro">
      <a href="{{route('login')}}">Login</a> |
      <a href="{{route('register')}}">Registrarse</a>
    </div>

    <div class="cart-look">
      <a href="#" class="cart">
        <span class="ion-ios-cart"></span>
        <span class="number-price">0</span>
        <span class="number-price">- items</span>
      </a>
      <a href="#">
        <span class="ion-android-search"></span>
      </a>
    </div>
  </div>

  <nav class="main-nav">
    <ul>
      <li><a href="{{route('home')}}">home</a></li>
      <li><a href="#">nosotros</a></li>
      <li><a href="{{route('products')}}">productos</a></li>
      <li><a href="{{route('faq')}}">FAQ</a></li>
      <li><a href="#">sucursales</a></li>
      <li><a href="#">contacto</a></li>
    </ul>
  </nav>

  <section class="banner">
    <div class="titulo">
      <h1>Organic <br>Food</h1>
    </div>
  </section>

  <a href="#" class="toggle-nav">
    <span class="ion-navicon-round"></span>
  </a>

</header>
