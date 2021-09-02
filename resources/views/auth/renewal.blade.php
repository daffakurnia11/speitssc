@extends('templates.main')

@section('content')
    
  <section id="authContent" class="d-flex justify-content-center align-items-center">
    <div class="container register-content">
      <h1 class="login-title text-center fw-bold mb-4">Renewal</h1>
      <form action="/renewal" method="POST" enctype="multipart/form-data">
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
          </div>
          <div class="col-sm-6">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <input type="text" name="name" class="form-control mt-3 @error('name') is-invalid @enderror" placeholder="Full Name" value="{{ old('name') }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-12">
            <input type="text" name="student_number" class="form-control mt-3 @error('student_number') is-invalid @enderror" placeholder="NRP / Student Number" value="{{ old('student_number') }}">
            @error('student_number')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <p class="fw-bold register-notes mb-1 mt-3">Upload the screenshot of your Instagram Story & fee payment transaction!</p>
        <div class="mb-3">
          <label class="register-notes mb-2">Please <strong>upload the screenshot of Instagram Story</strong> (<a class="text-small" href="https://speitssc.org/TermsforMember">https://speitssc.org/TermsforMember</a>)</label>
          <input class="form-control @error('screenshot') is-invalid @enderror" type="file" id="formFileMultiple" name="screenshot">
          @error('screenshot')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="register-notes mb-2">Please <strong>upload the screenshot of the fee payment transaction</strong></label>
          <input class="form-control @error('payment') is-invalid @enderror" type="file" id="formFileMultiple" name="payment">
          @error('payment')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="text-center">
          <button type="submit" class="register-button">Renew Membership</button>
        </div>
      </form>
    </div>
    <div class="button-back">
      <i class="fas fa-3x fa-chevron-circle-left" onclick="window.history.back();"></i>
    </div>
  </section>

@endsection