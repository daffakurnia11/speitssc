@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
  @include('templates.footer')
@endsection

@section('title', 'Business Case')
@section('content')
    

  <header id="competitions-header" style="background: linear-gradient(90deg, #83AFB8 37.5%, rgba(255, 255, 255, 0) 100%);">
    <img class="background-header" src="/img/competitions/business-case/6. Header Business Case Competition.jpg" alt="">
    <div class="container d-flex justify-content-center flex-column header">
      <div class="col-lg-7 header-content text-center text-lg-start">
        <h1 class="header-title mb-4">Business Case Competitions</h1>
        <p class="header-desc">A brand-new competition held by our Petrolida in 2021 that successfully obtain high enthusiasm among undergraduate students across Indonesia</p>
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
        <div class="col-lg-12">
          <p class="content-paragraph">
            Business Case Competition is a competition that challenges participants in determining the best strategy for a specific business-related case in order to adapt to current trend change or to maintain current business model and strategy. Each team which consists of 3 members must pass several competition stages in order to win. 
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="competitions-gallery" style="background: linear-gradient(90deg, #83AFB8 37.5%, rgba(255, 255, 255, 0) 100%);">
    <div class="container gallery">
      <h2 class="text-center gallery-title text-uppercase">Gallery</h2>
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-4 col-md-6 my-3 text-center">
          <img src="/img/competitions/business-case/business_case0.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-4 col-md-6 my-3 text-center">
          <img src="/img/competitions/business-case/business_case1.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-4 col-md-6 my-3 text-center">
          <img src="/img/competitions/business-case/business_case2.jpg" class="gallery-pict" alt="">
        </div>
      </div>
    </div>
  </section>

@endsection