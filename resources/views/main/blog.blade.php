@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection

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

    {{--Section list--}}
    <div class="container">
        <ul class="border-0 nav nav-tabs justify-content-center justify-content-xl-start" role="tablist">
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto active" href="#" data-toggle="tab" role="tab">PETROKNOWLEDGE</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="#" data-toggle="tab" role="tab">SEIZE YOUR SUNDAY</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="/petronews" data-toggle="tab" role="tab">PETRONEWS</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="#" data-toggle="tab" role="tab">FUN FACTS</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="#" data-toggle="tab" role="tab">JOURNALISM</a>
            </li>
        </ul>
    </div>
    {{--End of Section List--}}

    {{--Section Petroknowledge--}}
    <section id="petroknowledge">
      @foreach ($articles as $article)
      <div class="container-md">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-6-sm col-md-12">
                <h1 class="petroknowledge-title">{{ $article->title}}</h1>
              </div>
              <div class="col-6-sm col-md-12 ">
                <p class="petroknowledge-desc">{{ $article->description}}</p>
              </div>
              <div class="row justify-content-between">
                <div class="col-md-3">
                  <p class="petroknowledge-date">{{ $article->published_at}}</p>
                </div>
                <div class="col-md-3 me-4">
                  <a href="/blog/{article:slug}" class="btn petroknowledge-read-more">READ MORE</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 ">
              <img class="image article-logo align-middle" src="/img/article/{{ $article->image}}" alt="minyak bumi">
          </div>
          
          <div class="col-md-3 d-none d-lg-block">
            <img class="articel-logo-spe" src="img/logo-small.png" alt="logo spe">
            <nav>
              <ul>
                <li><a href="#">PETROKNOWLEDGE</a></li>
                <li><a href="#">SEIZE YOUR SUNDAY</a></li>
                <li><a href="/petronews">PETRONEWS</a></li>
                <li><a href="#">FUNFACT</a></li>
                <li><a href="#">JOURNALISM</a></li>
              </ul>
            </nav>
          </div>
        </div> 
      </div>
      @endforeach 
    </section>
    {{--End of Section Petroknowledge--}}
    
@endsection