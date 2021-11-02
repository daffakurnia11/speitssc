@extends('templates.main')
@section('navbar')
  @include('templates.navbar')
@endsection
@section('footer')
  @include('templates.footer')
@endsection
@section('title', 'Petronews')
@section('content')
    {{--Header--}}
    <header class="blog-header">
        <div class="container d-flex align-items-center flex-column">
            <div class="row align-items-center">
                <div class="blog">
                    <h1 class="blog-title">Blog</h1>
                </div>    
            </div>
        </div>
        <img src="/img/header_blog.png" class="header-img" alt="">
    </header>
    {{--End of Header--}}

    {{--Section Petronews--}}
    <section id="petronews">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <ul class="border-0 nav nav-tabs justify-content-center justify-content-xl-start" role="tablist">
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="/petroknowledge" data-toggle="tab" role="tab">PETROKNOWLEDGE</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto active" href="/petronews" data-toggle="tab" role="tab">PETRONEWS</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="/paper-review" data-toggle="tab" role="tab">PAPER REVIEW</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="/seize-your-sunday" data-toggle="tab" role="tab">SEIZE YOUR SUNDAY</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="/fun-facts" data-toggle="tab" role="tab">FUN FACTS</a>
            </li>
          </ul>
          @if ($articles->isNotEmpty())
          @foreach ($articles as $article)
          <div class="row petronews-article my-4">
            <div class="col-md-8 order-2 order-md-1">
              <div class="row">
                <div class="col-6-sm col-md-12">
                  <h1 class="petronews-title">{{ $article->title}}</h1>
                </div>
                <div class="col-6-sm col-md-12 ">
                  <p class="petronews-desc">{{ $article->description}}</p>
                </div>
                <div class="row justify-content-between align-items-center mt-4">
                    <p class="petronews-date p-0 m-0">{{ $article->published_at->diffForHumans()}}</p>
                    <a href="/article/{{$article->slug}}" class="btn petronews-read-more m-0">READ MORE</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 order-1 order-md-2">
              <div class="text-center">
                <img class="image article-logo align-middle mb-3 d-inline" src="/img/article/{{ $article->image}}" alt="minyak bumi">
              </div>
            </div>
          </div> 
          @endforeach 
          @else
            <h1 class="announcement">No Content Available</h1>
          @endif
        </div>
        <div class="col-md-3 d-none d-lg-block" style="margin-top: 30px">
          <img class="articel-logo-spe" src="img/logo-small.png" alt="logo spe">
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
    </section>
    {{--End of Section Petronews--}}
@endsection
    {{--Section Announce--}}
    {{--<section id="petronews">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                  <h1 class="announcement">No Content Available</h1>
                </div>
            </div>
        </div>
    </section>--}}
    
    