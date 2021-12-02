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
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.min.css') }}">
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
    <!-- Summernote -->
    <script src="{{ asset('vendor/summernote/summernote.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('vendor/owlcarousel/dist/owl.carousel.min.js') }}"></script>
    <script>
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          loop: true,
          margin: 10,
          items: 1,
          autoplay: true,
          autoplayTimeout: 3000,
          autoplayHoverPause: true
        });
      });
      $('#scroll-to-top').on('click', function() {
        $(window).scrollTop(0);
      });
      $(function () {
        $('#summernote').summernote({
          toolbar: [
            // [groupName, [list of button]]
            ['fontname', ['fontname']],
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture']],
          ],
          fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
          height:300,
          popatmouse:true
        });
        
      });
    </script>
  </body>
</html>