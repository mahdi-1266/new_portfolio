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
          @php
            $hero = App\Models\HeroModel::get();   
          @endphp

          @foreach($hero as $hero)
            <h2>Hi Dear, I am <span class="hero-name">{{ $hero->name }}</span></h2>
            <h1 class="cd-headline clip">
              <!-- <span class="fw_600">I'm a</span> -->
              <span class="cd-words-wrapper">
                <b class="text-primary fw_300 is-visible special-text">Web Designer</b>
                <b class="text-primary fw_300 special-text">Web Developer</b>
                <b class="text-primary fw_300 special-text">Fullstack Developer</b>
              </span>
            </h1>
            <p class="banner_text_content">{{ $hero->description }}</p>

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
              <li class="social-icon"><a href="{{ $hero->github_link }}"><i class="fa-brands fa-github"></i></a></li>
              <li class="social-icon"><a href="{{ $hero->facebook_link }}"><i class="fa-brands fa-facebook"></i></a></li>
              <li class="social-icon"><a href="{{ $hero->linkedin_link }}"><i class="fa-brands fa-linkedin"></i></a></li>		
              <li class="social-icon"><a href="{{ $hero->instagram_link }}"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endsection