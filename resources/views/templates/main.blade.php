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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?modified={{ date("Ymd")}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <title>SPE ITS Student Chapter | @yield('title')</title>
  </head>
  <body>
    
    @yield('navbar')

    @yield('content')

    @yield('footer')

    @yield('scroll')
    {{-- Javascript --}}
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('vendor/owlcarousel/dist/owl.carousel.min.js') }}"></script>
    <script>
      $(document).ready(function () {
        $(".owl-carousel-main").owlCarousel({
          items: 2 ,
          dots: false,
          autoplay: false
        });
        $(".owl-carousel").owlCarousel({
          loop: true,
          items: 1,
          autoplay: true,
          autoplayTimeout: 3000,
          autoplayHoverPause: true,
          dots: true,
        });
      });
      $('#scroll-to-top').on('click', function() {
        $(window).scrollTop(0);
      });
    </script>
  </body>
</html>