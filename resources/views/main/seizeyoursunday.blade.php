@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection
@section('title', 'Seize Your Sunday')

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
    <section id="seizeyoursunday">
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
                <a class="nav-link mx-auto active" href="/seizeyoursunday" data-toggle="tab" role="tab">SEIZE YOUR SUNDAY</a>
              </li>
              <li class="nav-item mx-3" role="presentation">
                <a class="nav-link mx-auto" href="/fun-facts" data-toggle="tab" role="tab">FUN FACTS</a>
              </li> 
            </ul>

            {{--Seize Your Sunday--}}
            <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-6">
                      @if (session()->has('message'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif
                    </div>
                  </div>
                    <div class="col-md-6">
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Seize Your Sunday Posts</h3>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            @foreach ($posts as $posts)
                              <div class="col-sm-6 col-lg-12 col-xl-6">
                                <div class="card card-warning">
                                  <div class="card-body py-0">
                                    @php
                                        $images = explode(';', $posts->image)
                                    @endphp
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
                                </div>
                              </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.container-fluid -->
              </div>

              <div class="col-md-3 d-none d-lg-block" style="margin-top: 30px">
                <img class="articel-logo-spe" src="img/logo-small.png" alt="logo spe">
                <nav>
                  <ul>
                    <li><a href="#">PETROKNOWLEDGE</a></li>
                    <li><a href="/petronews">PETRONEWS</a></li>
                    <li><a href="/paper-review">PAPER REVIEW</a></li>
                    <li><a href="/seizeyoursunday">SEIZE YOUR SUNDAY</a></li>
                    <li><a href="/fun-facts">FUNFACT</a></li>
                  </ul>
                </nav>
          </div>
      </div>
    </div>
    </section>
   {{--End of Seize Your Sunday--}}
@endsection
