@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
  @include('templates.footer')
@endsection

@section('content')

  <header id="competitions-header" style="background: linear-gradient(90deg, #FFD955 37.5%, rgba(255, 255, 255, 0) 100%);">
    <img class="background-header" src="/img/competition-header.jpg" alt="">
    <div class="container d-flex justify-content-center flex-column header">
      <div class="col-lg-6 header-content text-center text-lg-start">
        <h1 class="header-title mb-4">Fracture Fluid Design Competition</h1>
        <p class="header-desc">Our Petrolida’s signature since we are the first and the only body to ever conduct this type of competition since 2018 across Asia Pacific</p>
      </div>
      <i class="fas fa-3x fa-chevron-circle-left"></i>
      <i class="fas fa-3x fa-chevron-circle-right"></i>
    </div>
  </header>

  <section id="competitions-menu">
    <div class="container d-none d-lg-block">
      <ul class="competitions-list d-flex">
        <li class="flex-fill text-center {{ Request::is('competitions/fracture-fluid-design') ? 'active' : '' }}">
          <a href="/competitions/fracture-fluid-design">Fracture Fluid Design</a>
        </li>
        <li class="flex-fill text-center {{ Request::is('competitions/case-study') ? 'active' : '' }}">
          <a href="/competitions/case-study">Case Study</a>
        </li>
        <li class="flex-fill text-center {{ Request::is('competitions/oil-rig-design') ? 'active' : '' }}">
          <a href="/competitions/oil-rig-design">Oil Rig Design</a>
        </li>
        <li class="flex-fill text-center {{ Request::is('competitions/smart') ? 'active' : '' }}">
          <a href="/competitions/smart">Smart</a>
        </li>
        <li class="flex-fill text-center {{ Request::is('competitions/paper') ? 'active' : '' }}">
          <a href="/competitions/paper">Paper</a>
        </li>
        <li class="flex-fill text-center {{ Request::is('competitions/business-case') ? 'active' : '' }}">
          <a href="/competitions/business-case">Business Case</a>
        </li>
        <li class="flex-fill text-center {{ Request::is('competitions/stock-trading') ? 'active' : '' }}">
          <a href="/competitions/stock-trading">Stock Trading</a>
        </li>
      </ul>
    </div>
    <div class="container d-lg-none d-block menu-dropdown">
      <div class="btn-group dropup">
        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          {{ $page_name }}
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/competitions/fracture-fluid-design">Fracture Fluid Design</a></li>
          <li><a class="dropdown-item" href="/competitions/case-study">Case Study</a></li>
          <li><a class="dropdown-item" href="/competitions/oil-rig-design">Oil Rig Design</a></li>
          <li><a class="dropdown-item" href="/competitions/smart">Smart</a></li>
          <li><a class="dropdown-item" href="/competitions/paper">Paper</a></li>
          <li><a class="dropdown-item" href="/competitions/business-case">Business Case</a></li>
          <li><a class="dropdown-item" href="/competitions/stock-trading">Stock Trading</a></li>
        </ul>
      </div>
    </div>
  </section>

  <section id="competitions-content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-9">
          <p class="content-paragraph">
            Fracturing Fluid Design Competition is a competition that challenges participants in finding the perfect mixture of base fluids, chemicals, and proppants according to the given case. Each team which consists of 3 members then presents their fracturing fluid mixture in front of judges. The most optimal mixture, both on the performance and the economic aspect, would be the winner. 
          </p>
        </div>
        <div class="col-lg-3 text-center">
          <img src="/img/petrolida-2022-logo.png" alt="Petrolida 2022 Logo">
        </div>
      </div>
    </div>
  </section>

  <section id="competitions-gallery" style="background: linear-gradient(90deg, rgba(255, 217, 85, 0.32) 0%, #ffd955 23.58%, #ffd955 79.31%, rgba(255, 217, 85, 0.32) 100%);">
    <div class="container gallery">
      <h2 class="text-center gallery-title text-uppercase">Gallery</h2>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 my-3 text-center">
          <img src="/img/competition-header.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-4 col-md-6 my-3 text-center">
          <img src="/img/competition-header.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-4 col-md-6 my-3 text-center">
          <img src="/img/competition-header.jpg" class="gallery-pict" alt="">
        </div>
      </div>
    </div>
  </section>

@endsection