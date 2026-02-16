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

							<div class="col-md-6 col-sm-6 col-xs-12 about_image_container">
								<div class="about_image">
									<img src="{{ asset('frontend/assets/images/banner3.webp') }}" class="w-100 h-100" alt="about-image" />
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6 col-xs-12 about_content_container">
								<div class="about_content_area">
									<h4>Hello, I am Mahdi Alizada</h4>					

									<p class="about-desc">
										I'm a passionate Fullstack Developer dedicated to crafting beautiful, responsive, dynamic, and user-friendly web applications. With expertise in modern web technologies like HTML5, CSS3, JavaScript, and React, MySQL, PHP, and Laravel I transform creative ideas into seamless digital experiences that users love.
										<br><br>
										My approach combines clean code practices with attention to detail, ensuring every project is not only visually appealing but also performs flawlessly across all devices. I'm constantly learning and adapting to new technologies to deliver cutting-edge solutions that exceed expectations.
									</p>

									<!-- <div class="about_details">
										<div class="row">
											<div class="col-md-12">
												<div class="ct_about">
												   <span> Name </span> : Mahdi Alizada										   
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="ct_about">
												   <span> Age </span>
												   : 19
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="ct_about">
												   <span> Phone Number </span>
												   : 0093 0799064435
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="ct_about">
												   <span> Email </span>
												   : m.mahdi1838@gmail.com
												</div>
											</div>
										</div>
									</div> -->
									
									<a href="#" class="btn main_btn">Contact Me</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
@endsection