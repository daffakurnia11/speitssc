@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
  @include('templates.footer')
@endsection

@section('title', 'Our Members')

@section('content')

<section id="members-team">
  <div class="container">
    <div class="row" style="text-align:center">
      <div class="col-lg-12 favorite-team">
        <h1>CONGRATULATION!</h1>
        <img src="/img/ourmembers/members-team-appomatox.png">
        <h2>Favorite Winner</h2>
        <p>on PI FAIR 2021</p>    
      </div> 
    </div>
    <div class="row">
      <div class="col-lg-12 gl-team">
        <h1>GOOD LUCK FOR THE TEAM!</h1>
        <div class="row" style="justify-content: center;">
          <div class="col-lg-3 mt-4">
            <div class="owl-carousel owl-theme owl-loaded">
              <div class="owl-stage-outer">
                <div class="owl-stage">
                  <div class="owl-item"><img src="/img/ourmembers/pifair-01.png" class="w-100" alt=""></div>
                  <div class="owl-item"><img src="/img/ourmembers/pifair-02.png" class="w-100" alt=""></div>
                  <div class="owl-item"><img src="/img/ourmembers/pifair-03.png" class="w-100" alt=""></div>
                  <div class="owl-item"><img src="/img/ourmembers/pifair-04.png" class="w-100" alt=""></div>
                </div>
              </div>
            </div>
            <h2>on PI FAIR 2021</h3>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="owl-carousel owl-theme owl-loaded">
              <div class="owl-stage-outer">
                <div class="owl-stage">
                  <div class="owl-item"><img src="/img/ourmembers/GLD_Derrick_1.png" class="w-100" alt=""></div>
                  <div class="owl-item"><img src="/img/ourmembers/GLD_Derrick_2.png" class="w-100" alt=""></div>
                  <div class="owl-item"><img src="/img/ourmembers/GLD_Derrick_3.png" class="w-100" alt=""></div>
                  <div class="owl-item"><img src="/img/ourmembers/GLD_Derrick_4.png" class="w-100" alt=""></div>
                  <div class="owl-item"><img src="/img/ourmembers/GLD_Derrick_5.png" class="w-100" alt=""></div>
                </div>
              </div>
            </div>
            <h2>on DERRICK 2021</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection