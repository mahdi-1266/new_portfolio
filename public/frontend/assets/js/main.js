/* ------- Fetching section start ------- */ 

/* ------ Header ------*/
fetch("./components/header.html").then((response) => response.text ()).then((data) => {
  document.getElementById("header").innerHTML = data;
}).catch((error) => {
  console.log('Something went wrong!', error);
});

/* ------ Footer ------*/
fetch("./components/footer.html").then((response) => response.text()).then((data) => {
  document.getElementById("footer").innerHTML = data;
}).catch((error) => {
  console.log('Something went wrong!', error);
});

/* ------- Fetching section start ------- */ 


/* ------- Cursor start ------- */ 
let cursor = document.getElementById("cursor");

document.onmousemove = function(e){
	cursor.style.left = (e.pageX - 15) + "px";
	cursor.style.top = (e.pageY - 10) + "px";
	cursor.style.display = "block";
}
/* ------- Cursor end ------- */ 


// Skills Section Animation
function animateSkillBars() {
  const skillBars = document.querySelectorAll('.skill_bar_fill');
  
  skillBars.forEach(bar => {
    const barPosition = bar.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;
    
    if (barPosition < screenPosition && !bar.classList.contains('animated')) {
      const width = bar.getAttribute('data-width');
      bar.style.width = width + '%';
      // Add percentage text inside the bar
      bar.textContent = width + '%';
      bar.classList.add('animated');
    }
  });
}

// Initialize animations when page loads
document.addEventListener('DOMContentLoaded', function() {
  // Trigger animation on scroll
  window.addEventListener('scroll', animateSkillBars);
  
  // Also trigger on load in case elements are already visible
  setTimeout(animateSkillBars, 500);
  
  // Initialize scroll animations
  initScrollAnimations();
});

// Scroll animations for elements
function initScrollAnimations() {
  // Add animation class to elements when they come into view
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px"
  };
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-in');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  
  // Observe all elements with the 'scroll-animate' class
  document.querySelectorAll('.skill_box, .skill_item, .stat_box').forEach(el => {
    el.classList.add('scroll-animate');
    observer.observe(el);
  });
}
/* ------- Fetching section end ------- */ 




(function($) {
    'use strict';
	
	jQuery(document).ready(function(){
		
		/* START MENU-JS */	
			$('.nav a').on('click', function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});		

	
			$(window).scroll(function() {
			  if ($(this).scrollTop() > 100) {
				$('.menu-top').addClass('menu-shrink');
			  } else {
				$('.menu-top').removeClass('menu-shrink');
			  }
			});
			
			$(document).on('click','.navbar-collapse.in',function(e) {
			if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
				$(this).collapse('hide');
			}
			});				
		/* END MENU-JS */
		
		/* START MOBILE-MENU  */
			$('.main_menu').slicknav({
				prependTo:".mobile-nav",
			});
		/* START MOBILE-MENU  */
		 
		/* START ISOTOP JS */
			var $grid = $('.work_content_area').isotope({
			  // options
			});
			// filter items on button click
			$('.work_filter').on( 'click', 'li', function() {
			  var filterValue = $(this).attr('data-filter');
			  $grid.isotope({ filter: filterValue });
			});
			// filter items on button click
			$('.work_filter').on( 'click', 'li', function() {
				$(this).addClass('active').siblings().removeClass('active')
			});
		/* END ISOTOP JS */
		
		/* START LIGHTBOX */
		
			lightbox.option({
			  'resizeDuration': 200,
			  'wrapAround': true
			});
		
		/* END LIGHTBOX JS */
		
		/* START COUNDOWN JS */
			$('#counter_area').on('inview', function(event, visible, visiblePartX, visiblePartY) {
				if (visible) {
					$(this).find('.counter').each(function () {
						var $this = $(this);
						$({ Counter: 0 }).animate({ Counter: $this.text() }, {
							duration: 5000,
							easing: 'swing',
							step: function () {
								$this.text(Math.ceil(this.Counter));
							}
						});
					});
					$(this).unbind('inview');
				}
			});
		/* END COUNDOWN JS */
		
	});	
	
		/*PRELOADER JS*/
			$(window).on('load', function() {  
				$('.spinner').fadeOut();
				$('.preloader').delay(350).fadeOut('slow'); 
			}); 
		/*END PRELOADER JS*/
		
		// Initialize WOW.js for animations
			new WOW().init();
			
			// Add scroll-triggered animations for elements
			const observerOptions = {
				threshold: 0.1,
				rootMargin: '0px 0px -50px 0px'
			};
			
			const observer = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						entry.target.classList.add('animate__animated', 'animate__fadeInUp');
						observer.unobserve(entry.target);
					}
				});
			}, observerOptions);
			
			// Observe all sections and elements that should animate on scroll
			document.querySelectorAll('section, .single-service, .single_about, .single_counter, .single_blog, .work_content_area .item-img, .contact-row, .education-container, .resume-section').forEach(el => {
				el.classList.add('animate__animated');
				el.style.opacity = '0';
				observer.observe(el);
			});
			
			// Also observe other common elements
			document.querySelectorAll('.section_heading, .single-service, .about_image_container, .about_content_area, .single_counter, .single_blog, .work_filter, .resume-item').forEach(el => {
				el.classList.add('animate__animated');
				el.style.opacity = '0';
				observer.observe(el);
			});
})(jQuery);