{{-- Navbar --}}
<nav class="navbar navbar-expand-lg shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="/">
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
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="aboutMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Introduction
          </a>
          <ul class="dropdown-menu w-100 text-center" aria-labelledby="aboutMenu">
            <li><a class="dropdown-item" href="#">About Us</a></li>
            <li><a class="dropdown-item" href="#">Our Members</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="eventMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SPE Events
          </a>
          <ul class="dropdown-menu w-100 text-center" aria-labelledby="eventMenu">
            <li><a class="dropdown-item" href="#">Events</a></li>
            <li><a class="dropdown-item" href="#">Competition</a></li>
            <li><a class="dropdown-item" href="#">Petrolida</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Merch</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li> --}}
        @auth          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="profileMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hello, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu w-100 text-center" aria-labelledby="profileMenu">
              
              @if (auth()->user()->role == 'Member')
              <li><a class="dropdown-item" href="/profile"><i class="bi bi-grid"></i> Profile</a></li>
              @else
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-grid"></i>Admin Dashboard</a></li>
              @endif
              
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
{{-- End of Navbar --}}