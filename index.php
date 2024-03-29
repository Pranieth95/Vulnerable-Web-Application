<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/popup-div.css">
<link rel="stylesheet" type="text/css" href="styles/popup-msg.css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="styles/jquery.bpopup.min.js"></script>
</head>
<body>
<!-- Button trigger modal -->

<script type="text/javascript">
	$(window).on('load',function(){
		var myCookie = getCookie("_usrAgr");
		if(myCookie == null){
			$('#exampleModalLong').modal('show');
		}
		var myCookie2 = getCookie("_usrPlayName");
		if(myCookie2 == null){
			localStorage.setItem("counter", 0);
		}
    });

	function getCookie(name) {
		var dc = document.cookie;
		var prefix = name + "=";
		var begin = dc.indexOf("; " + prefix);
		if (begin == -1) {
			begin = dc.indexOf(prefix);
			if (begin != 0) return null;
		}
		else
		{
			begin += 2;
			var end = document.cookie.indexOf(";", begin);
			if (end == -1) {
			end = dc.length;
			}
		}
		// because unescape has been deprecated, replaced with decodeURI
		//return unescape(dc.substring(begin + prefix.length, end));
		return decodeURI(dc.substring(begin + prefix.length, end));
	} 
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#ffb606;color:white;border-bottom:1px solid #ffb606">
        <h2 class="modal-title" id="exampleModalLongTitle" style="text-align: center">Welcome to <BR>CEYLON INFORMATICS INFORMATION TECHNOLOGY</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background:#1a1a1a;color:white;">
	  	<p class="text-secondary">This application is designed by <b>Pearson CISO</b> in the hope of giving any developer about the basic vulnerabilities which can be 
		  present when they’re developing an application. Secure coding principles can be followed in order to reduce the risk of having 
		  vulnerabilities in a system and this application helps the developers to identify the secure coding principles on their own and 
		  how to develop a secure application. 
		</p>

		<p>
		This application consists of different challenges where you will be scored according to the completion of these challenges. 
		Starting from this page, you will be directed into specific pages where you will face the challenge in finding the vulnerability 
		implemented on those particular pages. 
		</p>

		<div class="card text-white mb-3" style="max-width: 40rem;background:#ffb606">
			<div class="card-body">
				<br>
				<h4>> You will have to find the vulnerabilities and need to submit the correct flag to get scored. </h4>
				<h4>> You can always skip the challenges to the next one but you will not get scored if you do not complete the challenge</h4>
				<h4>> You can access the source code by the given link and can use as a reference</h4>
				<h4>> You can view your score at the score dashboard once all the challenges are completed</h4>
				<br>
			</div>
		</div>
		
		
		<p>
		Please be advised that the score you obtain will not measure the knowledge of any individual.
		<br><i>This version is only for personal use only. </i>
		</p>

		<p>
		Always Learning | &copy;<script>document.write(new Date().getFullYear());</script>  Intern Colloboration 
		</p>
      </div>
      <div class="modal-footer">
        <button id="agrButton" type="button"  class="btn btn-secondary" data-dismiss="modal" style="background:#1a1a1a">Read and Understood</button>
		<script type="text/javascript">
			$("#agrButton").on("click", function () {
				var date = new Date();
				date.setTime(date.getTime() + (7*24*60*60*1000));
				var expires = "; expires=" + date.toUTCString();
				document.cookie = "_usrAgr = yes" + expires + "; path=/";
			});
		</script>
      </div>
    </div>
  </div>
</div>
<div class="super_container">

	<!-- Header -->


	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>Ceylon Informatics Information Technology</span>
				</div>
			</div>	
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<a href="login.php"><span class="label label-danger" >Member Login</span></a>
		</div>
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>
		
		<!-- Pop Over -->
		<div class="popover__wrapper">
			<a href="#">
				<h2 class="popover__title">HINTS</h2>
			</a>
			<div class="popover__content">
				<span class="popover__message" style="color:#ffffff">Login Page may contain Vulnerabilities</span>
			</div>
		</div>
	</header>
	<!-- Menu -->
	
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">

				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Achieving <span>Excellence</span> Together!</h1>
						</div> 
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Achieving <span>Excellence</span> Together!</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Achieving <span>Excellence</span> Together!</h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Best Courses</h2>
							
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/books.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Digital Library</h2>
								
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/professor.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Exceptional Professors</h2>
							
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Popular Courses</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href=#>Information Technology</a></div>
							<div class="card-text">BSc (Hons) in Information Technology</div>
						</div>
						
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_2.jpg" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Software Enigineering</a></div>
							<div class="card-text">BSc (Hons) in IT specialized in SE</div>
						</div>
						
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_3.jpg" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">

							<div class="card-title"><a href="courses.html">Cyber Security</a></div>
							<div class="card-text">BSc (Hons) in IT specialized in CS</div>

							
						</div>
					
						
					</div>
				</div>
			</div>
		</div>		
	</div>

	
	<!-- Testimonials -->

	<div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>What our students say</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">For me the University of Ceylon Informatics is an unique establishment where life-long memories are formed.  Coming back to the same university to study my Masters, after graduating with my undergraduate degree 16 years ago, felt like coming home'</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/testimonials_user.jpg" alt="">
										</div>
										<div class="testimonial_name">Pranieth Chandrasekara</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">The University of CeylonInformatics is the best modern university to attend.  There are so many great facilities which help improve our academic skills and help with our professional progress. All the staff members and lecturers are very, very helpful.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/testimonials_user3.jpg" alt="">
										</div>
										<div class="testimonial_name">Cloud Wita</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">The experience of being a post-graduate student at The University Ceylon Informatics has been amazing. The course is well-designed, the classes are well-taught, the studios are amazing and the library is excellent.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/testimonials_user2.jpg" alt="">
										</div>
										<div class="testimonial_name">Kanchanaa Rathna</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>New Intake</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Student Registration</a></div>
									<div class="event_location">Ceylon Informatics Colombo Campus</div>
									<p>Only Selected Students From the Aptitude Test Conducted on the Day are Allowed to Registered.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
								</div>
							</div>

						</div>	
					</div>
				</div>

				
				

			</div>
				
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
	

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Intern Colloboration | Team CISO <i  aria-hidden="true"></i> @ <a href="https://www.pearson.com/asia/" target="_blank">Pearson</a>

				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>