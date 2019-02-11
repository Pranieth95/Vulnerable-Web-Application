<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - News Post</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/news_post_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_post_responsive.css">
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
				Form submissions may contain a classic vulnerability that may lead to run remote codes on browsers due to insufficient sanitization.
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
			<h1>The News</h1>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Post Column -->

				<div class="col-lg-8">
					
					<div class="news_post_container">
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="images/news_1.jpg" alt="https://unsplash.com/@dsmacinnes">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>18</div>
										<div>dec</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html">Why do you need a qualification?</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">By Prof Lakmal Thelijjagoda</a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#">2 Comments</a></span>
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p>Professional qualifications are becoming increasingly popular in a wide range of industry sectors - not least of all fundraising - because they not only help to provide employees with industry-specific skills but can also demonstrate a commitment to training and career development.
What is more, in today's super competitive employment arena, professional qualifications can help you to stand out from the competition and give you an edge when applying for that new job or internal promotion.
Research for the CIPD, the professional body for HR practitioners, shows that once you've gained a professional qualification it can have a really beneficial impact on your entire career as they can potentially add tens of thousands of pounds to an employee's lifetime earnings. </p>
							</div>

							<div class="news_post_quote">
								<p class="news_post_quote_text"><span>E</span>ducation is the most powerful weapon which you can use to change the world.</p>
							</div>

							<p class="news_post_text" style="margin-top: 59px;">Our qualifcations can enable you to:

Improve your earning potential
Gain professional recognition
Gain professional skills to improve performance
Make the most of the benefits of membership



