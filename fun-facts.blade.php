@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection
@section('title', 'Blog')
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
              <a class="nav-link mx-auto" href="/blog" data-toggle="tab" role="tab">PETROKNOWLEDGE</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="/seizeyoursunday" data-toggle="tab" role="tab">SEIZE YOUR SUNDAY</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="#" data-toggle="tab" role="tab">PETRONEWS</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto active" href="/fun-facts" data-toggle="tab" role="tab">FUN FACTS</a>
            </li>
            <li class="nav-item mx-3" role="presentation">
              <a class="nav-link mx-auto" href="#" data-toggle="tab" role="tab">JOURNALISM</a>
            </li>
        </ul>
    </div>
    {{--End of Section List--}}

{{-- Fun Facts --}}
@foreach ($posts as $posts)
 <section id='fun-facts'>
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-12-sm col-md-8 fun-facts">
                <h1 class="title">{{ $posts->title}}</h1>
                <img class="image" src="/img/post/{{$posts->image}}" alt="fun fact">
                <p class="body">{!! $posts->body!!}</p>
            </div>
        </div>
    </div>
 </section>
@endforeach 
    
@endsection