@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection

@section('content')

{{--Petroknowledge--}}
@foreach ($articles as $article)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12-sm col-md-8 petroknowledge">
                <h1 class="title">{{ $article->title}}</h1>
                <img class="image" src="/img/article/{{ $article->image}}" alt="minyak bumi">
                <p class="body">{!! $article->body!!}</p>
            </div>
        </div>
    </div>
@endforeach 

@endsection