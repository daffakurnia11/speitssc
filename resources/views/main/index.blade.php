<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">
    {{-- CSS --}}
    <link rel="stylesheet" href="css/style.css?modified={{ date("Ymd")}}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <title>SPE ITS Student Chapter</title>
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="SPE ITS SC Logo" width="70">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="navbar-toggler-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto text-center">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Petrolida</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Our Members</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Merch</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    {{-- End of Navbar --}}

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
                  <a href="" class="button-blue">Sign up as member</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <h3 class="text-center mt-5 mt-md-0">See our upcoming events!</h3>
            <div class="row">
              <div class="col-sm-6">
                <div class="events mx-auto my-3">

                </div>
              </div>
              <div class="col-sm-6">
                <div class="events mx-auto my-3">

                </div>
              </div>
              <div class="col-sm-6">
                <div class="events mx-auto my-3">

                </div>
              </div>
              <div class="col-sm-6">
                <div class="events mx-auto my-3">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- End of Upcoming Events --}}

    {{-- Blogs --}}
    <section id="main-blogs">
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
    </section>
    {{-- End of Blogs --}}

    {{-- Become a Member --}}
    <section id="main-members">
      <div class="container">
        <div class="row align-content-center">
          <div class="col-md-4 text-center">
            <h2 class="members-title mb-5">Become a Member</h2>
            <a href="" class="button-blue">Sign-up</a>
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
      <div class="container">
        <h2 class="testimonials-title text-center">What They Say?</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="testimonials-content mb-4">
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
          <div class="col-md-4">
            <div class="testimonials-content mb-4">
              <p class="text-justify testimonials-said">
                Being a member of SPE ITS SC is the best decision I’ve ever made. At first, I didn’t know where to begin to learn about oil and gas, but SPE ITS SC provided me with everything that I needed. I didn’t just learn “what” the oil and gas industry is – “how” and “why” also became much clearer and I eventually gained enough courage to become a delegate, participating in some competitions. But it wasn’t just about the knowledge. The main benefits came from participating in many SPE ITS SC events such as company visits, soft skill courses, and many more. And we can even meet a lot of exciting new people to expand relations!
              </p>
              <p class="text-end">
                <strong>- Safira Khairunnisa, Engineering Phyiscs 2019</strong>​
              </p>
              <img src="svg/quotes-left.svg" class="testimonials-quotes" alt="">
              <img src="svg/quotes-right.svg" class="testimonials-quotes" alt="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="testimonials-content mb-4">
              <p class="text-justify testimonials-said">
                When I was a freshman, SPE ITS SC became my first place to develop myself and I am so grateful for that. SPE ITS SC shows me the beauty of research and scientific competition that becomes my main interest. At first, I thought SPE ITS SC just provided knowledge, but as the time goes by, this organization also encourage me to join the competition, enhance my soft skills, and also experience. By being a member of SPE ITS SC, I get lots of benefits from their events such as science course, soft skill course, and competition 101. So, If you are interested in the oil and gas sector or even just want to expand your relation, want to enhance your soft skills, and broaden your knowledge, don't wait for another second to join SPE ITS SC!
              </p>
              <p class="text-end">
                <strong>- Adiv Gayu</strong>​
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
    </section>
    {{-- End of Testimonials --}}

    {{-- Footer --}}
    <footer>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 text-center">
            <img src="/img/logo.png" alt="SPE ITS SC Logo" class="footer-logo mb-4">
          </div>
          <div class="col-md-8 px-5 px-md-0">
            <h1 class="footer-title mb-4">
              Society of Petroleum Engineers<br>
              Institut Teknologi Sepuluh Nopember<br>
              Student Chapter
            </h1>
            <p class="footer-desc fs-5">
              Department of Geophysics Engineering, Geomatics Building 1st Floor<br>
              Kampus Sukolilo, Institut Teknologi Sepuluh Nopember<br>
              Surabaya 60111
            </p>
            <div class="footer-contact">
              <a href="https://speitssc.org/">
                <img src="svg/worldwideweb.svg" alt="WorldWideWeb Icon">
              </a>
              <a href="https://www.instagram.com/speitssc/" target="_blank">
                <img src="svg/instagram.svg" alt="Instagram Logo">
              </a>
              <a href="https://www.linkedin.com/company/speitssc/" target="_blank">
                <img src="svg/linkedin.svg" alt="Linkedin Logo">
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    {{-- End of Footer --}}

    {{-- Javascript --}}
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>