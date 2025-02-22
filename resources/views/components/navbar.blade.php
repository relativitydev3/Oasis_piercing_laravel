<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent   ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle d-inline">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <!-- <a class="navbar-brand" href="#pablo">Dashboard</a> -->
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
    @if (Auth::check())
     
    <ul class="navbar-nav ml-auto ">
        <div class="search-bar input-group">

          <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i></button>
          <!-- You can choose types of search input -->
        </div>

        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <div class="notification d-none d-lg-block d-xl-block"></div>
            <i class="tim-icons icon-sound-wave"></i>
            <p class="d-lg-none">
              New Notifications
            </p>
          </a>
          <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
            <li class="nav-link">
              <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
            </li>
            <li class="nav-link">
              <a href="#" class="nav-item dropdown-item">You have 5 more tasks</a>
            </li>
            <li class="nav-link">
              <a href="#" class="nav-item dropdown-item">Your friend Michael is in town</a>
            </li>
            <li class="nav-link">
              <a href="#" class="nav-item dropdown-item">Another notification</a>
            </li>
            <li class="nav-link">
              <a href="#" class="nav-item dropdown-item">Another one</a>
            </li>
          </ul>
        </li>

        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <div class="photo">
              <img src=" {{asset('assets/img/anime3.png')}}">
            </div>
            <b class="caret d-none d-lg-block d-xl-block"></b>
            <p class="d-lg-none">
              Log out
            </p>
          </a>

          <ul class="dropdown-menu dropdown-navbar">

            <li class="nav-link">
              <a href="#" class="nav-item dropdown-item">{{ Auth::user()->name  }}</a>
            </li>

            <li class="nav-link">
              <a href="#" class="nav-item dropdown-item">Profile</a>
            </li>
            <li class="nav-link">
              <a href="#" class="nav-item dropdown-item">Settings</a>
            </li>
            <div class="dropdown-divider"></div>

            <li class="nav-link">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>

          </ul>

        </li>

        <li class="separator d-lg-none"></li>
      </ul>
      @endif

    </div>
  </div>
</nav>