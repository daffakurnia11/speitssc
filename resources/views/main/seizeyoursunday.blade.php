@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection
@section('title', 'Blog')

@section('content')

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
  <style>
    .container-fluid {
      margin-top: 56px;
      font-family: Lato;
      font-style: normal;
      font-weight: 800;
      font-size: 48px;
      line-height: 58px;
      letter-spacing: 0.03em;
      margin-left: 225px;
    }
  </style>

    {{--Header--}}
    <header class="blog-header">
        <div class="container d-flex align-items-center flex-column">
            <div class="row align-items-center">
                <div class="blog">
                    <h1 class="blog-title">BLOG</h1>
                </div>    
            </div>
        </div>
    </header>
    {{--End of Header--}}

    {{--Section list--}}
    <div class="container">
        <ul class="border-0 nav nav-tabs justify-content-center justify-content-xl-start" role="tablist">
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="/blog" data-toggle="tab" role="tab">PETROKNOWLEDGE</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto active" href="/seizeyoursunday" data-toggle="tab" role="tab">SEIZE YOUR SUNDAY</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="#" data-toggle="tab" role="tab">PETRONEWS</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="/fun-facts" data-toggle="tab" role="tab">FUN FACTS</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="#" data-toggle="tab" role="tab">JOURNALISM</a>
            </li>
        </ul>
    </div>
    {{--End of Section List--}}

{{--Seize Your Sunday--}}
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          @if (session()->has('message'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
        </div>
      </div>
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Seize Your Sunday Posts</h3>
            </div>
            <div class="card-body">
              <div class="row">
                @foreach ($posts as $posts)
                  <div class="col-sm-6 col-lg-12 col-xl-6">
                    <div class="card card-warning">
                      <div class="card-body py-0">
                        @php
                            $images = explode(';', $posts->image)
                        @endphp
                        <div class="owl-carousel owl-theme owl-loaded">
                          <div class="owl-stage-outer">
                            <div class="owl-stage">
                              @foreach ($images as $image)
                              <div class="owl-item">
                                <img src="/img/post/{{ $image }}" class="w-100" alt="">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
  </div>
{{--End of Seize Your Sunday--}}
@endsection

<!-- jQuery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('vendor/owlcarousel/dist/owl.carousel.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(document).ready(function () {
    $(".owl-carousel").owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:truse
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
    });
  });
</script>