<div class="navbar navbar-default navbar-fixed-top menu-top">
  <div class="container">
    <div class="logo">
      <a class='navbar-brand' href='index.html'>
        <img src="{{ asset('frontend/assets/images/logo/logo_2.png') }}" class="w-100 h-100" alt="">
      </a>
      <div class="mobile-nav"></div>
    </div>
    
    <div id="navbar" class="main_menu">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('admin.about') }}">About</a></li>						
        <li><a href='{{ route('admin.portfolio') }}'>Portfolio</a></li>
        <li><a href='{{ route('admin.skill') }}'>Skills</a></li>
        <li><a href='{{ route('admin.resume') }}'>Resume</a></li>											
        <li><a href='{{ route('admin.contact') }}'>Contact</a></li>
      </ul>

      <button class="menu-toggle" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div> 
  </div><!--- END CONTAINER -->
</div> 