<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="{{ asset('assets/img/oasis.enc')}}" href="{{ asset('assets/img/oasis.enc')}}">



  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>@yield('title','Home')</title>


  {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}





  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <!-- plantilla -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets_cliente/css/vendor.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="assets_cliente/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap" rel="stylesheet">




  @yield('styles')
</head>

<body class="homepage bg-light">

@include('components_cliente.navbar')

 



  <section id="billboard" class="py-5 bg-dark ">
    
    <div id="app">
    
      <main class="">
        @yield('content')
      </main>
    </div>
  </section>

</body>


</html>