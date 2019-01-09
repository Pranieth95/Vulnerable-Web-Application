<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Elements</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>Dashboard</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
					<li class="main_nav_item"><a href="news.php">home</a></li>
						<li class="main_nav_item"><a href="courses.php">Modules</a></li>
						<li class="main_nav_item"><a href="teachers.php">Lecturers</a></li>
						<li class="main_nav_item"><a href="elements.php">Dashboard</a></li>
						<li class="main_nav_item"><a href="shop.php">Ebooks</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<form id="search_form" class="search_form" method="post" action="news.php">
				<span class="label label-danger"><button id="contact_send_btn" name="form_logout" type="submit" class="label label-danger" value="Submit">Student Logout</button></span>
			</form>
			<?php
				//unset($_SESSION['PHPSESSID']);
				if ($_SERVER['REQUEST_METHOD'] === 'POST'){
					if(isset($_POST['form_logout'])){
						unset($_COOKIE["_usrLogged"]);
						setcookie("_usrLogged", $_SESSION["user_cookie"], time() - (86400 * 2), "/", "",false,true);
						session_unset();
						session_destroy();
						header('Location: index.php');
						exit();
					}
				}
				
			?>
			
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
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
				<li class="main_nav_item"><a href="news.php">home</a></li>
						<li class="main_nav_item"><a href="courses.php">Modules</a></li>
						<li class="main_nav_item"><a href="teachers.php">Lecturers</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				
			</div>

		</div>

	</div>
	
	<!-- Home -->

	

	<!-- Elements -->

	

		<!-- Buttons -->
		<div class="loaders">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="elements_title">Loaders</div>
					</div>
				</div>

				<div class="row elements_loaders_container">
					<div class="col-lg-3 loader_col">
						<!-- Loader -->
						<div class="loader" data-perc="0.99"></div>
						<div class="loader_text text-center">Exploitability </div>
						<div class="loader_sub text-center">Easy :99%</div>
						<div class="loader_sub text-center">Average :50%</div>
						<div class="loader_sub text-center">Difficult :25%</div>
					</div>
					<div class="col-lg-3 loader_col">
						<!-- Loader -->
						<div class="loader" data-perc="0.5"></div>
						<div class="loader_text text-center">Weakness Prevalence</div>
						<div class="loader_sub text-center">Widespread :99%</div>
						<div class="loader_sub text-center">Common :50%</div>
						<div class="loader_sub text-center">Uncommon :25%</div>
						<span></span>
					</div>
					<div class="col-lg-3 loader_col">
						<!-- Loader -->
						<div class="loader" data-perc="0.99"></div>
						<div class="loader_text text-center">Weakness Detectability</div>
						<div class="loader_sub text-center">Easy :99%</div>
						<div class="loader_sub text-center">Average :50%</div>
						<div class="loader_sub text-center">Difficult :25%</div>
					</div>
					<div class="col-lg-3 loader_col">
						<!-- Loader -->
						<div class="loader" data-perc="0.99"></div>
						<div class="loader_text text-center">Technical Impacts</div>
						<div class="loader_sub text-center">Severe :99%</div>
						<div class="loader_sub text-center">Moderate :50%</div>
						<div class="loader_sub text-center">Minor :25%</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Progress Bars and Accordions -->

		<div class="pbars_accordions">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="elements_title">OWASP Top 10 Implementations</div>
					</div>
				</div>

				<div class="row pbars_accordions_container">
					<!-- Progress Bars & Accordions -->

					<div class="col-lg-6">
						
						<!-- Progress Bars -->
						<div class="elements_progress_bars">

						<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> Injection</div>
								<div class="accordion_panel">
									<p>Injection flaws, such as SQL injection, LDAP injection, and CRLF injection, occur when an attacker sends untrusted data to an interpreter that is executed as a command without proper authorization.</p>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> Broken Authentication and Session Management</div>
								<div class="accordion_panel">
									<p>Incorrectly configured user and session authentication could allow attackers to compromise passwords, keys, or session tokens, or take control of users’ accounts to assume their identities.</p>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> Sensitive Data Exposure</div>
								<div class="accordion_panel">
									<p>Applications and APIs that don’t properly protect sensitive data such as financial data, usernames and passwords, or health information, could enable attackers to access such information to commit fraud or steal identities.</p>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> XML External Entity</div>
								<div class="accordion_panel">
									<p>Poorly configured XML processors evaluate external entity references within XML documents. Attackers can use external entities for attacks including remote code execution, and to disclose internal files and SMB file shares.</p>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> Broken Access Control</div>
								<div class="accordion_panel">
									<p>Improperly configured or missing restrictions on authenticated users allow them to access unauthorized functionality or data, such as accessing other users’ accounts, viewing sensitive documents, and modifying data and access rights.</p>
								</div>
							</div>
						

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> Cross-Site Scripting</div>
								<div class="accordion_panel">
									<p>Cross-site scripting (XSS) flaws give attackers the capability to inject client-side scripts into the application, for example, to redirect users to malicious websites.</p>
								</div>
							</div>
							
						</div>
					</div>

					<div class="col-lg-6">

						<!-- Accordions -->
						<div class="elements_accordions">

							<div class="accordion_container">
									<div class="button button_line_2 text-center trans_200"><a href="https://www.owasp.org/index.php/Top_10-2017_A1-Injection">Read More</a></div>
								   <div class="button button_line_1 text-center trans_200"><a href="#">Try it</a></div>
							</div>

							<div class="accordion_container">
							<div class="button button_line_2 text-center trans_200"><a href="https://www.owasp.org/index.php/Top_10-2017_A2-Broken_Authentication">Read More</a></div>
								   <div class="button button_line_1 text-center trans_200"><a href="#">Try it</a></div>
							</div>

							<div class="accordion_container">
							<div class="button button_line_2 text-center trans_200"><a href="https://www.owasp.org/index.php/Top_10-2017_A3-Sensitive_Data_Exposure">Read More</a></div>
								   <div class="button button_line_1 text-center trans_200"><a href="#">Try it</a></div>
							</div>

							<div class="accordion_container">
							<div class="button button_line_2 text-center trans_200"><a href="https://www.owasp.org/index.php/Top_10-2017_A4-XML_External_Entities_(XXE)">Read More</a></div>
								   <div class="button button_line_1 text-center trans_200"><a href="#">Try it</a></div>
							</div>

							<div class="accordion_container">
							<div class="button button_line_2 text-center trans_200"><a href="https://www.owasp.org/index.php/Top_10-2017_A5-Broken_Access_Control">Read More</a></div>
								   <div class="button button_line_1 text-center trans_200"><a href="#">RTry it</a></div>
							</div>

							<div class="accordion_container">
							<div class="button button_line_2 text-center trans_200"><a href="https://www.owasp.org/index.php/Top_10-2017_A7-Cross-Site_Scripting_(XSS)">Read More</a></div>
								   <div class="button button_line_1 text-center trans_200"><a href="#">Try it</a></div>
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
				<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Intern Colloboration | Team CISO <i  aria-hidden="true"></i> @ <a href="https://www.pearson.com/asia/" target="_blank">Pearson</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
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



<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/elements_custom.js"></script>

</body>
</html>