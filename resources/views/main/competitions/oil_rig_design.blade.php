@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
  @include('templates.footer')
@endsection

@section('content')

  <header id="competitions-header" style="background: linear-gradient(90deg, #D0E8F2 37.5%, rgba(255, 255, 255, 0) 100%);">
    <img class="background-header" src="/img/competition-header.jpg" alt="">
    <div class="container d-flex justify-content-center flex-column header">
      <div class="col-lg-5 header-content text-center text-lg-start">
        <h1 class="header-title mb-4">Oil Rig Design
          Competitions</h1>
      </div>
      <div class="col-lg-7 header-content text-center text-lg-start">
          <p class="header-desc">A perfect competition for those who are eager to apply their engineering knowledge and create innovations for offshore drilling operations.</p>
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
            Oil Rig Design Competition is a competition that challenges participants to combine their engineering sense and creative innovations in designing a semi-submersible oil rig platform for a specific offshore oil field. Each team which consists of 4 to 5 members must pass the project explanation/blueprint selection (preliminary stage), make a 3D video of their semi-submersible platform, and attend the presentation day (final stage). 
          </p>
          <p class="content-desc">SPE ITS SC’s achievements:</p>
          <ol class="content-list">
            <li> BOREYES 2021 by SPE UNPAD SC (1st Winner, 3rd Winner, Favorite Winner of Oil Rig Design Competition)</li>
            <li> OGIP 2021 by SPE UPNVY SC (Favorite Winner of Oil Rig Design Competition)</li>
            <li> PETROLIDA 2020 by SPE ITS SC (2nd Winner, Favorite Winner of Oil Rig Design Competition)</li>
            <li> BOREYES 2020 by SPE UNPAD SC (Favorite Winner of Oil Rig Design Competition)</li>
            <li> PELANTAR 2018 by UiTM Shah Alam Malaysia (2nd Winner of Oil Rig Design Competition)</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  
  <section id="competitions-gallery" style="background: linear-gradient(90deg, #D0E8F2 37.5%, rgba(255, 255, 255, 0) 100%);">
    <div class="container gallery">
      <h2 class="text-center gallery-title text-uppercase">Gallery</h2>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/oil-rig-design/ordc1.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/oil-rig-design/ordc2.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/oil-rig-design/ordc6.jpg" class="gallery-pict" alt="">
        </div>
        <div class="col-lg-3 col-md-6 my-3 text-center">
          <img src="/img/competitions/oil-rig-design/ordc7.jpg" class="gallery-pict" alt="">
        </div>
      </div>
    </div>
  </section>

@endsection