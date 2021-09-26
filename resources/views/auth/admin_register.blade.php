@extends('templates.main')

@section('content')
    
  <section id="authContent" class="d-flex justify-content-center align-items-center">
    <div class="container register-content">
      <h1 class="login-title text-center fw-bold mb-4">Admin Request Form</h1>
      <form action="/requestadmin" method="POST">
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-fw fa-user"></i>
              </span>
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" autofocus value="{{ old('username') }}">
              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <input type="text" name="name" class="form-control mt-3 @error('name') is-invalid @enderror" placeholder="Full Name" value="{{ old('name') }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-fw fa-lock"></i>
              </span>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-fw fa-lock"></i>
              </span>
              <input type="password" name="password2" class="form-control @error('password2') is-invalid @enderror" placeholder="Repeat Password">
              @error('password2')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="register-button">Request Now!</button>
        </div>
      </form>
    </div>
    <div class="button-back">
      <i class="fas fa-3x fa-chevron-circle-left" onclick="window.history.back();"></i>
    </div>
  </section>

@endsection