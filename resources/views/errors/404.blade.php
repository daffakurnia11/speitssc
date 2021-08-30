@extends('templates.main')

@section('content')
  <section id="errors" class="d-flex align-items-center">
    <div class="container text-center">
      <h1>
        <span class="d-block text-404">404</span>
        <span class="d-block text-name">Page not found</span>
      </h1>
      <p class="text-desc mx-auto mt-4">Looks like the page you are looking for has been removed or does not exist</p>
    </div>
  </section>
@endsection