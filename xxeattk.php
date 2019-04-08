<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>XML- Validater</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/news_post_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_post_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="styles/jquery.bpopup.min.js"></script>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #ffb606;} 
</style>
</head>
<body>
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
				XML Validator  may contain a XML based vulnerability that may lead to run remote codes on system due to insufficient sanitization.
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
					<span>		
								<?php 
										session_start();
										if((isset($_COOKIE['_usrLogged']))&& (session_status() == PHP_SESSION_ACTIVE)){
											if((isset($_SESSION["user_cookie"]))&&(strtolower(trim($_COOKIE['_usrLogged'])) == trim($_SESSION["user_cookie"]))){
												echo $_SESSION["user_name"];
											}else{
												echo "GUEST";
											}
										}else{
											echo "GUEST";
										}
										
								?>
					</span>
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
				<span class="label label-danger"><button id="contact_send_btn" name="form_logout" type="submit" class="button button2" value="Submit">Student Logout</button></span>
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
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
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

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/news_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>XML- Validater</h1>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Post Column -->

				<div class="col-lg-8">
					
					<!-- Leave Comment -->

					<div class="leave_comment">
						<div class="leave_comment_title">Validate Your XML Here!</div>

						<div class="leave_comment_form_container">
							<form  method="post">
								<textarea name="xml" id="comment_form_message" class="text_field contact_form_message" name="message" placeholder="XML" required="required" data-error="Please, write us a message."></textarea>
								<button type="submit" value="Submit" id="comment_send_btn" class="comment_send_btn trans_200">Validate</button>
							</form>
							<?php
							  if(!empty($_POST["xml"])) {
							    libxml_disable_entity_loader (false); 
							    $xmlfile = $_POST["xml"];
							    $dom = new DOMDocument();
							    $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
							    
							    $x = $dom->documentElement;
							    foreach ($x->childNodes AS $item) {
								  print $item->nodeName . "=" . $item->nodeValue . "<br>";
								}

								}
								    // echo "Book Details<br/><br/>Name : $name<br/>Author : $author<br/>Price : $price/-";
							  
							?>

						</div>
						<br/><br/><br/>
						<center>
							<form  method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> >
									<button name="show_form" id="comment_send_btn" type="button" class="comment_send_btn trans_200" data-toggle="modal" data-target="#ClaudeModalCenter" style="width:35%;background:#17a2b8;height:40px">
										Acquire Flag Value
									</button>
							</form>
							
						</center>
						<div class="modal fade" id="ClaudeModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> >
											<div class="modal-header" style="background:#ffb606;color:white;border-bottom:1px solid #ffb606">
												<h5 class="modal-title" id="exampleModalLongTitle">Flag info</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body" style="background:#1a1a1a;color:white;">
													<div class="form-group row">
														<label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">What is the name of XML based Vaulnarability?:</label>
														<div class="col-sm-5">
															<input name="t_value" type="text" class="form-control form-control-sm" id="colFormLabelSm" >
														</div>
													</div>

													<div class="form-group row">
														<label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">Dummy flag value</label>
														<div class="col-sm-5">
															<input name="vuln_name" type="text" class="form-control form-control-sm" id="colFormLabelSm" >
														</div>
													</div>							
											</div>
											<div class="modal-footer">
												<button id="revel_Flag" name="showFlagDC" type="submit" value="Submit" class="btn btn-primary btn-sm" style="background:#ffb606; border-color:#ffb606">Reveal Flag</button>
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="background:#1a1a1a">Close</button>
											</div>
										</form>	

									</div>
							</div>
						</div>
						<?php
							if(isset($_POST['showFlagDC'])){
								if(($_POST['t_value'] == null)|| ($_POST['t_size'] == null) || ($_POST['vuln_name'] == null) || ($_POST['t_cols'] == null) || ($_POST['t_value'] == '')|| ($_POST['t_size'] == '') || ($_POST['vuln_name'] == '') || ($_POST['t_cols'] == '') ){
									echo '<center><span class="badge badge-danger">Please fill the fields correctly inorder to obtain the Flag</span></center>';
								}else{
									$tableV = htmlspecialchars(htmlentities($_POST['t_value']));
									$tableS = htmlspecialchars(htmlentities($_POST['t_size']));
									$vulN = htmlspecialchars(htmlentities($_POST['vuln_name']));
									$tableC = htmlspecialchars(htmlentities($_POST['t_cols']));

									$tableV = urlencode(preg_replace('/[^A-Za-z0-9_\-]/','',strtolower(trim(str_replace(' ','',$tableV)))));
									$tableS = urlencode(preg_replace('/[^A-Za-z0-9\-]/','',strtolower(trim(str_replace(' ','',$tableS)))));
									$vulN = urlencode(preg_replace('/[^A-Za-z0-9\-]/','',strtolower(trim(str_replace(' ','',$vulN)))));
									$tableC = preg_replace('/[^A-Za-z0-9_,\-]/','',strtolower(trim(str_replace(' ','',$tableC))));
									if(($tableV == 'ciit_news_comments') && (checkSize($tableS)) && (checkVulname($vulN)) && (checkCols($tableC))){
										$_SESSION["usertoken_2"] = hash('sha256',base64_encode(date("Y-m-d h:i:sa") . " storedXSS : ".$tableV.$tableC.$tableS.$vulN));
										echo '<br> <br>
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
										>'.$_SESSION["usertoken_2"].
										'</span>
										';
									}else{
										echo '<br> 
										<span 	class="badge badge-pill badge-danger" 
												style="
													display: block;
													margin-left: auto;
													margin-right: auto"
										>Please Try Again With Correct Input Values</span>
										';
									}

								}


							}

							function checkVulname($nameVul){
								$nameVul = strtolower($nameVul);
								if(strpos($nameVul, 'xss') !== false){
									if(strpos($nameVul, 'stored') !== false){
										return true;
									}else{return false;}
								}else{
									if(strpos($nameVul, 'storedcrosssitescripting') !== false){
										return true;
									}else{return false;}
								}
							}

							function checkCols($tCols){
								$flx = false;
								$value= 6;
								$tCols = strtolower($tCols);
								$colSize = sizeof(explode(",",$tCols));
								if($colSize === $value){
									if((strpos($tCols, 'u_id') !== false) && (strpos($tCols, 'u_name') !== false) && (strpos($tCols, 'u_email') !== false) && (strpos($tCols, 'ad_date') !== false) && (strpos($tCols, 'ad_appr') !== false)){
										$flx = true;
									}
								}
								return $flx;

							}

							function checkSize($tSizetable){
								$val = 6;
								if(is_numeric($tSizetable) && ($tSizetable == $val)){
									return true;
								}else{ 
									return false;
								}
							}
						?>
					</div>



				</div>

				<!-- Sidebar Column -->

				<div class="col-lg-4">
					<div class="sidebar">

						

						<!-- Latest Posts -->

				


								<!-- Latest Post -->

						<br/><br/><br/><br/><br/><br/>
						<div class="about">
							<div class="about_title">Note to the User</div>
							<p class="about_text">Hello User, this XML validater page may contain some vulnerabilities in it. You can find them by trial and error or any method you wish. Submit the flag inorder to advance to the next challenge from below.</p>
							<div class="contact_info">
								<ul>
									<li class="contact_info_item">
										<div class="contact_info_icon">
											<img src="images/exam.svg" alt="https://www.flaticon.com/authors/lucy-g">
										</div>
										<a target="_blank" href="2CA88326E269/sqli-sourcecode.txt" style="color:#ffb606" >Click to View the Source Code </a>
										</li>
									
								</ul>
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
										<button name="sub_token_1" id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Submit</button>
								</div>
								<?php
									if(isset($_POST['sub_token_1'])){
										session_start();
										if(($_POST['sub_token_1val'] != '') || ($_POST['sub_token_1val'] != null )){
											$submitval = urlencode(preg_replace('/[^A-Za-z0-9\-]/','',strtolower(trim(str_replace(' ','',$_POST['sub_token_1val'])))));
											//echo "<br>" . $submitval . " <br> token: <br>" .  $_SESSION["usertoken_1"];
											if($submitval == trim(urlencode($_SESSION["usertoken_2"]))){
												header("location: teachers.php");
											}else{
												echo '<span class="badge badge-danger">Wrong Flag</span> <br/>';
											}
										}
									}
								?>
								<br/>
							</form>
							<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> >
								<button name="skipLevel" id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit" style="background:#17a2b8;">Finish The Level</button>
								<?php
									if(isset($_POST['skipLevel'])){
										header("location: teachers.php");
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

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="js/min.js/down8.min.js"></script>
<script src="js/min.hts.js/down8.min.hts.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/news_post_custom.js"></script>

</body>
</html>