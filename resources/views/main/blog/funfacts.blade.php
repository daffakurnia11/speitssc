@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection
@section('title', 'Fun Facts')
@section('content')
          
    {{--Header--}}
    <header class="blog-header">
        <div class="container d-flex align-items-center flex-column">
            <div class="row align-items-center">
                <div class="blog">
                    <h1 class="blog-title">BLOG</h1>
                </div>    
            </div>
        </div>
        <img src="/img/header_blog.png" class="header-img" alt="">
    </header>
    {{--End of Header--}}

  {{--Section list--}}
    <section id="funfacts">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <ul class="border-0 nav nav-tabs justify-content-center justify-content-xl-start" role="tablist">
              <li class="nav-item mx-3" role="presentation">
                <a class="nav-link mx-auto" href="/petroknowledge" data-toggle="tab" role="tab">PETROKNOWLEDGE</a>
              </li>
              <li class="nav-item mx-3" role="presentation">
                <a class="nav-link mx-auto" href="/petronews" data-toggle="tab" role="tab">PETRONEWS</a>
              </li>
              <li class="nav-item mx-3" role="presentation">
                <a class="nav-link mx-auto" href="/paper-review" data-toggle="tab" role="tab">PAPER REVIEW</a>
              </li>
              <li class="nav-item mx-3" role="presentation">
                <a class="nav-link mx-auto" href="/seize-your-sunday" data-toggle="tab" role="tab">SEIZE YOUR SUNDAY</a>
              </li>
              <li class="nav-item mx-3" role="presentation">
                <a class="nav-link mx-auto active" href="/fun-facts" data-toggle="tab" role="tab">FUN FACTS</a>
              </li> 
            </ul>
            <div class="content">
              <div class="content">
                <div class="row">
                  @foreach ($posts as $post)
                    @php
                    $images = explode(';', $post->image)
                    @endphp
                    <div class="col-lg-4 mt-4">
                      <h3 class="text-center fs-5 text-capitalize mb-3">{{ $post->title }}</h3>
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
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-none d-lg-block" style="margin-top: 30px">
            <img class="posts-logo-spe" src="img/logo-small.png" alt="logo spe">
              <nav>
                <ul>
                  <li><a href="/petroknowledge">PETROKNOWLEDGE</a></li>
                  <li><a href="/petronews">PETRONEWS</a></li>
                  <li><a href="/paper-review">PAPER REVIEW</a></li>
                  <li><a href="/seize-your-sunday">SEIZE YOUR SUNDAY</a></li>
                  <li><a href="/fun-facts">FUNFACT</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>     
@endsection
</script>>
