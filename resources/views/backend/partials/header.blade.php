<div class="main-header">
    <div class="main-header-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
          <img
            src="{{asset('/backend/assets/img/kaiadmin/logo_light.svg')}}"
            alt="navbar brand"
            class="navbar-brand"
            height="20"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <!-- Navbar Header -->
    <nav
      class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
    >
      <div class="container-fluid">
        <nav
          class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
        >
        </nav>

        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">

          <li class="nav-item topbar-user dropdown hidden-caret">
            <a
              class="dropdown-toggle profile-pic"
              data-bs-toggle="dropdown"
              href="#"
              aria-expanded="false"
            >
              <div class="avatar-sm">
                <img
                  src="/backend/assets/img/profile.jpg"
                  alt="..."
                  class="avatar-img rounded-circle"
                />
              </div>
              <span class="profile-username">
                <span class="font-medium text-base text-gray-800">Admin  Admin</span>
                <span class="fw-bold"><div class="font-medium text-base text-gray-800 text">{{ Auth::user()->name }}</div></span>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
              <div class="dropdown-user-scroll scrollbar-outer">
                <li>
                  <div class="user-box">
                    <div class="avatar-lg">
                      <img
                        src="/backend/assets/img/profile.jpg"
                        alt="image profile"
                        class="avatar-img rounded"
                      />
                    </div>
                    <div class="u-text">
                      <h4><div class="font-bold text-base text-gray-800">{{ Auth::user()->name }}</div></h4>
                      
                      <a
                        href="profile.html"
                        class="btn btn-xs btn-secondary btn-sm"
                        >View Profile</a
                      >
                    </div>
                  </div>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">My Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Account Setting</a>
                  <div class="dropdown-divider"></div>

                  {{-- <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">Logout</a>
                    <form action="{{ route('logout') }}" method="post" id="logoutForm">
                        @csrf
                    </form> --}}

                    <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">Logout</a>
                    <form action="{{ route('logout') }}" method="post" id="logoutForm">
                        @csrf
                    </form>

                </li>
              </div>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
  </div>