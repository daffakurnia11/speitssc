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
              <a class="nav-link mx-auto" href="/seizeyoursunday" data-toggle="tab" role="tab">SEIZE YOUR SUNDAY</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="/fun-facts" data-toggle="tab" role="tab">FUN FACTS</a>
            </li>
          </ul>
          @foreach ($articles as $article)
          <div class="row petronews-article">
            <div class="col-md-8">
              <div class="row">
                <div class="col-6-sm col-md-12">
                  <h1 class="petronews-title">{{ $article->title}}</h1>
                </div>
                <div class="col-6-sm col-md-12 ">
                  <p class="petronews-desc">{{ $article->description}}</p>
                </div>
                <div class="row justify-content-between">
                  <div class="col-md-3">
                    <p class="petronews-date">{{ $article->published_at}}</p>
                  </div>
                  <div class="col-md-3 me-4">
                    <a href="/article/{{$article->slug}}" class="btn petronews-read-more">READ MORE</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 ">
                <img class="image article-logo align-middle" src="/img/article/{{ $article->image}}" alt="minyak bumi">
            </div>
          </div> 
          @endforeach 
        </div>
        <div class="col-md-3 d-none d-lg-block" style="margin-top: 30px">
          <img class="articel-logo-spe" src="img/logo-small.png" alt="logo spe">
          <nav>
            <ul>
              <li><a href="/petroknowledge">PETROKNOWLEDGE</a></li> 
              <li><a href="#">PETRONEWS</a></li>
              <li><a href="/paper-review">PAPER REVIEW</a></li>
              <li><a href="/seizeyoursunday">SEIZE YOUR SUNDAY</a></li>
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
    
    