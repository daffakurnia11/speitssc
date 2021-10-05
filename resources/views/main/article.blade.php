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
                    <div class="row detail-article">
                        <div class="col-md-1">
                            <img class="profile_image" src="/img/profile_user.png" alt="profile_user">
                        </div>
                        <div class="col-md-5">
                            <p class="name-user">{{$articles->user->name}}</p>
                        </div>
                        <div class="col-md-5">
                            <p class="date-article">{{$articles->published_at}}</p>
                        </div>
                        <div class="col-md-1 justify-content-end">
                            {{--<img class="download_image" src="/img/unduh.png" alt="download">--}}
                        </div>
                    </div>
                </div>
                <img class="image-article" src="/img/article/{{ $articles->image}}" alt="minyak bumi">
                <p class="body">{!! $articles->body!!}</p>
            </div>
        </div>
    </div>
@endsection