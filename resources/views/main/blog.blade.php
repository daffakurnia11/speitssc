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
              <a class="nav-link mx-auto" href="#" data-toggle="tab" role="tab">PETRONEWS</a>
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
      <div class="container-md">
        <div class="row text-center">
          <div class="col">
            <h1 class="announcement">No Content Available</h1>
          </div>
        </div>
        {{--
        <div class="row">
          
          <div class="col-md-6">
            <div class="row">
              <div class="col-6-sm col-md-12">
                <h1 class="petroknowledge-title">Oil and Gas Pipeline</h1>
              </div>
              <div class="col-6-sm col-md-12">
                <p class="petroknowledge-desc">
                  Sometimes, the source and processing unit are not in one place. For example, the refinery unit is very far from the place where the fluid source is, therefore it is necessary to make a pipeline that connects the two facilities, this is known as a pipeline.
                </p>
              </div>
              <div class="col-6-sm col-md-12">
                <p class="petroknowledge-date">
                  . August 13, 2021
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="articel-logo">
              <img src="img/oil_and_gas.png" alt="Oil and Gas">
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="articel-logo-spe">
              <img src="img/logo-small.png" alt="logo spe">
            </div>
          </div>
        </div>
      
        --}}
      </div>
    </section>
    {{--End of Section Petroknowledge--}}
    
@endsection