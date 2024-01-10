<header id="header" class="fixed-top d-flex align-items-center  header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="{{ url('/') }}">Roomie</a></h1>
        <!-- Uncomment below if you prefer to use an image logo
        <a href="index.html"><img src="{{ asset('frontend/img/logo.png') }}" alt="kkhkj" class="img-fluid"></a> -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto " href="{{ route('login.page') }}">Login / Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>