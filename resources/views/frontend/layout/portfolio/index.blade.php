@extends('frontend.layout.home.home')
@section('frontend')
		<section id="portfolio" class="gray_bg section_padding">

			<div class="">
					<div id="stars"></div>
					<div id="stars2"></div>
					<div id="stars3"></div>
					<div></div>
			</div>

			<div class="container">	
				<div class="col-md-12 col-sm-12-col-xs-12">
					<div class="section_heading text-center">							
						<h2>My <span>Portfolio</span></h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting<br/> industry. Lorem Ipsum standard dummy text.</p>
						<div class="sm_border bg-primary"></div>
					</div>	
				</div>
				
				<div class="row">
					<div class="work_filter text-center">
						<ul>
							<li class="active" data-filter="*">All</li>
							<li data-filter=".design">Design</li>
							<li data-filter=".marketing">Marketing</li>
							<li data-filter=".Photography">Photography</li>
						</ul>
					</div>
					
					<div class="work_content_area">

						<!------ Start Col ------>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="item-img">
								<img src="{{ asset('frontend/assets/images/portfolio/1.jpg') }}" alt="" />
								<div class="item-img-overlay">
									<div class="overlay-info full-width">
										<p>Photography</p>
										<h5>Creative Web Design</h5>
										<a href="./assets/images/portfolio/1.jpg" data-lightbox="images">
											<span class="icon"><i class="ti-arrow-right"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!------ End Col ------>

						<!------ Start Col ------>
						<div class="col-md-4 col-sm-6 col-xs-12 element-item design Photography">
							<div class="item-img">
								<img src="{{ asset('frontend/assets/images/portfolio/2.jpg') }}" alt="" />
								<div class="item-img-overlay">
									<div class="overlay-info full-width">
										<p>Photography</p>
										<h5>Creative Web Design</h5>
										<a href="./assets/images/portfolio/2.jpg" data-lightbox="images">
											<span class="icon"><i class="ti-arrow-right"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!------ End Col ------>

						<!------ Start Col ------>
						<div class="col-md-4 col-sm-6 col-xs-12 element-item Photography marketing">
							<div class="item-img">
								<img src="{{ asset('frontend/assets/images/portfolio/3.jpg') }}" alt="" />
								<div class="item-img-overlay">
									<div class="overlay-info full-width">
										<p>Photography</p>
										<h5>Creative Web Design</h5>
										<a href="./assets/images/portfolio/3.jpg" data-lightbox="images">
											<span class="icon"><i class="ti-arrow-right"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!------ End Col ------>

						<!------ Start Col ------>
						<div class="col-md-4 col-sm-6 col-xs-12 element-item design Photography">
							<div class="item-img">
								<img src="{{ asset('frontend/assets/images/portfolio/4.jpg') }}" alt="" />
								<div class="item-img-overlay">
									<div class="overlay-info full-width">
										<p>Photography</p>
										<h5>Creative Web Design</h5>
										<a href="./assets/images/portfolio/4.jpg" data-lightbox="images">
											<span class="icon"><i class="ti-arrow-right"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!------ End Col ------>

						<!------ Start Col ------>
						<div class="col-md-4 col-sm-6 col-xs-12 element-item marketing Photography">
							<div class="item-img">
								<img src="{{ asset('frontend/assets/images/portfolio/5.jpg') }}" alt="" />
								<div class="item-img-overlay">
									<div class="overlay-info full-width">
										<p>Photography</p>
										<h5>Creative Web Design</h5>
										<a href="./assets/images/portfolio/5.jpg" data-lightbox="images">
											<span class="icon"><i class="ti-arrow-right"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!------ End Col ------>

						<!------ Start Col ------>
						<div class="col-md-4 col-sm-6 col-xs-12 element-item design marketing">
							<div class="item-img">
								<img src="{{ asset('frontend/assets/images/portfolio/6.jpg') }}" alt="" />
								<div class="item-img-overlay">
									<div class="overlay-info full-width">
										<p>Photography</p>
										<h5>Creative Web Design</h5>
										<a href="./assets/images/portfolio/6.jpg" data-lightbox="images">
											<span class="icon"><i class="ti-arrow-right"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!------ End Col ------>
					</div>
					<div class="port_content_button text-center">
						<a href="#" class='btn btn-default main_btn'>load more</a>
					</div>
				</div>
			</div>			
		</section>
@endsection