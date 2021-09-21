@extends('templates.main')

@section('navbar')
    @include('templates.navbar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection

@section('content')

  <section id="editProfile">
    <div class="container">
      <div class="d-flex align-items-center my-4">
        <img src="/svg/profile_avatar.svg" class="profile-img" alt="">
        <div class="ms-4">
          <h1 class="profile-name">{{ auth()->user()->name }}</h1>
          <h2 class="profile-desc">{{ auth()->user()->profile->major }}, {{ auth()->user()->profile->batch }}</h2>
          @if (auth()->user()->profile->member_id)
            <p>Member ID : <strong>{{ auth()->user()->profile->member_id }}</strong></p>
          @endif
        </div>
      </div>

      @if (session()->has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <form action="/memberidupdate/{{ auth()->user()->profile->student_number }}" method="POST" enctype="multipart/form-data" class="pb-5">
        @csrf
        @method('PUT')
        <h3 class="mt-4 profile-info">Member ID</h3>
        @if (auth()->user()->file->member_slip)
          <p>Thank you for submitting your member id. Print your Member Card now!</p>
          <div class="mt-3">
            <a href="/membercard/{{ auth()->user()->profile->student_number }}" target="_blank" class="print-button">Print Member Card!</a>
          </div>
        @else
          <div class="row">
            <div class="col-sm-6">
              <div class="mb-3">
                <label class="form-label">SPE Member ID</label>
                <input type="text" class="form-control" name="member_id" placeholder="Drop your Member ID" value="{{ old('member_id') }}">
                @error('member_id')
                <small class="text-danger">
                  {{ $message }}
                </small>
                @enderror
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3">
                <label class="form-label">Invoice SPE Member</label>
                <div class="input-group">
                  <input type="file" class="form-control" name="member_slip" id="inputGroupFile01">
                </div>
                @error('member_slip')
                <small class="text-danger">
                  {{ $message }}
                </small>
                @enderror
              </div>
            </div>
          </div>
          <div class="mt-3">
            <button type="submit" class="float-end update-button">Update Member!</button>
          </div>
        @endif
      </form>

      <form action="" method="POST" class="pb-5">
        @csrf
        @method('PUT')
        {{-- Personal Information --}}
        <h3 class="mt-4 profile-info">Personal Information</h3>
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" value="{{ auth()->user()->name }}">
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="student_number" class="form-label">Student Number</label>
              <input type="text" name="student_number" id="student_number" class="form-control @error('student_number') is-invalid @enderror" placeholder="NRP / Student Number" value="{{ auth()->user()->profile->student_number }}" readonly>
              @error('student_number')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="faculty" class="form-label">Faculty</label>
              <input type="text" name="faculty" class="form-control @error('faculty') is-invalid @enderror" placeholder="Faculty" list="faculty" value="{{ auth()->user()->profile->faculty }}">
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
          </div>
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="major" class="form-label">Major</label>
              <input type="text" name="major" class="form-control @error('major') is-invalid @enderror" placeholder="Major" list="major" value="{{ auth()->user()->profile->major }}">
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
          </div>
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="batch" class="form-label">Batch</label>
              <input type="text" name="batch" id="batch" class="form-control @error('batch') is-invalid @enderror" placeholder="Batch (ex : 2021)" list="batch" value="{{ auth()->user()->profile->batch }}">
              @error('batch')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </div>

        {{-- Personal Contact --}}
        <h3 class="mt-4 profile-info">Personal Contact</h3>
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Full email" value="{{ auth()->user()->email }}" readonly>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                  +62
                </span>
                <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone" value="{{ auth()->user()->profile->phone }}">
                @error('phone')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="mb-3">
              <label for="line_id" class="form-label">Line ID</label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                  <i class="fab fa-fw fa-line fa-lg"></i>
                </span>
                <input type="text" name="line_id" id="line_id" class="form-control @error('line_id') is-invalid @enderror" placeholder="Line ID" value="{{ auth()->user()->profile->line_id }}">
                @error('line_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
          </div>
        </div>
        <button class="float-end update-button">Update Profile!</button>
      </form>

      <form action="/changepass" method="POST">
        @csrf
        @method('PUT')
        {{-- Password Configuration --}}
        <h3 class="mt-4 profile-info">Password Configuration</h3>
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="mb-3">
              <label for="oldpass" class="form-label">Old Password</label>
              <input type="password" name="oldpass" id="oldpass" class="form-control @error('oldpass') is-invalid @enderror" placeholder="Enter your old password">
              @error('oldpass')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="mb-3">
              <label for="password1" class="form-label">New Password</label>
              <input type="password" name="password1" id="password1" class="form-control @error('password1') is-invalid @enderror" placeholder="Enter your new password">
              @error('password1')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="mb-3">
              <label for="password2" class="form-label">Repeat Password</label>
              <input type="password" name="password2" id="password2" class="form-control @error('password2') is-invalid @enderror" placeholder="Enter your new password again">
              @error('password2')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </div>
        <button class="float-end update-button">Update Password!</button>
      </form>
    </div>
  </section>

@endsection