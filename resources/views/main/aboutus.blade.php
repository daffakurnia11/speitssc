@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
  @include('templates.footer')
@endsection

@section('content')

    {{-- top-wrapper --}}
    <section id="top-wrappers" class="">
      <div class="container position-relative d-flex align-items-center">
        <h2 class="top-wrapper-title flex-fill text-center">About Us</h2>
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
            <p class="header-desc fs-5">
              The Society of Petroleum Engineers (SPE) is a non-profit professional association whose more  than 158,000 members in 143 countries are engaged in oil and gas exploration and production.<br>
              SPE is a key resource for technical knowledge providing publications, events, training courses, and online resources.
              <br>
              Society of Petroleum Engineers Institut Teknologi Sepuluh Nopember Student Chapter (SPE ITS SC) itself was established in 2011. This organization aims to elevate understanding of the world’s energy sources to each one of its elements by exposing them, starts from the basic knowledge until the advanced technologies and recent developments in the industries. SPE ITS SC intents to become the centerpiece of energy, specifically in the oil and gas industry, where our work is demonstrated professionally are proven internationally through unceasing professional competence.
              <br>
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
            <p class="header-desc fs-5 row-aligns-item-right">
             Advance SPE ITS SC as the finest platform to ingrain global progressive impact through oil and gas 
             industry endeavors in a sustainable manner that elevates knowledge, professionalism, and integrity, while improving relations with members, stakeholders, and communities.<br>
          </div>
          <div class="col-md-7 px-5 px-md-0"> 
            <h2 class="top-wrapper-title">Mission <hr class="tw-line"></h2>
            </p>
            <p class="header-desc fs-5 row-aligns-item-right">
              1. Facilitate and enhance a complete comprehension and exposure of the oil and gas industry, serving as anaccurate career preparation for members and boards.<br>
              2. Stimulate personal development through organizational experience that polishes professionalism and competence.<br>
              3. Guide and facilitate our delegates in preparation of oil and gas related competitions locally and internationally.<br>
              4. Improve relations with companies, stakeholders, communities, SPE International, SPE Java, and other SPE Student Chapters.<br>
              5. Create and maintain a favorable and collaborative working environment that is conducive to progress and productivity.<br>
              6. Increase community involvement through conducting social responsibilities.<br>
            </p>
          </div>
        </div>
      </div>
    </section>
    {{-- End of Team-wrap --}}

    {{-- Organigram --}}
    <section id="organigram" class="org">
      <div>
        <h1 class="timorg">ORGANIGRAM</h1>
        <img src="/img/organ0A1931.png" class="imorg">
      </div>
    </section>
    {{-- End of Organigram --}}

    {{-- Achievements --}}
      <section id="achievements" class="">

        <h2 class="achievements-title flex-fill text-center">OUR ACHIEVEMENTS</h2>
        
        <div class="v5_472">
          <div class="v5_301"></div>
          <div class="v5_539">

            <div class="v5_473">
              </div><div class="v5_474"></div>
              <div class="v5_477"></div>
              <div class="v5_478"></div>
              <span class="v5_479">SPE ITS Student Chapter has earned the Gold Standard Designation for 2015, in Recognition of its  exceptional programs in Industry Engagement, Operations and Planning, Community Involvement,  Professional Development and Innovation</span>
              <span class="v5_480">SPE Gold Standard Designation 2015, SPE International, June 2015</span>
              <div class="name"></div>
            </div>

            <div class="v5_541">
              <div class="v5_482"></div>
              <div class="v5_483"></div>
              <div class="v5_486"></div>
              <div class="v5_487"></div>
              <span class="v5_488">SPE ITS Student Chapter has earned APSC Event, which was the first time in Indonesia</span>
              <span class="v5_489">SPE Asia Pacific SPE Student Conference 2016</span>
              <div class="name"></div>
            </div>

            <div class="v5_543">
              <div class="v5_492"></div>
              <div class="v5_491"></div>
              <div class="v5_495"></div>
              <div class="v5_496"></div>
              <span class="v5_497">SPE ITS Student Chapter has earned the Gold Standard Designation for 2016, in Recognition of its  exceptional programs in Industry Engagement, Operations and Planning, Community Involvement,  Professional Development and Innovation</span>
              <span class="v5_498">SPE Gold Standard Designation 2016, SPE International. June 2016</span>
              <div class="name"></div>
            </div>

            <div class="v5_546">
              <div class="v5_500"></div>
                <div class="v5_501"></div>
                <div class="v5_504"></div>
                <div class="v5_505"></div>
                <span class="v5_506">SPE ITS Student Chapter has earned the Outstanding Student Chapter Award for 2017, in  Recognition of its exceptional programs in Industry Engagement, Operations and  Planning, Communinty Involvement, Professional Development and Innovation</span>
                <span class="v5_507">SPE Outstanding Student Chapter (OSC) Award, SPE International. June 2017</span>
                <div class="name"></div>
              </div>

              <div class="v5_540">
                <div class="v5_509"></div>
                <div class="v5_510"></div>
                <div class="v5_513"></div>
                <div class="v5_514"></div>
                <span class="v5_515">SPE ITS Student Chapter has earned the privilege to host the APSC Event,  which is the only student chapter in Indonesia that have done it</span>
                <span class="v5_516">SPE Asia Pacific SPE Student Conference 2018</span>
                <div class="name"></div>
              </div>

              <div class="v5_542">
                <div class="v5_518"></div>
                <div class="v5_519"></div>
                <div class="v5_522"></div>
                <div class="v5_523"></div>
                <span class="v5_524">SPE ITS Student Chapter has earned the Outstanding Student Chapter Award for 2018,  The Outstanding Student Chapter Award is the highest honor a chapter can receive. In  recognition of its exceptional programs in Industry Engagement, Operations and  Planning, Community Involvement, Professional Development and Innovation</span>
                <span class="v5_525">SPE Outstanding Student Chapter (OSC) Award 2018 , SPE International.</span>
                <div class="name"></div>
              </div>

              <div class="v5_545">
                <div class="v5_527"></div>
                <div class="v5_528"></div>
                <div class="v5_531"></div>
                <div class="v5_532"></div>
                <span class="v5_533">SPE ITS Student Chapter has earned the Excellence Student Chapter Award for 2020, in  Recognition of its exceptional programs in Industry Engagement, Operations and  Planning, Communinty Involvement, Professional Development and Innovation</span>
                <span class="v5_534">SPE Excellence Student Chapter Award 2019, 2020,2021  SPE International.</span>
                <div class="name"></div>
              </div>
            </div>
        </section>
    {{-- End of Achievements --}}
    

@endsection
