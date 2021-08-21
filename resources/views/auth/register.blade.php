@extends('templates.main')

@section('content')
    
  <section id="authContent" class="d-flex justify-content-center align-items-center">
    <div class="container register-content">
      <h1 class="login-title text-center fw-bold mb-4">Register</h1>
      <form action="">
        <div class="row">
          <div class="col-sm-6">
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
          </div>
          <div class="col-sm-6">
            <input type="text" name="fullname" class="form-control mb-3" placeholder="Full Name">
            <input type="email" name="email" class="form-control mb-3" placeholder="Email">
          </div>
          <div class="col-sm-6">
            <input type="text" name="student_number" class="form-control mb-3" placeholder="NRP / Student Number">
            <input type="email" name="faculty" class="form-control mb-3" placeholder="Faculty" list="faculty">
            <datalist id="faculty">
              <option value="">
            </datalist>
          </div>
          <div class="col-sm-6">
            <input type="email" name="batch" class="form-control mb-3" placeholder="Batch" list="batch">
            <datalist id="batch">
              <option value="">
            </datalist>
            <input type="email" name="major" class="form-control mb-3" placeholder="Major" list="major">
            <datalist id="major">
              <option value="">
            </datalist>
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">
                +62
              </span>
              <input type="text" name="phone" class="form-control" placeholder="Phone">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">
                <i class="fab fa-fw fa-line fa-lg"></i>
              </span>
              <input type="text" name="line_id" class="form-control" placeholder="Line ID">
            </div>
          </div>
        </div>
        <p class="fw-bold register-notes mb-1">Upload the screenshot of your twibbon post & fee payment transaction!</p>
        <div class="mb-3">
          <label class="register-notes mb-2">Please <strong>upload the screenshot of twibbon post</strong> on Instagram</label>
          <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
          <label class="register-notes mb-2">Please <strong>upload the screenshot of the fee payment transaction</strong></label>
          <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
        <div class="text-center">
          <button type="submit" class="register-button">Join Membership</button>
        </div>
      </form>
    </div>
    <div class="button-back">
      <i class="fas fa-3x fa-chevron-circle-left" onclick="window.history.back();"></i>
    </div>
  </section>

@endsection