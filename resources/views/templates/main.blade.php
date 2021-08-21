<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    {{-- CSS --}}
    {{-- <link rel="stylesheet" href="css/style.css?modified={{ date("Ymd")}}"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <title>SPE ITS Student Chapter</title>
  </head>
  <body>
    
    @yield('navbar')

    @yield('content')

    @yield('footer')

    {{-- Javascript --}}
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>