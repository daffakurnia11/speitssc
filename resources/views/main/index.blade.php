@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
  @include('templates.footer')
@endsection

@section('scroll')
  <section id="scroll-to-top">
    <i class="fas fa-chevron-up fa-2x scroll-button"></i>
  </section>
@endsection

@section('content')
    
    {{-- Header --}}
    <header class="main-header">
      <div class="container d-flex align-items-center flex-column">
        <div class="row align-items-center">
          <div class="col-md-5 text-center">
            <img src="/img/logo_yellow.png" alt="SPE ITS SC Logo" class="header-logo">
          </div>
          <div class="col-md-7 px-5 px-md-0">
            <h1 class="header-title my-4">
              Society of Petroleum Engineers<br>
              Institut Teknologi Sepuluh Nopember<br>
              Student Chapter
            </h1>
            <p class="header-desc fs-5">
              The largest and the most prestigious student-led organization that encourages students professional development through engagement in the oil and gas industry
            </p>
          </div>
        </div>
      </div>
    </header>
    {{-- End of Header --}}

    {{-- Upcoming Events --}}
    <section id="upcoming-events">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="row">
              <div class="col-sm-6 col-md-12">
                <h2 class="upcoming-events-title fw-bolder mx-auto">Learn<br>with SPE</h2>
              </div>
              <div class="col-sm-6 col-md-12">
                <p class="upcoming-events-desc text-justify mt-4 mb-5 mx-auto">Develop crucial skills and learn with SPE ITS SC through our events, from <strong>Company Visits to Competition 101</strong>.</p>
                <div class="text-center text-start">
                  <a href="/member" class="upcoming-events-button">Sign up as member</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <h3 class="text-center mt-5 mt-md-0">See our upcoming events!</h3>
            <div class="row justify-content-center">
              <div class="col-sm-6">
                <a href="https://drive.google.com/file/d/1fu3z5_UG-EPOWsBOYjlt9Vwy3pv1RZQ3/view" target="_blank">
                  <div class="events mx-auto my-3">
                    <img src="/img/event/petrolida-oprec.jpg" class="events-img" alt="">
                    <div class="events-content">
                      <span class="events-date">October 2nd, 2021</span>
                      <h4 class="events-name">Petrolida Recruitment</h4>
                    </div>
                  </div>
                </a>
              </div>
              {{-- <div class="col-sm-6">
                <a href="">
                  <div class="events mx-auto my-3">
                    <img src="/img/event/softskills-course.jpg" class="events-img" alt="">
                    <div class="events-content">
                      <span class="events-date">September 25th, 2021</span>
                      <h4 class="events-name">Softskills Course</h4>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-6">
                <a href="">
                  <div class="events mx-auto my-3">
                    <img src="/img/event/company-visit.jpg" class="events-img" alt="">
                    <div class="events-content">
                      <span class="events-date">September 25th, 2021</span>
                      <h4 class="events-name">Company Visit (inSPEct)</h4>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-6">
                <a href="">
                  <div class="events mx-auto my-3">
                    <img src="/img/event/finesse-series.jpg" class="events-img" alt="">
                    <div class="events-content">
                      <span class="events-date">September 25th, 2021</span>
                      <h4 class="events-name">FINESSE Series</h4>
                    </div>
                  </div>
                </a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- End of Upcoming Events --}}

    {{-- Blogs --}}
    {{-- <section id="main-blogs">
      <div class="container my-5">
        <h2 class="blogs-header text-center my-4 fw-bolder mx-auto">Stay Informed with Our Blog</h2>
        <div class="row">
          <div class="col-sm-6 col-md-4 my-3">
            <div class="blogs-summary mx-auto text-center">
              <img src="https://source.unsplash.com/250x150/?oil" alt="" class="blogs-pict">
            </div>
          </div>
          <div class="col-sm-6 col-md-4 my-3">
            <div class="blogs-summary mx-auto text-center">
              <img src="https://source.unsplash.com/250x150/?oil" alt="" class="blogs-pict">
            </div>
          </div>
          <div class="col-sm-6 col-md-4 my-3">
            <div class="blogs-summary mx-auto text-center">
              <img src="https://source.unsplash.com/250x150/?oil" alt="" class="blogs-pict">
            </div>
          </div>
          <div class="col-sm-6 col-md-4 my-3">
            <div class="blogs-summary mx-auto text-center">
              <img src="https://source.unsplash.com/250x150/?oil" alt="" class="blogs-pict">
            </div>
          </div>
          <div class="col-sm-6 col-md-4 my-3">
            <div class="blogs-summary mx-auto text-center">
              <img src="https://source.unsplash.com/250x150/?oil" alt="" class="blogs-pict">
            </div>
          </div>
          <div class="col-sm-6 col-md-4 my-3">
            <div class="blogs-summary mx-auto text-center">
              <img src="https://source.unsplash.com/250x150/?oil" alt="" class="blogs-pict">
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    {{-- End of Blogs --}}

    {{-- Become a Member --}}
    <section id="main-members">
      <div class="container">
        <div class="row align-content-center">
          <div class="col-md-4 text-center">
            <h2 class="members-title mb-5">Become a Member</h2>
            <a href="/member" class="members-register">Sign-up</a>
          </div>
          <div class="col-md-8 mt-4 mt-md-0">
            <p class="members-desc fs-5 px-4">
              We encourage you to join us as a member of SPE ITS SC in this journey of professional and academic development, leading the change in the evolving oil and gas industry that’s entering a digital era through the industrial revolution 5.0.
            </p>
            <p class="members-desc fs-5 px-4">
              Being a member grants you numerous benefits, including free exclusive access to all of SPE ITS SC materials and articles, secured seats in our events, delegates facilities, and assisting community.
            </p>
          </div>
        </div>
      </div>
    </section>
    {{-- End of Become a Member --}}

    {{-- Our Members --}}
    <section id="our-members" class="">
      <div class="container position-relative d-flex align-items-center">
        <h2 class="our-members-title flex-fill text-center">Our Members</h2>
        <img class="our-members-logo" src="img/logo_yellow.png" alt="SPE ITS SC Logo">
      </div>
    </section>
    {{-- End of Our Members --}}

    {{-- Testimonials --}}
    <section id="testimonials">
      <h2 class="testimonials-title text-center">What They Say?</h2>
      <div class="member-section">
        <div class="container">
          <h3 class="testimonials-section">SPE Members</h3>
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
              <div class="testimonials-content mx-2 mb-4">
                <p class="text-justify testimonials-said">
                  Being a member of SPE ITS SC undeniably gave me tons of new experience and insights. I have gained many soft skills by participating in webinars or events with useful topics that were informed almost weekly to members. Other than that, all competitions with related fields as well as the oil and gas industry were always notified hence members were never outdated and able to contribute to one. Furthermore, materials needed in order to win these competitions were also given to each member. Therefore, I could say that being a member of SPE ITS Student Chapter undoubtedly benefits me for now and in the future.​
                </p>
                <p class="text-end">
                  <strong>- Awandhana Anggi, Geomatics Engineering 2020</strong>​
                </p>
                <img src="svg/quotes-left.svg" class="testimonials-quotes" alt="">
                <img src="svg/quotes-right.svg" class="testimonials-quotes" alt="">
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="testimonials-content mx-2 mb-4">
                <p class="text-justify testimonials-said">
                  Being a member of SPE ITS SC is the best decision I’ve ever made. At first, I didn’t know where to begin to learn about oil and gas, but SPE ITS SC provided me with everything that I needed. I didn’t just learn “what” the oil and gas industry is – “how” and “why” also became much clearer and I eventually gained enough courage to become a delegate, participating in some competitions. But it wasn’t just about the knowledge. The main benefits came from participating in many SPE ITS SC events such as company visits, soft skill courses, and many more. And we can even meet a lot of exciting new people to expand relations!
                </p>
                <p class="text-end">
                  <strong>- Safira Khairunnisa, Engineering Phyiscs 2020</strong>​
                </p>
                <img src="svg/quotes-left.svg" class="testimonials-quotes" alt="">
                <img src="svg/quotes-right.svg" class="testimonials-quotes" alt="">
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="testimonials-content mx-2 mb-4">
                <p class="text-justify testimonials-said">
                  When I was a freshman, SPE ITS SC became my first place to develop myself and I am so grateful for that. SPE ITS SC shows me the beauty of research and scientific competition that becomes my main interest. At first, I thought SPE ITS SC just provided knowledge, but as the time goes by, this organization also encourage me to join the competition, enhance my soft skills, and also experience. By being a member of SPE ITS SC, I get lots of benefits from their events such as science course, soft skill course, and competition 101. So, If you are interested in the oil and gas sector or even just want to expand your relation, want to enhance your soft skills, and broaden your knowledge, don't wait for another second to join SPE ITS SC!
                </p>
                <p class="text-end">
                  <strong>- Adiv Gayu, Ocean Engineering 2019</strong>​
                </p>
                <img src="svg/quotes-left.svg" class="testimonials-quotes" alt="">
                <img src="svg/quotes-right.svg" class="testimonials-quotes" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="boc-section">
        <div class="container">
          <h3 class="testimonials-section ms-auto">Alumni SPE ITS SC</h3>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="testimonials-content mx-2 mb-4">
                <p class="text-justify testimonials-said">
                  There are a bunch of places where we can hone our leadership skills, teamwork, and project management. But SPE ITS SC gave me more than what i expected. Knowledge, professionalism, international exposure, and of course family. Its atmosphere brought me to a different experience. Being HoD, I was able to hone leadership and teamwork by managing and developing my staff, and together reaching the goals of SPE ITS SC. This is by far the best place to develop myself as an individual as well.
                </p>
                <p class="text-end">
                  <strong>- Alvina Choirun Nisa</strong>​
                </p>
                <img src="svg/quotes-left.svg" class="testimonials-quotes" alt="">
                <img src="svg/quotes-right.svg" class="testimonials-quotes" alt="">
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="testimonials-content mx-2 mb-4">
                <p class="text-justify testimonials-said">
                  Organizational experience becomes a very valuable experience in college, especially when we can get a chance to be in a strategic position such as head of division. I was very grateful when I had the opportunity to become the head of fundraising division, which at that time was considered as a new division in SPE ITS SC. I learned a lot of new things, learned how to innovate, and also managed a team and worked together with them. Moreover, what I've always realized is there's never any pressure when working in this organization. Instead, the atmosphere of this organization makes us enjoy and motivates us to always give our best in every moment to grow together.
                </p>
                <p class="text-end">
                  <strong>- Muhammad Daffa Alim Putra</strong>​
                </p>
                <img src="svg/quotes-left.svg" class="testimonials-quotes" alt="">
                <img src="svg/quotes-right.svg" class="testimonials-quotes" alt="">
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="testimonials-content mx-2 mb-4">
                <p class="text-justify testimonials-said">
                  Being a HoD of SPE ITS SC has given me a lot of experience from communication, leadership, to creativity. I had multiple opportunities to meet and get to know someone new, either from the same SPE ITS SC, other universities' SPE, or from a professional field. It taught me a lot about how to manage people working in a team and being responsible as their head. It not only brought me to a wider network of people, but also showed me ways to cope with different types of people. Being a head of SPE ITS SC's division was definitely a great step before entering a workplace after college!
                </p>
                <p class="text-end">
                  <strong>- Salsabiella Ramadhanti Abadi</strong>​
                </p>
                <img src="svg/quotes-left.svg" class="testimonials-quotes" alt="">
                <img src="svg/quotes-right.svg" class="testimonials-quotes" alt="">
              </div>
            </div>
          </div>
          <div class="testimonials-hashtag text-end my-4">
            &#35;WeAreSPE
          </div>
        </div>
      </div>
    </section>
    {{-- End of Testimonials --}}

    {{-- Members in Competition --}}
    <section id="main-competitions">
      <div class="container competitions">
        <div class="col-lg-9">
          <h2 class="competitions-title">Members in<br>Competitions</h2>
          <a href="/competitions/fracture-fluid-design" class="competitions-button">See Competitions</a>
          <div class="row mt-5 mx-auto" style="max-width: 730px">
            <div class="col-md-6 px-3">
              <img src="/img/competitions/members-in-competition1.jpg" class="my-3 competitions-pict" alt="">
            </div>
            <div class="col-md-6 px-3">
              <img src="/img/competitions/members-in-competition2.jpg" class="my-3 competitions-pict" alt="">
            </div>
          </div>
        </div>
        <img src="/img/main-competition.png" class="competitions-icon" alt="">
      </div>
    </section>
    {{-- End of Members in Competition --}}

    {{-- Leaderboard --}}
    <section id="main-leaderboard">
      <div class="container-fluid leaderboard">
        <div class="row">
          <div class="col-lg-5 col-xl-4 order-1 order-lg-2 px-0">
            <h2 class="leaderboard-title ms-5 ms-lg-0">Member Points</h2>
          </div>
          <div class="col-lg-7 col-xl-8 order-2 order-lg-1">
            <div class="container leaderboard-content">
              @foreach ($users as $user)
                  
                <div class="leaderboard-list ms-auto d-flex justify-content-between flex-column flex-sm-row">
                  <div class="leaderboard-name flex-fill">
                    <span class="float-start">{{ $loop->iteration }}</span>                
                    <p class="ms-2 text-center my-0">{{ $user->user->name }}</p>
                  </div>
                  <p class="leaderboard-points m-0 text-center">{{ $user->point }} pts</p>                
                </div>

              @endforeach
            </div>
          </div>
        </div>
      </div>
      <img src="/svg/leaderboard-icon.svg" class="leaderboard-icon" alt="">
    </section>
    {{-- End of Leaderboard --}}
    
@endsection