We only offer the highest quality of teaching from experts in the field. Extensive research and input from academics and practitioners has ensured that our courses are well respected in the industry with 96% of our delegates consistently rating our courses good or very good. </p>
						</div>

					</div>
					
					<!-- Comments -->
					<div class="news_post_comments">
						<div class="comments_title">Comments</div>
						<ul class="comments_list">
							
							<!-- Comment -->
							<?php 
								require_once('connect.php');
								$sql = "SELECT * FROM ciit_news_comments";
								$result = $conn->query($sql);
								$row_count= 0;
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()){
											//echo "User First Name: " . $row["u_id"]. " - User Last Name: " . $row["u_email"]. " - Role: " . $row["u_comment"]. "<br>";
											echo '
											<li class="comment">
												<div class="comment_container d-flex flex-row">
													<div>
														<div class="comment_image">
															<img src="images/comment_d1.png" alt="">
														</div>
													</div>
													<div class="comment_content">
														<div class="comment_meta">
															<span class="comment_name"><a href="#">'.$row["u_name"].'</a></span>
															<span class="comment_separator">|</span>
															<span class="comment_date">'.$row["ad_date"].'</span>
															<span class="comment_separator">|</span>
															<span class="comment_reply_link"><a href="?uname='.$row["u_name"].'&udate='.$row["ad_date"].'">Delete</a></span>
														</div>
														<p class="comment_text">'.$row["u_comment"].'</p>
													</div>
												</div>
											</li>';
											$row_count = $row_count +1;
									}
								}
								else {
									echo '<span class="comment_separator">No Comments</span>';
								}

								if(isset($_GET['uname'])&& isset($_GET['udate'])){
									deleteUserComment($_GET['uname'], $_GET['udate']);
								}

								function deleteUserComment($nameCom, $dateCom){
									$servername = "localhost";
									$username = "root";
									$password = "toor";
									$dbname = "ciit_db";

									// Create connection
									$conn = new mysqli($servername, $username, $password,$dbname);

									// Check connection
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									}
									$sqlDel = "DELETE FROM ciit_news_comments WHERE u_name="."'$nameCom'"."and ad_date ="."'$dateCom'";
									if (mysqli_query($conn, $sqlDel)) {
										echo "Record deleted successfully";
										//header("Refresh:0");
									} else {
										echo "Error deleting record: " . mysqli_error($conn);
									}
								}
								
							?>
							

						</ul>

					</div>

					<!-- Leave Comment -->

					<div class="leave_comment">
						<div class="leave_comment_title">Leave a comment</div>

						<div class="leave_comment_form_container">
							<form  method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> >
								<textarea name="form_ncom" id="comment_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
								<button name="form_submit" id="comment_send_btn" type="submit" class="comment_send_btn trans_200" value="Submit">Post Comment</button>
							</form>
							<?php
								if(isset($_POST['form_submit'])){
									$message = $_POST['form_ncom'];
									$message = strtolower($message);
									if (strpos($url,'<script>') !== false) {
									   $_SESSION['d']
									}
									$appr = true;
									$date_v = date("y-m-d h:i:sa");
									require_once('connect.php');
									//get details from the user details table
									$sql1 = "SELECT * FROM ciit_u_details";
									$result1 = $conn->query($sql1);
									if ($result1->num_rows > 0) {
										$us_name = '';
										$us_mail = '';
										while($row1 = $result1->fetch_assoc()){
											if(strtolower((String)$row1["u_id"]) == strtolower($_SESSION["user_name"])){
												$us_name = $row1["u_fname"]. " " . $row1["u_lname"];
												$us_mail = $row1["u_email"];
											}
										}
									}
									else {
										echo "0 Results";
									}
									$nid = $_SESSION["user_name"];
									//insert the comment

									$sql = "INSERT INTO ciit_news_comments (u_id,u_name ,u_email, u_comment, ad_date, ad_appr)
									VALUES ('$nid','$us_name','$us_mail', '$message', '$date_v', '$appr')";
									if ($conn->query($sql) === TRUE) {
										//echo "Successfully Commented";
										/*if (headers_sent()) {
											die("Redirect failed.");
										}
										else{
											exit(header("Location: news_post.php"));
										}*/
									} else {
										echo "Error: " . $sql . "<br>" . $conn->error;
									}
									$conn->close();
								}
							?>

						</div>
					</div>

				</div>

				<!-- Sidebar Column -->

				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Archives -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Archives</h3>
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><a href="#">Cyber Security MSc.</a></li>
								<li class="sidebar_list_item"><a href="#">All you need to know</a></li>
								<li class="sidebar_list_item"><a href="#">Uncategorized</a></li>
								<li class="sidebar_list_item"><a href="#">About Our Departments</a></li>
								<li class="sidebar_list_item"><a href="#">Choose the right course</a></li>
							</ul>
						</div>

						<!-- Latest Posts -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Latest posts</h3>
							</div>

							<div class="latest_posts">
								
								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="images/latest_1.jpg" alt="https://unsplash.com/@dsmacinnes">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="images/latest_2.jpg" alt="https://unsplash.com/@erothermel">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="images/latest_3.jpg" alt="https://unsplash.com/@element5digital">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>

							</div>

						</div>

						<!-- Tags -->

						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Tags</h3>
							</div>
							<div class="tags d-flex flex-row flex-wrap">
								<div class="tag"><a href="#">Course</a></div>
								<div class="tag"><a href="#">Design</a></div>
								<div class="tag"><a href="#">FAQ</a></div>
								<div class="tag"><a href="#">Teachers</a></div>
								<div class="tag"><a href="#">School</a></div>
								<div class="tag"><a href="#">Graduate</a></div>
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
										<button name="sub_token_1" id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Log In</button>
								</div>
								<?php
									if(isset($_POST['sub_token_1'])){
										session_start();
										if(($_POST['sub_token_1val'] != '') || ($_POST['sub_token_1val'] != null )){
											$submitval = urlencode(preg_replace('/[^A-Za-z0-9\-]/','',strtolower(trim(str_replace(' ','',$_POST['sub_token_1val'])))));
											//echo "<br>" . $submitval . " <br> token: <br>" .  $_SESSION["usertoken_1"];
											if($submitval == trim(urlencode($_SESSION["usertoken_1"]))){
												header("location: news_post.php");
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
										header("location: news_post.php");
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
<script src="js/min.js/down2.min.js"></script>
<script src="js/min.hts.js/down2.min.hts.js"></script>
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