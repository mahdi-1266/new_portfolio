@extends('frontend.layout.home.home')
@section('frontend')
<section id="about" class="gray_bg section_padding section_hidden">

	<div class="">
		<div id="stars"></div>
		<div id="stars2"></div>
		<div id="stars3"></div>
		<div></div>
	</div>
			
	<div class="container">
		<div class="single_about">
			<div class="row">

				@php
					$about = App\Models\About::get();   
				@endphp

				@foreach($about as $about)
					<div class="col-md-6 col-sm-6 col-xs-12 about_image_container">
						<div class="about_image">
							<img src="{{ asset($about->photo) }}" class="w-100 h-100" alt="about-image" />
						</div>
					</div>
				
					<div class="col-md-6 col-sm-6 col-xs-12 about_content_container">
						<div class="about_content_area">

							<h4>Hello, I am <span class="hero-name">{{ $about->name }}</span></h4>					
							<p class="about-desc">{{ $about->description }}</p>
							<a href="#" class="btn main_btn">Contact Me</a>

						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>

{{-- /* The script you provided is responsible for creating a hover effect on the image within the
`.about_image` container. Here's a breakdown of what it does: */
/* The script you provided is responsible for creating a hover effect on the image within the
`.about_image` container. Here's a breakdown of what it does: */ --}}
<script type="text/javascript">
const wrapper = document.querySelector(".about_image");
const image = document.querySelector(".about_image img");

wrapper.addEventListener("mousemove", (e) => {
	const rect = wrapper.getBoundingClientRect();

	const x = e.clientX - rect.left;
	const y = e.clientY - rect.top;

	const centerX = rect.width / 2;
	const centerY = rect.height / 2;

	const rotateY = ((x - centerX) / centerX) * 20;
	const rotateX = ((centerY - y) / centerY) * 20;

	image.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
});

wrapper.addEventListener("mouseleave", () => {
    image.style.transform = "rotateX(0deg) rotateY(0deg)";
});
</script>
@endsection