@extends('templates.main')

@section('content')
    
  <section id="authContent" class="d-flex justify-content-center align-items-center">
    <div class="container register-content">
      <h1 class="login-title text-center fw-bold mb-4">Register</h1>
      <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-fw fa-user"></i>
              </span>
              <input register type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" autofocus value="{{ old('username') }}">
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
              <input register type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <input register type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" placeholder="Full Name" value="{{ old('fullname') }}">
            @error('fullname')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <input register type="email" name="email" class="form-control @error('email') is-invalid @enderror mt-3" placeholder="Email" value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-sm-6">
            <input register type="text" name="student_number" class="form-control @error('student_number') is-invalid @enderror" placeholder="NRP / Student Number" value="{{ old('student_number') }}">
            @error('student_number')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <input register type="text" name="faculty" class="form-control @error('faculty') is-invalid @enderror mt-3" placeholder="Faculty" list="faculty" value="{{ old('faculty') }}">
            <datalist id="faculty">
              <option value="SCIENTICS">FACULTY OF SCIENCE AND DATA ANALYTICS (SCIENTICS)</option>
              <option value="MARTECH">FACULTY OF MARINE TECHNOLOGY (MARTECH)</option>
              <option value="INDSYS">FACULTY OF INDUSTRIAL TECHNOLOGY AND SYSTEMS ENGINEERING (INDSYS)</option>
              <option value="ELECTICS">FACULTY OF INTELLIGENT ELECTRICAL AND INFORMATICS TECHNOLOGY (ELECTICS)</option>
              <option value="CIVPLAN">FACULTY OF CIVIL, PLANNING, AND GEO ENGINEERING (CIVPLAN)</option>
              <option value="CREABIZ">FACULTY OF CREATIVE DESIGN AND DIGITAL BUSINESS (CREABIZ)</option>
              <option value="VOCATION">FACULTY OF VOCATIONAL (VOCATION)</option>
            </datalist>
            @error('faculty')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-sm-6">
            <input register type="text" name="batch" class="form-control @error('batch') is-invalid @enderror" placeholder="Batch (ex : 2021)" list="batch" value="{{ old('batch') }}">
            <datalist id="batch">
              <option value="">
            </datalist>
            @error('batch')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <input register type="text" name="major" class="form-control @error('major') is-invalid @enderror mt-3" placeholder="Major" list="major" value="{{ old('major') }}">
            <datalist id="major">
              <option value="Physics">Physics</option>
              <option value="Mathematics">Mathematics</option>
              <option value="Statistics">Statistics</option>
              <option value="Chemistry">Chemistry</option>
              <option value="Biology">Biology</option>
              <option value="Actuarial Science">Actuarial Science</option>
              <option value="Naval Architecture and Shipbuilding Engineering">Naval Architecture and Shipbuilding Engineering</option>
              <option value="Marine Engineering">Marine Engineering</option>
              <option value="Ocean Engineering">Ocean Engineering</option>
              <option value="Sea Transportation Engineering">Sea Transportation Engineering</option>
              <option value="Offshore Engineering">Offshore Engineering</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <option value="Chemical Engineering">Chemical Engineering</option>
              <option value="Engineering Physics">Engineering Physics</option>
              <option value="Systems and Industrial Engineering">Systems and Industrial Engineering</option>
              <option value="Material Engineering & Metallurgy">Material Engineering & Metallurgy</option>
              <option value="Food Engineering">Food Engineering</option>
              <option value="Electrical Engineering">Electrical Engineering</option>
              <option value="Biomedical Engineering">Biomedical Engineering</option>
              <option value="Computer Engineering">Computer Engineering</option>
              <option value="Informatics">Informatics</option>
              <option value="Information Systems">Information Systems</option>
              <option value="Information Technology">Information Technology</option>
              <option value="Civil Engineering">Civil Engineering</option>
              <option value="Architecture">Architecture</option>
              <option value="Environmental Engineering">Environmental Engineering</option>
              <option value="Regional and Urban Planning">Regional and Urban Planning</option>
              <option value="Geomatics Engineering">Geomatics Engineering</option>
              <option value="Geophysics Engineering">Geophysics Engineering</option>
              <option value="Product Design">Product Design</option>
              <option value="Interior Design">Interior Design</option>
              <option value="Visual Communication Design">Visual Communication Design</option>
              <option value="Business Management">Business Management</option>
              <option value="Developmental Studies">Developmental Studies</option>
              <option value="Technology Management">Technology Management</option>
              <option value="Civil Infrastructure Engineering">Civil Infrastructure Engineering</option>
              <option value="Industrial Mechanical">Industrial Mechanical</option>
              <option value="Automation Electronic Engineering">Automation Electronic Engineering</option>
              <option value="Industrial Chemical Engineering">Industrial Chemical Engineering</option>
              <option value="Instrumentation Engineering">Instrumentation Engineering</option>
              <option value="Business Statistics">Business Statistics</option>
            </datalist>
            @error('major')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-sm-6">
            <div class="input-group my-3">
              <span class="input-group-text" id="basic-addon1">
                +62
              </span>
              <input register type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone" value="{{ old('phone') }}">
              @error('phone')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group my-3">
              <span class="input-group-text" id="basic-addon1">
                <i class="fab fa-fw fa-line fa-lg"></i>
              </span>
              <input register type="text" name="line_id" class="form-control @error('line_id') is-invalid @enderror" placeholder="Line ID" value="{{ old('line_id') }}">
              @error('line_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </div>
        <p class="fw-bold register-notes mb-1">Upload the screenshot of your twibbon post & fee payment transaction!</p>
        <div class="mb-3">
          <label class="register-notes mb-2">Please <strong>upload the screenshot of twibbon post</strong> on Instagram</label>
          <input register class="form-control" type="file" id="formFileMultiple" name="screenshot">
        </div>
        <div class="mb-3">
          <label class="register-notes mb-2">Please <strong>upload the screenshot of the fee payment transaction</strong></label>
          <input register class="form-control @error('payment') is-invalid @enderror" type="file" id="formFileMultiple" name="payment">
          @error('payment')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
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