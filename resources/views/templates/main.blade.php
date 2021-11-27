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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


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
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('vendor/owlcarousel/dist/owl.carousel.min.js') }}"></script>
    <script>
      $(document).ready(function () {
        $('.slick-carousel-main').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 2,
          arrows:true,
          prevArrow: $('.prev-arrows'),
          nextArrow: $('.next-arrows'),
          // responsive: [
          // {
          //   breakpoint: 600,
          //   settings: {
          //     slidesToShow: 2,
          //     slidesToScroll: 2
          //   }
          // },
          // {
          //   breakpoint: 480,
          //   settings: {
          //     slidesToShow: 1,
          //     slidesToScroll: 1
          //   }
          // }
        });
        $('.slick-carousel').slick({
          infinite: true,
          arrows:false,
          slidesToShow: 1,
          slidesToScroll: 1
        });
        // $(".owl-carousel-main").owlCarousel({
        //   loop: true,
        //   center: true,
        //   items: 2 ,
        //   dots: false,
        //   autoplay: false
        // });
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