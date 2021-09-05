@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
  @include('templates.footer')
@endsection

@section('content')

  <header id="competitions-header" style="background: linear-gradient(90deg, #C4C4C4 37.5%, rgba(255, 255, 255, 0) 100%);">
    <img class="background-header" src="/img/competition-header.jpg" alt="">
    <div class="container d-flex justify-content-center flex-column header">
      <div class="col-lg-6 header-content text-center text-lg-start">
        <h1 class="header-title mb-4">Smart Competition</h1>
        <p class="header-desc">A perfect platform to kickstart your journey in competitions</p>
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
            Smart Competition is a quick-fire rounds competition that challenges participants’ knowledge in the technical and non-technical aspects of the oil and gas industry. Topic of the questions covers exploration, drilling, production, offshore, and trivia. Each team which consists of 3 members must pass the preliminary, semi-final, and final round in order to win.  
          </p>
        </div>
        {{--
        <div class="col-lg-3 text-center">
          <img src="/img/petrolida-2022-logo.png" alt="Petrolida 2022 Logo">
        </div>
        --}}
        <p class="content-desc">SPE ITS SC’s achievements:</p>
        <ol class="content-list">
          <li> PETROLIDA 2021 by SPE ITS SC (3rd Winner of Smart Competition)</li>
          <li> BOREYES 2021 by SPE UNPAD SC (3rd Winner of Smart Competition)</li>
          <li> BOREYES 2021 by SPE UNPAD SC (3rd Winner of Smart Competition)</li>
          <li> PI FAIR 2019 by SPE Universitas Trisakti SC (3rd Winner of Smart Competition)</li>
          <li> APECX 2019 by SPE UGM SC (3rd Winner of Smart Competition)</li>
        </ol>
      </div>
    </div>
  </section>

  <section id="competitions-gallery" style="background: linear-gradient(90deg, rgba(196, 196, 196, 0.32) 0%, #C4C4C4 23.58%, #C4C4C4 79.31%, rgba(196, 196, 196, 0.32) 100%);">
    <div class="container gallery">
      <h2 class="text-center gallery-title text-uppercase">Gallery</h2>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/smart/smart1.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/smart/smart2.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/smart/smart3.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/smart/smart4.jpg" class="gallery-pict" alt="">
        </div>
      </div>
    </div>
  </section>

@endsection