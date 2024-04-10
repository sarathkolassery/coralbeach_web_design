<nav class="navbar change navbar-expand-lg" style="width: 100%;">
    <!-- curve start -->
    <!-- <svg id="header-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100"
      preserveAspectRatio="none">
      <path fill="%230099ff" fill-opacity="1" d="M0 50 C40 0 60 0 100 50 Z"></path>
    </svg> -->
    <!-- curve end -->
    <div class="container nav-dy-width">
      <!-- Logo -->
      <a class="logo" href="{{ url('/')}}">
        <img src="{{ asset('ui/img/cb-logo.png')}}" alt="coralbeachstudios logo"/>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"><i class="fas fa-bars"></i></span>
      </button>

      <!-- navbar links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 10px;">
        <ul class="navbar-nav ml-auto" style="padding-bottom: 15px;">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/services')}}">Services2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/portfolio')}}">Portfolio</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Portfolio</a>
            <div class="dropdown-menu glass-drop">
              <a class="dropdown-item" href="works.html">Mouse Info</a>
              <a class="dropdown-item" href="works2.html">Masonry 3 Columns</a>
              <a class="dropdown-item" href="works3.html">Masonry 2 Columns</a>
              <a class="dropdown-item" href="works4.html">Pinterest List</a>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
          </li>
        </ul>
        <!-- <div class="search">
          <span class="icon pe-7s-search cursor-pointer"></span>
          <div class="search-form text-center custom-font">
            <form>
              <input type="text" name="search" placeholder="Search" />
            </form>
            <span class="close pe-7s-close cursor-pointer"></span>
          </div>
        </div> -->
      </div>
    </div>
    </div>
  </nav>