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
        </div>
      </div>

      <form action="" method="POST">
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
    </div>
  </section>

@endsection