@extends('templates.main')

@section('content')
  <section id="errors" class="d-flex align-items-center">
    <div class="container text-center">
      <img src="/img/svgs/maintenance.svg" class="mb-4" alt="">
      <h1>
        <span class="d-block text-name">Under maintenance</span>
      </h1>
      <p class="text-desc mx-auto mt-4">Our website is currently undergoing scheduled maintenance. We should be back shortly. Thank you for your patience.</p>
    </div>
  </section>
@endsection