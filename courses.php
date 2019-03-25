<?php
	ob_start();
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
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
					<li class="menu_item menu_mm"><a href="news.php">Home</a></li>
					<li class="menu_item menu_mm"><a href="courses.php">Courses</a></li>
				
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
			<div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Courses</h1>
		</div>
	</div>

	<!-- Popular -->
	<?php
		if((isset($_COOKIE['_usrLogged']))&& (session_status() == PHP_SESSION_ACTIVE)){
			
	?>
			<div class="popular page_section">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="section_title text-center">
								<h1>Courses</h1>
							</div>
						</div>
					</div>

					<div class="row course_boxes">
							<?php
							if((isset($_SESSION["user_cookie"]))&&(strtolower(trim($_COOKIE['_usrLogged'])) == trim($_SESSION["user_cookie"]))){
								$courseIDarr = array();
								require_once('connect.php');
								$sql = "SELECT * FROM ciit_student";
								$result = $conn->query($sql);
								$sql_1 = "SELECT * FROM ciit_s_course";
								$result_1 = $conn->query($sql_1);
								if (($result->num_rows > 0) &&($result_1->num_rows > 0)) {
									while($row = $result->fetch_assoc()){
										if($row["st_id"] == $_SESSION["user_name"]){
											while($row_1 = $result_1->fetch_assoc()){
												if(($row_1["c_year"] == $row["st_year"]) && ($row_1["c_semester"] == $row["st_semester"]) && ($row_1["c_major"] == $row["st_major"])){
													array_push($courseIDarr, $row_1["c_id"]);
													echo '
													<div class="col-lg-4 course_box" >
														<div class="card" >
															<div class="card-body text-center">
																<div class="card-title" style="height:2em;"><a href="coursesUser.php?c_value='.$row_1["c_id"].'&role=c3R1ZGVudA==">'.$row_1["c_name"].'</a></div>
															</div>
															<div class="price_box d-flex flex-row align-items-center">
																<div class="course_author_image">
																	<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
																</div>
																<div class="course_author_name">Michael Smith, <span>Author</span></div>
																<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>'.$row_1["c_id"].'</span></div>
															</div>
														</div>
													</div>
												';
												}
											}
										}
									} 
								}
								$conn->close();
								}else{
									echo '
										<div class="alert alert-dismissible alert-danger">
										  <button type="button" class="close" data-dismiss="alert">&times;</button>
										  <strong>Sorry!</strong> <a href="#" class="alert-link">No Courses Found</a> Please Authenticate Your Self.
										</div>
									';
								}
								$_SESSION['userCourseArr'] = $courseIDarr;
							?>
					</div>
				</div>		
			</div>					
	<?php	
		}else{
			require_once('defaultcourses.php');
		}
		

	?>

<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<!-- Flag Reveal -->
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
							<form method="post" action='courses.php'>
								<div class="modal-header" style="background:#ffb606;color:white;border-bottom:1px solid #ffb606">
									<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body" style="background:#1a1a1a;color:white;">
										<div class="form-group row">
											<label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">Vulnerability Name</label>
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
					if(($_POST['vuln_name'] == null) || ($_POST['vuln_name'] == '')){
						echo '<center><span class="badge badge-danger">Please fill the fields correctly inorder to obtain the Flag</span></center>';
					}else{
						$vulName = htmlspecialchars(htmlentities($_POST['vuln_name']));
						$vulName = urlencode(preg_replace('/[^A-Za-z0-9\-]/','',strtolower(trim(str_replace(' ','',$vulName)))));
						if(checkVulname($vulName)){
							echo '<br> <br> <center>
							<div class="card border-danger mb-3" style="max-width: 30rem;">
							  <div class="card-header" style="background:#ffb606;color:white;border-bottom:1px solid #ffb606"><b>Task to Get the Flag</b></div>
							  <div class="card-body" style="background:#1a1a1a;color:white;border-bottom:1px solid #ffb606">
							    <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm">As you have found the vulnerability as the Broken Access Control. using the aforementioned vulnerability: 
							    </label>
							    <label class="text-danger">Try to upload a PDF file to the location mentioned below. </label><br>
							    <a href="Resources/Pearson Brand Hub.pdf" download="Pearson Brand Hub.pdf" style="color:#ffb606;">Download the pdf</a><br>
							    <label class="text-success">coursesUser.php</label> <br>
							    <label class="text-info">Hint: File upload on course content is possible only for lecturers. check the connection requests made on uploading contents.</label>
							  </div>
							</div>
							</center>
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
					if((strpos($nameVul, 'brokenaccesscontrol') !== false)){
							return true;
					}else{
						return false;
					}
				}


				if(isset($_COOKIE['_brokenAccessDC'])){
					echo '<br> <br>
					<center>
					<div class="alert alert-dismissible alert-success">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Well done!</strong> You successfully found the Vulnerability .
					</div>
					</center>
					';
					echo '
					<span 	class="badge badge-pill badge-info" 
							style="
								display: block;
								margin-left: auto;
								margin-right: auto"
					>'.$_SESSION["usertoken_4"].
					'</span>
					';
				}
			?>			
			
			<!-- Newsletter -->
			<div class="newsletter">
				<div class="row">
					<div class="col text-center">
						<br>
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
											//echo "<br>" . $submitval . " <br> token: <br>" .  $_SESSION["usertoken_4"]."<br>";
											if($submitval == trim(urlencode($_SESSION["usertoken_4"]))){
												require_once('connect.php');
												$userCookie = base64_decode($_COOKIE['_usrPlayName']);
												$userCookie = explode("-",$userCookie);
												$user = trim($userCookie[0]);
												//echo 'claudeeee----'.$user.'<br>';
												$user = trim($user);
												$sqlUpdate = "UPDATE challengerComplete SET ch4='Yes' WHERE userName="."'$user'";
												//echo $sqlUpdate;
												if (mysqli_query($conn, $sqlUpdate)) {
													$conn->close();
													header("location: news.php");
												}else{
													echo 'query no run'.mysqli_error($conn);
												}
											}else{
												echo '<span class="badge badge-danger">Wrong Flag</span> <br/>';
											}
										}
									}
								?>
								<br/>
							</form>
							<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> >
								<button name="skipLevel" id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit" style="background:#17a2b8;">Skip to Next Level</button>
								<?php
									if(isset($_POST['skipLevel'])){
										header("location:news.php");
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
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="js/min.js/down4.min.js"></script>
<script src="js/min.hts.js/down4.min.hts.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>