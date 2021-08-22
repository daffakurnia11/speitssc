@extends('templates.main')

@section('content')
    
  <section id="authContent" class="d-flex justify-content-center align-items-center">
    <div class="container auth-content">
      <h1 class="login-title text-center fw-bold mb-4">Login</h1>
      
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      
      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      
      <form action="/login" method="POST">
        @csrf
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <i class="fas fa-fw fa-user"></i>
          </span>
          <input required type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" autofocus>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <i class="fas fa-fw fa-lock"></i>
          </span>
          <input required type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
        </div>
        <div class="text-center">
          <a href="" class="text-decoration-underline d-block">Forgot Password?</a>
          <button type="submit" class="login-submit mt-3">Login</button>
          <small class="divider mt-2 mb-4">or</small>
          <a href="/member" class="login-register">Sign up</a>
        </div>
      </form>
    </div>
    <div class="button-back">
      <i class="fas fa-3x fa-chevron-circle-left" onclick="window.history.back();"></i>
    </div>
  </section>

@endsection