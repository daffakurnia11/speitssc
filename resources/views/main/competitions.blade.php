@extends('templates.main')

@section('navbar')
    @include('templates.navbar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection

@section('content')

  <section id="competitions-header" style="background: linear-gradient(90deg, #FFD955 37.5%, rgba(255, 255, 255, 0) 100%);">
    <img class="background-header" src="/img/competition-header.jpg" alt="">
    <div class="container d-flex justify-content-center flex-column header">
      <div class="col-lg-6 header-content">
        <h1 class="header-title mb-4">Fracture Fluid Design Competition</h1>
        <p class="header-desc">Our Petrolida’s signature since we are the first and the only body to ever conduct this type of competition since 2018 across Asia Pacific</p>
      </div>
      <i class="fas fa-3x fa-chevron-circle-left"></i>
      <i class="fas fa-3x fa-chevron-circle-right"></i>
    </div>
  </section>

  <section id="competitions-menu">
    <div class="container">
      <ul class="competitions-list d-flex">
        <li class="flex-fill text-center active">Fracture Fluid Design</li>
        <li class="flex-fill text-center">Paper</li>
        <li class="flex-fill text-center">Smart</li>
        <li class="flex-fill text-center">Case Study</li>
        <li class="flex-fill text-center">Business Case</li>
        <li class="flex-fill text-center">Oil Rig Design</li>
        <li class="flex-fill text-center">Stock Trading</li>
      </ul>
    </div>
  </section>

@endsection