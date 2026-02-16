@extends('frontend.layout.home.home')
@section('frontend')
		<section id="skills" class="gray_bg section_padding">

			<div class="">
					<div id="stars"></div>
					<div id="stars2"></div>
					<div id="stars3"></div>
					<div></div>
			</div>

			<div class="container">
				<div class="col-md-12 col-sm-12-col-xs-12 ">
					<div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s">
						<h2>My <span>Skills</span></h2>
						<p>Check out my professional skills and expertise areas</p>
						<div class="sm_border bg-primary"></div>
					</div>
				</div>

				<!-- 
				
				
				
				<i class="fa-brands fa-node-js"></i>
				
				
				
				-->

				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="skill_box wow fadeInLeft" data-wow-delay="0.3s">

							<h3 class="skill_title">Technical Skills</h3>
							
							<div class="skill_item">
								<h4><i class="fa-brands fa-html5"></i> HTML5</h4>
								<div class="skill_bar">
									<div class="skill_bar_fill html_skill" data-width="95"></div>
								</div>
							</div>

							<div class="skill_item">
								<h4><i class="fa-brands fa-css3-alt"></i> CSS3</h4>
								<div class="skill_bar">
									<div class="skill_bar_fill css_skill" data-width="90"></div>
								</div>
							</div>

							<div class="skill_item">
								<h4><i class="fa-brands fa-square-js"></i> JavaScript</h4>
								<div class="skill_bar">
									<div class="skill_bar_fill js_skill" data-width="90"></div>
								</div>
							</div>

							<div class="skill_item">
								<h4><i class="fa-brands fa-react"></i> React</h4>
								<div class="skill_bar">
									<div class="skill_bar_fill react_skill" data-width="85"></div>
								</div>
							</div>

							<div class="skill_item">
								<h4><i class="fa-brands fa-git-alt"></i> Git & Github</h4>
								<div class="skill_bar">
									<div class="skill_bar_fill git_skill" data-width="70"></div>
								</div>
							</div>

							<div class="skill_item">
								<h4><i class="fa-brands fa-figma"></i> Figma</h4>
								<div class="skill_bar">
									<div class="skill_bar_fill github_skill" data-width="30"></div>
								</div>
							</div>

							<div class="skill_item">
								<h4><i class="fa-brands fa-python"></i> Python</h4>
								<div class="skill_bar">
									<div class="skill_bar_fill python_skill" data-width="75"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="skill_box wow fadeInRight" data-wow-delay="0.4s">

							<h3 class="skill_title">Professional Skills</h3>

							<div class="professional_skills">
								<div class="pro_skill_item">
									<div class="pro_skill_icon">
										<i class="fa fa-laptop"></i>
									</div>
									<div class="pro_skill_content">
										<h4>Web Development</h4>
										<p>Creating responsive websites with modern technologies</p>
									</div>
								</div>
								
								<div class="pro_skill_item">
									<div class="pro_skill_icon">
										<i class="fa fa-paint-brush"></i>
									</div>
									<div class="pro_skill_content">
										<h4>UI/UX Design</h4>
										<p>Designing intuitive and beautiful user interfaces</p>
									</div>
								</div>
								<div class="pro_skill_item">
									<div class="pro_skill_icon">
										<i class="fa fa-cogs"></i>
									</div>
									<div class="pro_skill_content">
										<h4>Problem Solving</h4>
										<p>Finding creative solutions to complex challenges</p>
									</div>
								</div>
								<div class="pro_skill_item">
									<div class="pro_skill_icon">
										<i class="fa fa-users"></i>
									</div>
									<div class="pro_skill_content">
										<h4>Team Work</h4>
										<p>Collaborating effectively in diverse teams</p>
									</div>
								</div>
							</div>
					</div>
					</div>
				</div>

				<div class="row stats_row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="stat_box wow fadeInUp" data-wow-delay="0.5s">
							<h3 class="stat_number">3+</h3>
							<p class="stat_text">Projects Done</p>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="stat_box wow fadeInUp" data-wow-delay="0.6s">
							<h3 class="stat_number">1+</h3>
							<p class="stat_text">Years Experience</p>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="stat_box wow fadeInUp" data-wow-delay="0.7s">
							<h3 class="stat_number">10+</h3>
							<p class="stat_text">Happy Clients</p>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="stat_box wow fadeInUp" data-wow-delay="0.8s">
							<h3 class="stat_number">100%</h3>
							<p class="stat_text">Success Rate</p>
						</div>
					</div>

				</div>
		</section>
@endsection