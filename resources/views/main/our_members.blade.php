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
{{-- members leaderboard --}}
<section id="members-leaderboard">
  <div class="container">
    <div>
      <p class="teks">Members Leaderboard</p>
    </div>
    <img class="gambar" src="img/Vector.png" alt="members-leaderboard" width="300px" />
    {{-- Mengurutkan data mulai dari angka 1 --}}
    <?php $counter = 1; ?> 
    {{-- Jika dia lebih dari 3 dia akan ngeprint 0, jika tidak lebih dari sama dengan 3 dia ngeprint counter --}}
    @foreach($points as $point)
    <div class="row" style="margin-top: 20px;">
      <div class="col-1">
        <div class="leaderboard<?php 
          if ($counter > 3) echo '';
          else echo $counter;
          ?>">
          <h5>{{ $counter++ }}</h5>
        </div>
      </div>
      <div class="col-6">
        <div class="name">
          <h3>{{ $point->user->name }}  </h3>
        </div>
      </div>
      <div class="col-4">
        <div class="point">
          <h3>{{ $point->point }}</h3>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>


{{-- #Member's Articles --}}
<section id='members-article'>
  <div class="container">
    <div class="col-6 px-2 box">
      <h1 class="teks">Members Articles</h1>
    </div>
  </div>  
  @if ($articles->isNotEmpty())
  @foreach ($articles as $article)
    <div class="row membarticles my-4">
      <div class="col-md-8 content order-2 order-md-1">
        <div class="row">
          <div class="col-6-sm col-md-12">
            <h1 class="membarticle-title">{{ $article->title}}</h1>
          </div>
          <div class="col-6-sm col-md-12 ">
            <p class="membarticle-desc">{{ $article->description}}</p>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-4">
            <p class="membarticle-date p-0 m-0">{{ $article->published_at->diffForHumans()}}</p>
            <a href="/article/{{$article->slug}}" class="btn membarticle-read-more m-0">READ MORE</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 order-1 order-md-2">
        <div class="text-center">
          <img class="image article-logo align-middle mb-3 d-inline" src="/img/article/{{ $article->image}}" alt="minyak bumi">
        </div>
      </div>
    </div>
  @endforeach
  @else 
    <h1 class="announcement">No Content Available</h1>
  @endif 
</section>
@endsection
