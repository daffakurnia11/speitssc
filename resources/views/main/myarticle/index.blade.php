@extends('templates.main')

@section('navbar')
    @include('templates.navbar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection

@section('title', 'My Articles')

@section('content')

  <section id="editProfile">
    <div class="container">
      <div class="d-flex align-items-center my-4">
        <img src="/svg/profile_avatar.svg" class="profile-img" alt="">
        <div class="ms-4">
          <h1 class="profile-name">{{ auth()->user()->name }}</h1>
          <h2 class="profile-desc">{{ auth()->user()->profile->major }}, {{ auth()->user()->profile->batch }}</h2>
          @if (auth()->user()->profile->member_id)
            <p>Member ID : <strong>{{ auth()->user()->profile->member_id }}</strong></p>
          @endif
        </div>
      </div>
    </div>
  </section>

  <section id="myArticle">
    <div class="container article mt-5">

      @if (session()->has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <div class="article-option text-end mb-5">
        <a href="/myarticle/create" class="article-button">Publish New Article!</a>
      </div>
      @if ($articles->isNotEmpty())
        @foreach ($articles as $article)
          <div class="row justify-content-center align-items-center mb-4">
            <div class="col-xl-6 col-lg-9 col-md-8 order-2 order-md-1 mt-3">
              <div class="article-body d-flex flex-column justify-content-between h-100">
                <div class="article-content">
                  <a href="/article/{{ $article->slug }}">
                    <h2 class="article-title">{{ $article->title }}</h2>
                  </a>
                  <p class="article-desc mb-4">
                    {{ $article->description }}
                  </p>
                </div>
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center">
                  @if ($article->published_at)
                    <span class="article-published mb-4 mb-sm-0">Published at {{ $article->published_at->diffForHumans() }}</span>
                  @else
                    <span class="article-published mb-4 mb-sm-0">Not Published</span>
                  @endif
                  <div>
                    {{-- <form action="/myarticle/{{ $article->slug }}" method="POST" class="d-inline">
                      @method("DELETE")
                      @csrf
                      <button type="submit" class="article-button d-inline-block"><i class="fas fa-trash-alt"></i></button>
                    </form> --}}
                      <a href="/myarticle/{{ $article->slug }}/edit" class="article-button d-inline-block"><i class="fas fa-edit"></i></a>
                    <a href="/article/{{ $article->slug }}" class="article-button d-inline-block">Read Detail</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 text-center order-1 order-md-2">
              <img src="/img/article/{{ $article->image }}" class="article-header" alt="">
            </div>
          </div>
        @endforeach
      @else
        <h2 class="text-center fw-bold">No articles available</h2>
      @endif
    </div>
  </section>

@endsection