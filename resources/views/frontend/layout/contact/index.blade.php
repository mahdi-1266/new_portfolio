@extends('frontend.layout.home.home')
@section('frontend')
		<section id="contact" class="gray_bg section_padding">

				<div class="">
					<div id="stars"></div>
					<div id="stars2"></div>
					<div id="stars3"></div>
					<div></div>
				</div>

				
				<div class="container">

					<div class="section_heading text-center">							
						<h2>Get In Touch</h2>
						<p>Let's work together on your next project.</p>
						<div class="sm_border bg-primary"></div>
					</div>	

					
					<div class="contact-row">		
						<div class="contact-div-box">

							<div class="contact-child child1">
								<div class="contact-content-box">
									<div class="contact-content contact-icon">
										<i class="fa fa-envelope"></i>
									</div>

									<div class="contact-content">
										<span>Email</span>
										<b>m.mahdi1838@gmail.com</b>
									</div>
								</div>
							</div>
							
							<div class="contact-child child2">
								<div class="contact-content-box">
									<div class="contact-content contact-icon">
										<i class="fa fa-phone"></i>
									</div>
									<div class="contact-content">
										<span>Phone</span>
										<b>+1 (555) 123-4567</b>
									</div>
								</div>
							</div>
							
							<div class="contact-child child3">
								<div class="contact-content-box">
									<div class="contact-content contact-icon">
										<i class="fa fa-clock-o"></i>
									</div>
									<div class="contact-content">
										<span>Working Hours</span>
										<span>Mon-Fri: 9AM - 5PM</span>
									</div>
								</div>
							</div>

              <div class="contact-child child4">
								<div class="contact-content-box">
									<div class="contact-content">
										<span>Follow Me</span>
										<div class="social_link">				
                      <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>		
                      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </div>
									</div>
								</div>
							</div>
              
						</div>

						<div class="child5">
							<form action="#" method="post" class="form-container">

								<div class="form-contenet form-child1">
                  <label for=""><i class="fa fa-user"></i> Your name:</label>
									<input type="text" class="form-control" placeholder="Ali Ahmadi">
								</div>

								<div class="form-contenet form-child2">
                  <label for=""><i class="fa fa-envelope"></i> Your email:</label>
									<input type="email" class="form-control" placeholder="ali@example.com">
								</div>

								<div class="form-contenet form-child3">
                  <label for=""><i class="fa fa-tag"></i> Subject:</label>
									<input type="text" class="form-control" placeholder="project description">
								</div>

								<div class="form-contenet form-child4">
                  <label for=""><i class="fa fa-message"></i> Message:</label>
									<textarea rows="6" class="form-control" placeholder="Tell me about your proejct..."></textarea>
								</div>

								<div class="form-contenet form-child5">
                  <button type="submit" class="btn">Send Message</button>
                </div>
							</form>
						</div>					
					</div>
				</div>
			</section>
@endsection