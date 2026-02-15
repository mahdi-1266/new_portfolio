@extends('frontend.layout.home.home')
@section('frontend')
<section id="home" class="gray_bg main_banner section_visible">
  <div class="">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <div></div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12 banner_content_container">
        <div class="banner_content">
          <h2>Hi Dear, I am <span class="text-primary">Mahdi</span></h2>
          <h1 class="cd-headline clip">
            <!-- <span class="fw_600">I'm a</span> -->
            <span class="cd-words-wrapper">
              <b class="text-primary fw_300 is-visible">Web Designer</b>
              <b class="text-primary fw_300">Web Developer</b>
              <b class="text-primary fw_300">Fullstack Developer</b>
            </span>
          </h1>
          <p class="banner_text_content">
            Welcome to my official portfolio website. My name is Mohammad Mahdi, and I am <br> a dedicated Frontend Developer and aspiring Backend Engineer with a passion <br> for building clean, responsive, and user-friendly web applications.
          </p>

          <div class="cta-btn-container">
            <button>
              <span class="shadow"></span>
              <span class="edge"></span>
              <span class="front text"> View My Work
              </span>
            </button>

            <button>
              <span class="shadow"></span>
              <span class="edge"></span>
              <span class="front text"> Contact Me
              </span>
            </button>
          </div>

          <ul class="banner_social_link">					
            <li class="social-icon"><a href="#"><i class="fa-brands fa-github"></i></a></li>
            <li class="social-icon"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li class="social-icon"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>		
            <li class="social-icon"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection