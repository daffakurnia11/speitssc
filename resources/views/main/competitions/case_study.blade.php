@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
  @include('templates.footer')
@endsection

@section('title', 'Case Study')

@section('content')

  <header id="competitions-header" style="background: linear-gradient(90deg, #F48B29 37.5%, rgba(255, 255, 255, 0) 100%);">
    <img class="background-header" src="/img/competitions/case-study/2. Header Case Study Competition.jpg" alt="">
    <div class="container d-flex justify-content-center flex-column header">
      <div class="col-lg-6 header-content text-center text-lg-start">
        <h1 class="header-title mb-4">Case Study Competitions</h1>
        <p class="header-desc">An ideal competition for those who love to analyze and solve professional cases related to the energy industry by approaching from various aspects.</p>
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
            Case Study Competition is a multi-aspect competition that challenges participants to solve a specific case in the oil and gas industry. Participants have to view the given case from several aspects like effectiveness, efficiency, economic, environment, social, etc. Each team which consists of 3 to 4 members (according to the competition rules and regulations) must pass the essay or abstract selection (preliminary stage), make a project report to solve the final case, and attend the presentation day (final stage) in order to win. By participating in Case Study Competition, you will gain new skills like problem-solving, critical-thinking, public speaking, etc.  
          </p>
        </div>
        {{--
        <div class="col-lg-3 text-center">
          <img src="/img/petrolida-2022-logo.png" alt="Petrolida 2022 Logo">
        </div>
        --}}
        <p class="content-desc">SPE ITS SC’s achievements:</p>
        <ol class="content-list">
          <li> BOREYES 2021 by SPE UNPAD SC (2nd Winner of Case Study Competition)</li>
          <li> PGD UI 2021 by Chemical Engineering Universitas Indonesia (3rd Winner of International Case Study Competition)</li>
          <li> OGIP 2021 by SPE UPNVY SC (3rd Winner of Geothermal Case Study Competition)</li>
          <li> PETROLIDA 2020 by SPE ITS SC (3rd Winner of Case Study Competition)</li>
          <li> APTA Industry Delve by SPE University of Petroleum and Energy Studies SC, India (1st Winner of Business Case Competition)</li>
          <li> SPEEDFEST 2020 by SPE UPN SC (2nd Winner of Case Study Competition)</li>
          <li> IPFEST 2020 by SPE ITB SC (2nd Winner of Business Case Competition)</li>
          <li> PETROFEST 2019 by SPE Java Section (2nd Winner of Case Study Competition)</li>
        </ol>
      </div>
    </div>
  </section>

  <section id="competitions-gallery" style="background: linear-gradient(90deg, rgba(244, 139, 41, 0.32) 0%, #F48B29 23.58%, #F48B29 79.31%, rgba(244, 139, 41, 0.32) 100%);">
    <div class="container gallery">
      <h2 class="text-center gallery-title text-uppercase">Gallery</h2>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/case-study/case1.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/case-study/case2.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/case-study/case3.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/case-study/case4.jpg" class="gallery-pict" alt="">
        </div>
      </div>
    </div>
  </section>

@endsection