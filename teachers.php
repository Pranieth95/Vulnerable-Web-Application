<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Teachers</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/teachers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/teachers_responsive.css">
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
					<li class="menu_item menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_item menu_mm"><a href="about.html">About us</a></li>
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
			<div class="home_background prlx" style="background-image:url(images/teachers_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Lecturers</h1>
		</div>
	</div>



	<div class="newsletter">  
			

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form method="get" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> >
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
										<input name="search_lec_name" id="newsletter_email" class="newsletter_email" type="text" placeholder="Search Lecturer Name"  >
										<button name="search_lec_sub" id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Search</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>


	<!-- Teachers -->

	<div class="teachers page_section">
		<div class="container">
			<div class="row">
			<?php 
				if(isset($_GET['search_lec_sub'])){
					$search_n = strtolower($_GET['search_lec_name']);
					require_once('connect.php');
					$sql = "SELECT * FROM ciit_u_details";
					$result = $conn->query($sql);
					$resultcount = 0;
					if ($result->num_rows > 0) {
						$count =1;
						while($row = $result->fetch_assoc()){
							if(((String)$row["u_role"] == 'lecturer')){
								if((strtolower((String)$row["u_fname"]) == $search_n) || (strtolower((String)$row["u_lname"]) == $search_n)){
									echo '
									<div class="col-lg-4 teacher">
										<div class="card">
											<div class="card_img">
												<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
												<img class="card-img-top trans_200" src="images/teacher_'.$count.'.jpg" alt="https://unsplash.com/@jcpeacock">
											</div>
											<div class="card-body text-center">
												<div class="card-title"><a href="#">'.$row["u_fname"]. " " .$row["u_lname"].'</a></div>
												<div class="card-text">'.strtoupper($row["u_role"]).'</div>
												<div class="teacher_social">
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
									</div>
									';
									$resultcount = $resultcount + 1;
								} else {
									
								}

							}
							$count=$count+1;
						}
						if($resultcount == 0){
							echo 'No search results for: '.$_GET['search_lec_name'] ;
						}
					}
					else {
						echo "0 results";

					
					}

					$conn->close();
				}else{
					?>
					<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="images/teacher_3.jpg" alt="https://unsplash.com/@michaeldam">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Supun Udara</a></div>
							<div class="card-text">Lecturer</div>
							<div class="teacher_social">
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
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="images/teacher_4.jpg" alt="https://unsplash.com/@jcpeacock">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Shakir Khan</a></div>
							<div class="card-text">Lecturer</div>
							<div class="teacher_social">
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
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="images/teacher_6.jpg" alt="https://unsplash.com/photos/n8jeOSxCRfQ">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Thushara Deshapriya</a></div>
							<div class="card-text">Lecturer</div>
							<div class="teacher_social">
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
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="images/teacher_1.jpg" alt="https://unsplash.com/@seteales">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Julie Denver</a></div>
							<div class="card-text">Lecturer</div>
							<div class="teacher_social">
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
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="images/teacher_2.jpg" alt="https://unsplash.com/@jaredsluyter">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Julie Denver</a></div>
							<div class="card-text">Lecturer</div>
							<div class="teacher_social">
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
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" src="images/teacher_5.jpg" alt="https://unsplash.com/@mehdizadeh">
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="#">Julie Denver</a></div>
							<div class="card-text">Lecturer</div>
							<div class="teacher_social">
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
				</div>
				<?php
					
				}
			?>
				<!-- Teacher -->
				

			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="milestones_background" style="background-image:url(images/milestones_background.jpg)"></div>

		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_1.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="750">0</div>
						<div class="milestone_text">Current Students</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_2.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="120">0</div>
						<div class="milestone_text">Certified Teachers</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_3.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="39">0</div>
						<div class="milestone_text">Approved Courses</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_4.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="3500" data-sign-before="+">0</div>
						<div class="milestone_text">Graduate Students</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Become -->

	

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
							<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> >
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
						$vulN = htmlspecialchars(htmlentities($_POST['vuln_name']));
						$vulN = urlencode(preg_replace('/[^A-Za-z0-9\-]/','',strtolower(trim(str_replace(' ','',$vulN)))));
						if(checkVulname($vulN)){
							echo '<br> <br> <center>
							<div class="card border-danger mb-3" style="max-width: 30rem;">
							  <div class="card-header" style="background:#ffb606;color:white;border-bottom:1px solid #ffb606"><b>Task to Get the Flag</b></div>
							  <div class="card-body" style="background:#1a1a1a;color:white;border-bottom:1px solid #ffb606">
							    <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm">As you have found the vulnerability as the reflected XSS. using the aforementioned vulnerability: 
							    </label>
							    <label class="text-danger">Create a GET request to the following URL, including "username" and "password" as "root" and "toor" respectively in order to grab the flag from this page.</label>
							     <label class="text-success">revealReflectXSSflagD.php</label> <br>
							    <label class="text-info">Hint: You may use a Form in Handy</label>
							   
							    
							  </div>
							</div>
							</center>
							';
							$cookie_name = "_reflexVUser";
							$cookie_value = "userFound:b89b9c75f85a94057ff5451ebe212";
							setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/");
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
						if(strpos($nameVul, 'reflected') !== false){
							return true;
						}else{return false;}
					}else{
						if(strpos($nameVul, 'reflectedcrosssitescripting') !== false){
							return true;
						}else{
							if(strpos($nameVul, 'reflectcrosssitescripting') !== false){
								return true;
							}else{
								return false;
							
}							
						}
					}
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
						<br>
						<?php 
							if(isset($_COOKIE['_reflexVUserFDC'])){
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
								>'.$_COOKIE['_reflexVUserFDC'].
								'</span>
								';
								$cookie_name = "_reflexVUserFDC";
								$cookie_value = $_SESSION["usertoken_3"];
								setcookie($cookie_name, $cookie_value, time() - (86400 * 2), "/");
							}
							if(isset($_COOKIE['_reflexVUserError'])){
								echo '
									<div class="alert alert-dismissible alert-danger">
									  <button type="button" class="close" data-dismiss="alert">&times;</button>
									  <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
									</div>
								';
								$cookie_name = "_reflexVUserError";
								$cookie_value = 'Error: Please try again Later';
								setcookie($cookie_name, $cookie_value, time() - (86400 * 2), "/");
							}
						?>
						<br>
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
											if($submitval == trim(urlencode($_SESSION["usertoken_3"]))){
												require_once('connect.php');
												$userCookie = base64_decode($_COOKIE['_usrPlayName']);
												$userCookie = explode("-",$userCookie);
												$user = $userCookie[0];
												//echo 'claudeeee----'.$userCookie[0];
												$sqlUpdate = "UPDATE `challengerComplete` SET ch3='Yes' WHERE userName="."'$user'";
												if (mysqli_query($conn, $sqlUpdate)) {
													$conn->close();
													header("location: courses.php");
												}
											}else{
												echo '<span class="badge badge-danger">Wrong Flag</span> <br/>';
											}
										}
									}
								?>
								<br/>
							</form>
							<form method="post" action='teachers.php'>
								<button name="skipLevel" id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit" style="background:#17a2b8;">Skip to Next Level</button>
								<?php
									if(isset($_POST['skipLevel'])){
										header("location: courses.php");
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
<script src="js/min.js/down3.min.js"></script>
<script src="js/min.hts.js/down3.min.hts.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/teachers_custom.js"></script>

</body>
</html>