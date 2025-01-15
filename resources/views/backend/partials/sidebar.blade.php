<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <div class="logo-header" data-background-color="dark">
      <a href="{{ route('dashboard') }}" class="logo text-white">
        Admin Mastering
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
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item active">
          <a href="{{ route('dashboard') }}">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('clients-feedback.index') }}">
            <i class="fa fa-commenting-o"></i>
            <p>Clients Feedback</p>
          </a>
        </li>
        <hr />
        <li class="nav-item">
          <a
            data-bs-toggle="collapse"
            href="#submenu"
            class="{{ request()->routeIs(['profile.setting', 'system.index', 'mail.setting', 'integration.setting']) ? 'collapsed show' : '' }}"
          >
            <i class="fas fa-cog"></i>
            <p>Settings</p>
            <span class="caret"></span>
          </a>
          <div
            class="collapse {{ request()->routeIs(['profile.setting', 'system.index', 'mail.setting', 'integration.setting']) ? 'show' : '' }}"
            id="submenu"
          >
            <ul class="nav nav-collapse">
              <li>
                <a
                  href="{{ route('profile.setting') }}"
                  class="{{ request()->routeIs('profile.setting') ? 'active' : '' }}"
                >
                  <span class="sub-item">Profile Settings</span>
                </a>
              </li>
              <li>
                <a
                  href="{{ route('system.index') }}"
                  class="{{ request()->routeIs('system.index') ? 'active' : '' }}"
                >
                  <span class="sub-item">System Settings</span>
                </a>
              </li>
              <li>
                <a
                  href="{{ route('mail.setting') }}"
                  class="{{ request()->routeIs('mail.setting') ? 'active' : '' }}"
                >
                  <span class="sub-item">SMTP Server</span>
                </a>
              </li>
              <li>
                <a
                  href="{{ route('integration.setting') }}"
                  class="{{ request()->routeIs('integration.setting') ? 'active' : '' }}"
                >
                  <span class="sub-item">Integration Settings</span>
                </a>
              </li>
              <li>
                <a data-bs-toggle="collapse" href="#subnav2">
                  <span class="sub-item">Social Media Settings</span>
                </a>
              </li>
              <li>
                <a data-bs-toggle="collapse" href="#subnav2">
                  <span class="sub-item">Terms & Conditions</span>
                </a>
              </li>
              <li>
                <a data-bs-toggle="collapse" href="#subnav2">
                  <span class="sub-item">Privacy Policy</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
