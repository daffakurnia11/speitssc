@extends('templates.main')

@section('navbar')
    @include('templates.navbar')
@endsection

{{-- @section('footer')
    @include('templates.footer')
@endsection --}}

@section('title', 'Register')

@section('content')
    
  <section id="registerInfo">
    <div class="container-fluid">
      <div class="row info">
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
          <img src="img/phone-mockup.png" alt="SPE ITS SC Mockup Phone" class="info-mockup-img my-3">
        </div>
        <div class="col-lg-6 info-content d-flex align-items-center">
          <div class="container">
            <h1 class="info-title">
              <small>Register as</small><br>
              OUR MEMBER
            </h1>
            <div class="info-benefit mt-3">
              <ul>
                <li>
                  <i class="fas fa-fw fa-lg fa-check-circle"></i>
                  Secured seats in softskill courses, company visits, science courses <strong>for free</strong>
                </li>
                <li>
                  <i class="fas fa-fw fa-lg fa-check-circle"></i>
                  Exclusive <strong>members’ assistance</strong> to facililitate for all SPE needs and networking
                </li>
                <li>
                  <i class="fas fa-fw fa-lg fa-check-circle"></i>
                  Free <strong>coaching</strong> and <strong>materials</strong> for competitions
                </li>
                <li>
                  <i class="fas fa-fw fa-lg fa-check-circle"></i>
                  Free exclusive access to <strong>SPE ITS SC website content:</strong> Academia & Professionalism Guidebooks and Articles
                </li>
                <li>
                  <i class="fas fa-fw fa-lg fa-check-circle"></i>
                  Become a member of <strong>SPE International</strong>
                </li>
                <li>
                  <i class="fas fa-fw fa-lg fa-check-circle"></i>
                  <strong>Free access</strong> to international journals and papers on SPE International
                </li>
                <li>
                  <i class="fas fa-fw fa-lg fa-check-circle"></i>
                  <strong>Discounts</strong> on SPE Merchandise
                </li>
              </ul>
            </div>
            <div class="mt-4 d-flex justify-content-between align-items-center flex-lg-column flex-xl-row flex-md-row flex-column">
              <a href="member/new" class="info-register">Register</a>
              <a href="member/renewal" class="info-renew mt-3">Renew Your Membership</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection