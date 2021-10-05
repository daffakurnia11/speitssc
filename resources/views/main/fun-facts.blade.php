@extends('templates.main')
@section('navbar')
  @include('templates.navbar')
@endsection
@section('footer')
  @include('templates.footer')
@endsection
@section('title', 'Fun-Fact')
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
    </header>
    {{--End of Header--}}

    {{--Section Fun-Fact--}}
    <section id="list-post-funfacts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <ul class="border-0 nav nav-tabs justify-content-center justify-content-xl-start" role="tablist">
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="/petroknowledge" data-toggle="tab" role="tab">PETROKNOWLEDGE</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="petronews" data-toggle="tab" role="tab">PETRONEWS</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="#" data-toggle="tab" role="tab">PAPER REVIEW</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="/seizeyoursunday" data-toggle="tab" role="tab">SEIZE YOUR SUNDAY</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto active" href="/fun-facts" data-toggle="tab" role="tab">FUN FACTS</a>
            </li>
          </ul>
          @foreach ($posts as $posts)
            <div class="row funfact-article">
                <div class="col-12-sm col-sm-8 fun-facts">
                    <h1 class="title-funfact">{{ $posts->title}}</h1>
                    @php
                        $images = explode(';', $posts->image)
                    @endphp
                    @foreach ($images as $image)
                      <img class="image" src="/img/post/{{$image}}" alt="">
                    @endforeach
                    <p class="body">{!! $posts->body!!}</p>
                </div>
            </div>
          @endforeach 
        </div>
        <div class="col-md-3 d-none d-lg-block" style="margin-top: 30px">
          <img class="articel-logo-spe" src="img/logo-small.png" alt="logo spe">
          <nav>
            <ul>
              <li><a href="/petroknowledge">PETROKNOWLEDGE</a></li>
              <li><a href="/petronews">PETRONEWS</a></li>
              <li><a href="/paper-review">PAPER REVIEW</a></li>
              <li><a href="/seizeyoursunday">SEIZE YOUR SUNDAY</a></li>
              <li><a href="/#">FUNFACT</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    </section>
    {{--End of Section Fun-Fact--}}    
@endsection