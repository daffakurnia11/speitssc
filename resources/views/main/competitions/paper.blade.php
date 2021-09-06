@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
  @include('templates.footer')
@endsection

@section('content')

  <header id="competitions-header" style="background: linear-gradient(90deg, #F2E7DC 37.5%, rgba(255, 255, 255, 0) 100%);">
    <img class="background-header" src="/img/competition-header.jpg" alt="">
    <div class="container d-flex justify-content-center flex-column header">
      <div class="col-lg-6 header-content text-center text-lg-start">
        <h1 class="header-title mb-4">Paper Competition</h1>
        <p class="header-desc">A suitable competition for those who love to do scientific research</p>
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
            Paper Competition is a competition that challenges participants to apply their knowledge in the oil and gas industry and their ability in conducting scientific research in order to bring new and intriguing innovations for the energy industry. Each team which consists of 3 members must pass the abstract selection (preliminary stage), make a paper based on the submitted abstract, and attend the presentation day (final stage) in order to win. 
          </p>
        </div>
        {{--
        <div class="col-lg-3 text-center">
          <img src="/img/petrolida-2022-logo.png" alt="Petrolida 2022 Logo">
        </div>
        --}}
        <p class="content-desc">SPE ITS SC’s achievements:</p>
        <ol class="content-list">
          <li> PETROLIDA 2021 by SPE ITS SC (2nd Winner of Paper Competition)</li>
          <li> BOREYES 2021 by SPE UNPAD SC (Favorite Winner of Paper & Poster Competition)</li>
          <li> PETROLIDA 2020 by SPE ITS SC (3rd Winner of Paper Competition)</li>
          <li> APECX 2020 by SPE UGM SC (Best Poster of Paper & Poster Competition)</li>
          <li> SPE University of Petroleum and Energy Studies SC 2019, India (1st Winner in of Paper Competition Category Exploration, 1st Winner of Paper Competition Category Health Safety Environment, 2nd Winner of Paper Competition Category Reservoir, 3rd Winner of Paper Competition Category Production)</li>
          <li> SPE Petroleum-Gas University of Ploiesti SC 2019, Romania (1st Winner of Paper & Poster Competition)</li>
          <li> Oil & Gas Horizons XI, Russia (1st Winner of Paper Competition)</li>
        </ol>
      </div>
    </div>
  </section>

  <section id="competitions-gallery" style="background: linear-gradient(90deg, rgba(242, 231, 220, 0.32) 0%, #F2E7DC 23.58%, #F2E7DC 79.31%, rgba(242, 231, 220, 0.32) 100%);">
    <div class="container gallery">
      <h2 class="text-center gallery-title text-uppercase">Gallery</h2>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/paper/paper1.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/paper/paper2.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/paper/paper3.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/paper/paper4.jpeg" class="gallery-pict" alt="">
        </div>
      </div>
    </div>
  </section>

@endsection