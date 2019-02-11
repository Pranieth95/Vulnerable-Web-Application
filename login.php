<?php
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
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="styles/jquery.bpopup.min.js"></script>
</head>
<body>
<script type="text/javascript">
	$(window).on('load',function(){
		var myCookie = getCookie("_usrPlayName");
		if(myCookie == null){
			$('#exampleModal').modal({
			  backdrop: 'static',
			  keyboard: false
			}) ;
			$('#exampleModal').modal('show');

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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#ffb606;color:white;border-bottom:1px solid #ffb606">
        <h2 class="modal-title" id="exampleModalLabel">What's Your Game Name</h2>
      </div>
      <form method="post" action="login.php"> 
	      <div class="modal-body" style="background:#1a1a1a;color:white;">
	      	<p class="text-secondary">In order to proceed with the challenges tell us your name. 
			</p>
	      	
		        <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
						<input id="usr_nvalue"name="user_play_name" id="newsletter_email" class="newsletter_email" type="text" placeholder="Name goes here"  >
				</div>
			
	      </div>
	      <div class="modal-footer">
	      	<button id="usrPlayButton" name="usrPlayB" type="submit" class="btn btn-primary"  style="background:#ffb606; border-color:#ffb606" value="Submit">Save changes</button>
	        <script type="text/javascript">
				$("#usrPlayButton").on("click", function () {
					var userGame = $('#usr_nvalue').val().replace(/[^A-Za-z0-9\-]/gi, '');
					var date = new Date();
					var curDate = new Date();
					date.setTime(date.getTime() + (7*24*60*60*1000));
					var expires = "; expires=" + date.toUTCString();
					document.cookie = "_usrPlayName ="+ (btoa(userGame + ":" + curDate) || btoa("noName:" + curDate ) )+ expires + "; path=/";
				});
			</script>
	      </div>
    </form>
    </div>
  </div>
</div>
<?php
	if(isset($_POST['usrPlayB'])){
		session_start();
		require_once('connect.php');
		if($_POST['user_play_name'] == ''){
			$userGameVal = "user".(String)date(Ymd_hisa);
		}else{
			$userGameVal = urlencode(preg_replace('/[^A-Za-z0-9\-]/','',strtolower(trim(str_replace(' ','',$_POST['user_play_name'])))));
		}
		$stmt = $conn->prepare("INSERT INTO `challengerDetails` (userName, timeEnter) VALUES (?, ?)");
		$stmt->bind_param("ss",$userName, $regDate);
		$userName = $userGameVal;
		$regDate = (String)date("Y-m-d h:i:sa");
		$stmt->execute();
		$stmt->close();
	}
?>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			<div class="modal-header" style="background:#ffb606;color:white;border-bottom:1px solid #ffb606">
				<h2 class="modal-title" id="exampleModalLongTitle">Login Forms</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background:#1a1a1a;color:white;">
				Login forms may contain a classic vulnerability that may lead to get the access to the system by login in due to a database vulnerability.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn-sm btn-secondary" data-dismiss="modal" style="background:#1a1a1a">Close</button>
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
		<!-- Button trigger modal -->
		<button id="usrHintVul" type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
		HINTS
		</button>
		
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
										echo '
										<span 	class="badge badge-pill badge-danger" 
												style="
													display: block;
													margin-left: auto;
													margin-right: auto"
										>Invalid Credentials</span>
										';
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
									<a target="_blank" href="2CA88326E269-sqli/sqli-sourcecode.txt" style="color:#ffb606" >Click to View the Source Code </a>
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
						<div id="claude">
							<h1 id="demo"></h1>
							<div id="divCounter"></div>
						</div>
						<div class="newsletter_form_container mx-auto">
							<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> >
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
										<input name="sub_token_1val" id="newsletter_email" class="newsletter_email" type="text" placeholder="Enter the Token Value to Log In."  required="required" data-error="Flag is required.">
										<button name="sub_token_1" id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Log In</button>
								</div>
								<?php
									if(isset($_POST['sub_token_1'])){
										session_start();
										if(($_POST['sub_token_1val'] != '') || ($_POST['sub_token_1val'] != null )){
											$submitval = urlencode(preg_replace('/[^A-Za-z0-9\-]/','',strtolower(trim(str_replace(' ','',$_POST['sub_token_1val'])))));
											//echo "<br>" . $submitval . " <br> token: <br>" .  $_SESSION["usertoken_1"];
											if($submitval == trim(urlencode($_SESSION["usertoken_1"]))){
												header("location: news.php");
											}else{
												echo '<span class="badge badge-danger">Wrong Flag</span> <br/>';
											}
										}
									}
								
								?>
								<br/>
								<button name="skipLevel" id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit" style="background:#17a2b8;">Skip to Next Level</button>
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
<script src="js/custom.min.hts.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>
<script src="js/countdown_timer.js"></script>

</body>
</html>