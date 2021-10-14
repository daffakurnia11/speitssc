@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection

@section('content')
{{--Petroknowledge--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12-sm col-md-8 petroknowledge">
                <div class="row">
                    <h1 class="title">{{ $articles->title}}</h1>
                    <div class="detail-article d-flex justify-content-between align-items-center">
                        <div class="author-desc">
                            <img class="profile_image d-inline" src="/img/profile_user.png" alt="profile_user">
                            <span class="name-user m-0 p-0">{{$articles->user->name}}</span>
                        </div>
                        <div class="article-date">
                            <p class="date-article">{{$articles->published_at->diffForHumans()}}</p>
                        </div>
                    </div>
                </div>
                <img class="image-article" src="/img/article/{{ $articles->image}}" alt="minyak bumi">
                <p class="body">{!! $articles->body!!}</p>
            </div>
        </div>
    </div>
@endsection