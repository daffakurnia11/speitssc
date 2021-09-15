@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
  @include('templates.footer')
@endsection

@section('content')

    {{-- top-wrapper --}}
    <section id="top-wrappers" class="about-header">
      <div class="container position-relative d-flex align-items-center">
        <h1 class="top-wrapper-title flex-fill text-center">About Us</h1>
      </div>
    </section>
    {{-- End of top-wrapper --}}

    {{-- 2nd-Wrapper --}}
    <header class="about-header">
      <div class="container d-flex align-items-center flex-column">
        <div class="row align-items-center">
          <div class="col-md-5 text-center">
            <img src="/img/logo.png" alt="SPE ITS SC Logo" class="header-logo">
          </div>
          <div class="col-md-7 px-5 px-md-0">
            <h1 class="one-piece">Who We Are</h1>
            <p class="header-desc fs-5" style="text-align: justify">
              The Society of Petroleum Engineers (SPE) is a non-profit professional association whose more  than 158,000 members in 143 countries are engaged in oil and gas exploration and production.<br>
              SPE is a key resource for technical knowledge providing publications, events, training courses, and online resources.
              <br>
              Society of Petroleum Engineers Institut Teknologi Sepuluh Nopember Student Chapter (SPE ITS SC) itself was established in 2011. This organization aims to elevate understanding of the world’s energy sources to each one of its elements by exposing them, starts from the basic knowledge until the advanced technologies and recent developments in the industries. SPE ITS SC intents to become the centerpiece of energy, specifically in the oil and gas industry, where our work is demonstrated professionally are proven internationally through unceasing professional competence.
              <br>
            </p>  
            <p>
              <img src="/img/handsign.png" class="signature">
            </p>
          </div>
        </div>
      </div>
    </header>
    {{-- End of 2nd-Wrapper --}}

    {{-- Tagline --}}
    <section id="tagline">
      <div class="container">
        <div class="container position-relative d-flex align-items-center">
            <h2 class="tagline-title flex-fill text-center">#LeadTheChange</h2>
        </div>
      </div>
    </section>
    {{-- End of Tagline --}}

    {{-- Team-wrap --}}
    <section id="team-wrap" class="about-header">
      <div class="container d-flex align-items-center flex-column">
        <div class="row align-items-center">
          <div class="col-md-7 px-5 px-md-0">
            <h2 class="top-wrapper-title">Vision <hr class="tw-line"></h2>
            <p class="header-desc fs-5 row-aligns-item-right" style="text-align: justify">
             Advance SPE ITS SC as the finest platform to ingrain global progressive impact through oil and gas 
             industry endeavors in a sustainable manner that elevates knowledge, professionalism, and integrity, while improving relations with members, stakeholders, and communities.<br>
          </div>
          <div class="col-md-7 px-5 px-md-0"> 
            <h2 class="top-wrapper-title">Mission <hr class="tw-line"></h2>
            </p>
            <p class="header-desc fs-5 row-aligns-item-right">
              <ol class="header-desc"  style="text-align: justify"> 
                <li>Facilitate and enhance a complete comprehension and exposure of the oil and gas industry, serving as anaccurate career preparation for members and boards.</li>
                <li>Stimulate personal development through organizational experience that polishes professionalism and competence.</li>
                <li>Guide and facilitate our delegates in preparation of oil and gas related competitions locally and internationally.</li>
                <li>Improve relations with companies, stakeholders, communities, SPE International, SPE Java, and other SPE Student Chapters.</li>
                <li>Create and maintain a favorable and collaborative working environment that is conducive to progress and productivity.</li>
                <li>Increase community involvement through conducting social responsibilities.</li>
              </ol>
            </p>
          </div>
        </div>
      </div>
    </section>
    {{-- End of Team-wrap --}}

    {{-- Organigram --}}
    <section id="organigram" class="org">
      <div class="container text-center">
        <h1 class="timorg">ORGANIGRAM</h1>
        <div class="org-img">
          <img src="/img/organ0A1931.png" class="imorg">
        </div>
      </div>
    </section>
    {{-- End of Organigram --}}

    {{-- Achievements --}}
    <section id="achievements" class="achieve">
      <div class="achievement-header">
        <div class="row">
          <div class="col-6 header">
            <div class="container">
              <h1 class="header-title-achievement">OUR ACHIEVEMENTS</h1>
            </div>
          </div>
        </div>
      </div>
        
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row row-achievement">
              <div class="col-5 box">
                <h1 class="title">SPE Gold Standard Designation 2015, SPE International, June 2015</h1>
                <p class="desc">SPE ITS Student Chapter has earned the Gold Standard Designation for 2015, in Recognition of its  exceptional programs in Industry Engagement, Operations and Planning, Community Involvement,  Professional Development and Innovation</p>
              </div>
              <div class="col-5 box">
                <h1 class="title">SPE Asia Pacific SPE Student Conference 2018</h1>
                <p class="desc">SPE ITS Student Chapter has earned the privilege to host the APSC Event,  which is the only student chapter in Indonesia that have done it</p>
              </div>
            </div>
            <div class="row row-achievement">
              <div class="col-5 box">
                <h1 class="title">SPE Asia Pacific SPE Student Conference 2016</h1>
                <p class="desc">SPE ITS Student Chapter has earned APSC Event, which was the first time in Indonesia</p>
              </div>
              <div class="col-5 box">
                <h1 class="title">SPE Outstanding Student Chapter (OSC) Award 2018 , SPE International.</h1>
                <p class="desc">SPE ITS Student Chapter has earned the Outstanding Student Chapter Award for 2018,  The Outstanding Student Chapter Award is the highest honor a chapter can receive. In  recognition of its exceptional programs in Industry Engagement, Operations and  Planning, Community Involvement, Professional Development and Innovation</p>
              </div>
            </div>
            <div class="row row-achievement">
              <div class="col-5 box">
                <h1 class="title">SPE Gold Standard Designation 2016, SPE International. June 2016</h1>
                <p class="desc">SPE ITS Student Chapter has earned the Gold Standard Designation for 2016, in Recognition of its  exceptional programs in Industry Engagement, Operations and Planning, Community Involvement,  Professional Development and Innovation
                </p>
              </div>
              <div class="col-5 box">
                <h1 class="title">SPE Excellence Student Chapter Award 2019, 2020,2021  SPE International.</h1>
                <p class="desc">SPE ITS Student Chapter has earned the Excellence Student Chapter Award for 2020, in  Recognition of its exceptional programs in Industry Engagement, Operations and  Planning, Communinty Involvement, Professional Development and Innovation</p>
              </div>
              <div class="row row-achievement" style="margin-bottom: 50px">
                <div class="col-5 box">
                  <h1 class="title">SPE Outstanding Student Chapter (OSC) Award, SPE International. June 2017</h1>
                  <p class="desc">SPE ITS Student Chapter has earned the Outstanding Student Chapter Award for 2017, in  Recognition of its exceptional programs in Industry Engagement, Operations and  Planning, Communinty Involvement, Professional Development and Innovation
                  </p>
                </div>
                <div class="col-5 box-inform">
                  <h2 class="information text-center">More info about our achievements: <a href="https://www.spe.org" target="_blank">spe.org</a></h2>
                </div>
            </div>
          </div>
        </div>
      </div>
        {{--
        <div class="achievement-boxes">
          <div class="row left">
            <div class="col-sm-12 box-left">
              <div class="row">
                <div class="col-1">
                  <img src="img/achievement.png" alt="achievement" class="logo-achievement-left">
                </div>
                <div class="col-10 px-4">
                  <h1 class="box-title-left">SPE Gold Standard Designation 2015, SPE International, June 2015<hr class="box-line-left"></h1>
                  <p class="box-desc-left">SPE ITS Student Chapter has earned the Gold Standard Designation for 2015, in Recognition of its  exceptional programs in Industry Engagement, Operations and Planning, Community Involvement,  Professional Development and Innovation</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row right">
            <div class="col-sm-12 box-right">
              <div class="row">
                <div class="col-10 px-4">
                  <h1 class="box-title-right">SPE Asia Pacific SPE Student Conference 2018<hr class="box-line-right"></h1>
                  <p class="box-desc-right">SPE ITS Student Chapter has earned the privilege to host the APSC Event,  which is the only student chapter in Indonesia that have done it
                  </p>
                </div>
                <div class="col-1">
                  <img src="img/achievement.png" alt="achievement" class="logo-achievement-right">
                </div>
              </div>
            </div>
          </div>
        
          <div class="row left">
            <div class="col-12 box-left">
              <div class="row">
                <div class="col-1">
                  <img src="img/achievement.png" alt="achievement" class="logo-achievement-left">
                </div>
                <div class="col-10 px-4">
                  <h1 class="box-title-right">SPE Asia Pacific SPE Student Conference 2016<hr class="box-line-left"></h1>
                  <p class="box-desc-right">SPE ITS Student Chapter has earned APSC Event, which was the first time in Indonesia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row right">
            <div class="col-12 box-right">
              <div class="row">
                <div class="col-10 px-4">
                  <h1 class="box-title-right">SPE Outstanding Student Chapter (OSC) Award 2018 , SPE International.<hr class="box-line-right"></h1>
                  <p class="box-desc-right">SPE ITS Student Chapter has earned the Outstanding Student Chapter Award for 2018,  The Outstanding Student Chapter Award is the highest honor a chapter can receive. In  recognition of its exceptional programs in Industry Engagement, Operations and  Planning, Community Involvement, Professional Development and Innovation
                  </p>
                </div>
                <div class="col-1">
                  <img src="img/achievement.png" alt="achievement" class="logo-achievement-right">
                </div>
              </div>
            </div>
          </div>
          
          <div class="row left">
            <div class="col-12 box-left">
              <div class="row">
                <div class="col-1">
                  <img src="img/achievement.png" alt="achievement" class="logo-achievement-left">
                </div>
                <div class="col-10 px-4">
                  <h1 class="box-title-left">SPE Gold Standard Designation 2016, SPE International. June 2016<hr class="box-line-left"></h1>
                  <p class="box-desc-left">SPE ITS Student Chapter has earned the Gold Standard Designation for 2016, in Recognition of its  exceptional programs in Industry Engagement, Operations and Planning, Community Involvement,  Professional Development and Innovation
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row right">
            <div class="col-12 box-right">
              <div class="row">
                <div class="col-10 px-4">
                  <h1 class="box-title-right">SPE Excellence Student Chapter Award 2019, 2020,2021  SPE International.<hr class="box-line-right"></h1>
                  <p class="box-desc-right">SPE ITS Student Chapter has earned the Excellence Student Chapter Award for 2020, in  Recognition of its exceptional programs in Industry Engagement, Operations and  Planning, Communinty Involvement, Professional Development and Innovation</p>
                </div>
                <div class="col-1">
                  <img src="img/achievement.png" alt="achievement" class="logo-achievement-right">
                </div>
              </div>
            </div>
          </div>
          <div class="row left">
            <div class="col-12 box-left">
              <div class="row">
                <div class="col-1">
                  <img src="img/achievement.png" alt="achievement" class="logo-achievement-left">
                </div>
                <div class="col-10 px-4">
                  <h1 class="box-title-left">SPE Outstanding Student Chapter (OSC) Award, SPE International. June 2017<hr class="box-line-left"></h1>
                  <p class="box-desc-left">SPE ITS Student Chapter has earned the Outstanding Student Chapter Award for 2017, in  Recognition of its exceptional programs in Industry Engagement, Operations and  Planning, Communinty Involvement, Professional Development and Innovation</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        --}}
      
    </section>
  {{-- End of Achievements --}}
    
@endsection
