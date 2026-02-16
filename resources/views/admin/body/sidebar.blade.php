<nav id="sidebar" class="sidebar-wrapper">

  <!-- App brand starts -->
  <div class="app-brand p-3 d-flex align-items-center">
    <a href="index-2.html">
      <img src="{{ asset('backend/assets/images/logo.svg') }}" class="logo" alt="Admin Templates" />
    </a>
  </div>
  <!-- App brand ends -->

  <!-- Sidebar menu starts -->
  <div class="sidebarMenuScroll">
    <ul class="sidebar-menu">

      <li class="treeview">
        <small class="ms-3 text-secondary text-uppercase">Menu</small>
        <a href="#!">
          <i class="ri-home-line"></i>
          <span class="menu-text">Dashboard</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('dashboard') }}">Home</a>
          </li>
        </ul>
      </li>

      <div class="">
        <small class="ms-3 text-secondary text-uppercase">Pages</small>
      </div>

      <li class="treeview">
        <a href="#!">
          <i class="ri-home-line"></i>
          <span class="menu-text">Manage Brand</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('admin.brand') }}">Home</a>
          </li>
        </ul>
      </li>


      <li class="treeview">
        <a href="#!">
          <i class="ri-home-line"></i>
          <span class="menu-text">Hero</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('admin.home') }}">Home</a>
          </li>
        </ul>
      </li>
      
    </ul>
  </div>
  <!-- Sidebar menu ends -->

</nav>