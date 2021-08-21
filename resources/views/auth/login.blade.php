@extends('templates.main')

@section('content')
    
  <section id="authContent" class="d-flex justify-content-center align-items-center">
    <div class="container auth-content">
      <h1 class="login-title text-center fw-bold mb-4">Login</h1>
      <form action="">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <i class="fas fa-fw fa-user"></i>
          </span>
          <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <i class="fas fa-fw fa-lock"></i>
          </span>
          <input type="password" name="username" class="form-control" placeholder="Password">
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