<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> {{-- cuestion de laravel i guest --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Orgnic Food') }}</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/faq-style.css">
    <link rel="stylesheet" href="/css/products.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji|Indie+Flower" rel="stylesheet">
    <script src="/js/app.js" charset="utf-8"  type="text/javascript"></script>
    {{-- <script src="/js/utilidades.js" charset="utf-8"  type="text/javascript"></script>
    <script src="/js/register.js" charset="utf-8"  type="text/javascript"></script> --}}
    <script src="/js/main.js" charset="utf-8"  type="text/javascript"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

  </head>
  <body>
    <div class="container">
      @include('header')
      @yield('page')
      @include('footer')

    </div>
  </body>
</html>
