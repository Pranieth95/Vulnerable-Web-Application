<?php
//session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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
					<span>Ceylon Informatics Information Technology</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<a href="index.php"><span class="label label-danger">Back to Site</span></a>
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
		

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
		
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Sign in</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Get in touch</div>

						<div class="contact_form_container">
							<form id="search_form" class="search_form" method="post" action="login.php">
								<input id="search_form_name" name="form_lname" class="input_field search_form_name" type="text" placeholder="ITxxxxxxxxxx" required="required" data-error="Course name is required.">
								<input id="search_form_category" name="form_lpass" class="input_field search_form_category" type="password" placeholder="Password">
                                <button id="contact_send_btn" name="form_lsubmit" type="submit" class="contact_send_btn trans_200" value="Submit">Login</button>
							</form>
							<?php
                            if(isset($_POST['form_lsubmit'])){
                                //header('Location: courses.php');
                                if(isset($_POST['form_lname'])&& isset($_POST['form_lpass'])){
									session_start();
                                    require("connect.php");
                                    $uname = $_POST['form_lname'];
									$pass = $_POST['form_lpass'];
									$stripped_uname = str_replace(' ','',$uname);
									$stripped_pswd = str_replace(' ','',$pass);
									$_SESSION["usertoken_1"]=null;
									//Dynamic Query
                                    $sql = "SELECT u_name, u_pass FROM ciit_login WHERE u_name ="."'$uname'"."and u_pass ="."'$pass'" ;
									$result = $conn->query($sql);
									//echo $sql;
									if ($result->num_rows > 0) {
										$row = $result->fetch_assoc();
										$_SESSION["user_name"] = $row["u_name"];
										$cookie_n = "_usrLogged";
										$str = $uname.":".$pass;
										$newstr = $cookie_n."".$str;
										$cookie_val = hash('sha256',base64_encode(trim($newstr)));
										$_SESSION["user_name"] = $row["u_name"];
										$_SESSION["user_cookie"] = $cookie_val;
										//setting up the cookie
										setcookie($cookie_n, $cookie_val, time() + (86400 * 2), "/", "",false,true);
										$_SESSION["authenticated"] = true;
                                    }
                                    else {
										echo "Invalid Credentials";
									}
									if($_SESSION["authenticated"] == true){
										$_SESSION["usertoken_1"] = hash('sha256',base64_encode(date("Y-m-d h:i:sa") . " user : ".$uname));
										echo '
										<div class="alert alert-dismissible alert-success">
											<button type="button" class="close" data-dismiss="alert">&times;</button>
											<strong>Well done!</strong> You successfully found the Vulnerability .
										</div>
										';
										echo '
										<span 	class="badge badge-pill badge-info" 
												style="
													display: block;
													margin-left: auto;
													margin-right: auto"
										>'.$_SESSION["usertoken_1"].
										'</span>
										';
									}
                                    $conn->close();
                                }
                            }

                            ?>
						</div>
					</div>
						
				</div>
				
				<div class="col-lg-4">
					<div class="about">
						<div class="about_title">Note to the User</div>
						<p class="about_text">Hello User, this login page may contain some vulnerabilities in it. You can find them by trial and error or any method you wish. Submit the flag inorder to advance to the next challenge from below.</p>

						<div class="contact_info">
							<ul>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/exam.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									<a target="_blank" href="2CA88326E2691DC337AD71F75E839615:sqli/sqli-sourcecode.txt" style="color:#ffb606" >Click to View the Source Code </a>
									</li>
								
							</ul>
						</div>

					</div>
				</div>

			</div>

			

		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> >
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
										<input name="sub_token_1val" id="newsletter_email" class="newsletter_email" type="text" placeholder="Enter the Token Value to Log In."  >
										<button name="sub_token_1" id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Log In</button>
								</div>
								<?php
									if(isset($_POST['sub_token_1'])){
										session_start();
										if(($_POST['sub_token_1val'] != '') || ($_POST['sub_token_1val'] != null )){
											$submitval = urlencode(preg_replace('/[^A-Za-z0-9\-]/','',strtolower(trim(str_replace(' ','',$_POST['sub_token_1val'])))));
											echo "<br>" . $submitval . " <br> token: <br>" .  $_SESSION["usertoken_1"];
											if($submitval == trim(urlencode($_SESSION["usertoken_1"]))){
												header("location: news.php");
											}
										}
									}
								
								?>
							</form>
						</div>
					</div>
				</div>

				

			</div>

			<!-- Footer Content -->


			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>  All rights reserved | Intern Colloboration | Team CISO <i  aria-hidden="true"></i> @ <a href="https://www.pearson.com/asia/" target="_blank">Pearson</a>
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

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>