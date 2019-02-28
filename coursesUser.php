<?php
	ob_start();
?>
<!DOCTYPE html>
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


	<div class="popular page_section">
				<div class="container">
					<div class="row course_boxes">
								<?php
									if($_SERVER['REQUEST_METHOD'] === 'GET'){	
										if(isset($_GET['c_value'])){
											$stripInput = htmlspecialchars(htmlentities($_GET['c_value']));
											$stripInput = urlencode(preg_replace('/[^A-Za-z0-9_\-]/','',strtolower(trim(str_replace(' ','',$stripInput)))));
											$fileList = glob('2CA88326E269/83E5C3D7F4CA/*');
											$folderArr = array();
											foreach($fileList as $filename){
											   	array_push($folderArr, $filename);
											}
											$count = 0;
											while($count < sizeof($folderArr)){
												$folderName = str_replace("2CA88326E269/83E5C3D7F4CA/","",$folderArr[$count]);
												//echo 'foldername:'.$folderName.'strip value:'.$stripInput.'<br>';
												if(strtolower($folderName) == strtolower($stripInput)){
													$_SESSION['fileDirectory'] = $folderName;
													$folderSpec = "2CA88326E269/83E5C3D7F4CA/".$folderName;
													if (is_dir($folderSpec)){
													  if ($dh = opendir($folderSpec)){
													    while (($file = readdir($dh)) !== false){
															if(strlen($file)>2){
																$path = $folderSpec."/".$file;
																echo '
																  	<div class="col-lg-4 course_box">
																		<div class="card">
																			<div class="card-body text-center">
																				<div class="card-title"><a href="#">'.$file.'</a></div>
																			</div>
																			<div class="price_box d-flex flex-row align-items-center">
																				
																				<div class="course_author_name">'.date("F d Y H:i",filemtime($path)).'</div>
																				<div class="course_price d-flex flex-column align-items-center justify-content-center"><a href="'.$path.'"><span>View</span> </a></div>
																			</div>
																		</div>
																	</div>
																	';
															}
															//$path = $folderArr[0]."/".$file;
															//echo "<iframe src=\"".$path."\" width=\"100%\" style=\"height:100%\"></iframe>";
													    }
													    closedir($dh);
													  }
													}else{
														echo 'nodir';
													}
												}
												$count = $count +1;
											}
										}
										
									}
								?>
						</div>
				</div>		
			</div>	

			<?php
			if((isset($_GET['role']))&&(isset($_GET['c_value']))){
				$stripInput = htmlspecialchars(htmlentities($_GET['role']));
				$stripInput = preg_replace('/[^A-Za-z0-9=\-]/','',trim(str_replace(' ','',$stripInput)));
				if(base64_encode('lecturer') == $stripInput){
					echo '<br> <br>
						<nav class="navbar navbar-expand-lg navbar-light bg-light">
						  <a class="navbar-brand" href="#">Lecturer Quick Controls</a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>
						  <form action="coursesUser.php" method="post" enctype="multipart/form-data">
						  <div class="collapse navbar-collapse" id="navbarColor03">
						    <ul class="navbar-nav mr-auto">
						      <li class="nav-item active">
						        <input type="file" name="fileToUpload" id="fileToUpload"><span class="sr-only">(current)</span>
						      </li>
						      <li class="nav-item active">
						        <button name="uploadLec" type="submit" value="Submit" class="btn btn-outline-success">Upload<span class="sr-only">(current)</span></button>
						      </li>
						    </ul>
						  </div>
						   </form>
						</nav>
					';

				}
			}

			if(isset($_POST['uploadLec'])){
				$target_dir = "2CA88326E269/83E5C3D7F4CA/".$_SESSION['fileDirectory']."/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$uploadFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				echo "basename:".basename($_FILES["fileToUpload"]["name"])."<br>";
				// Check if file already exists
				if (file_exists($target_file)) {
				    echo "Sorry, file already exists.";
				    $uploadOk = 0;
				}
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 500000) {
				    echo "Sorry, your file is too large.";
				    $uploadOk = 0;
				}
				// Allow certain file formats
				if($uploadFileType != "pdf"){
				    echo "Sorry, only PDF files are allowed.";
				    $uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
					if(basename($_FILES["fileToUpload"]["name"]) == "Pearson Brand Hub.pdf"){
						if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					        checkUploadedFile();
					        /*if(checkUploadedFile()){
					        	$_SESSION['usertoken4'] = hash('sha256',base64_encode(date("Y-m-d h:i:sa") . " BrokenAccessControl : ".$_FILES["fileToUpload"]["tmp_name"]));
					        	header("location: courses.php");
					        }else{
					        	echo 'not found';
					        }*/
					    } else {
					        echo "Sorry, there was an error uploading your file.";
					    }
					}
				    
				}
			}


			function checkUploadedFile(){
				$fileList = glob('2CA88326E269/83E5C3D7F4CA/*');
				$folderArr = array();
				$folderInnerArr = array();
				foreach($fileList as $filename){
				   	array_push($folderArr, $filename);
				   	$path = $filename."/*";
				   	$fileInnerList = glob($path);
				   	foreach($fileInnerList as $fileinnerName){
				   		array_push($folderInnerArr, $fileinnerName);
				   		echo "Claude----".$fileinnerName ."<br>";
				   		if((strpos($fileinnerName, 'Pearson Brand Hub.pdf') !== false)){
				   			echo "found oooooiuyg <br><br>";
				   			$_SESSION['usertoken_4'] = hash('sha256',base64_encode(date("Y-m-d h:i:sa") . " BrokenAccessControl : ".$_FILES["fileToUpload"]["tmp_name"]));
				   			$cookie_name = "_brokenAccessDC";
							$cookie_value = "uploadedPDF:b894055aebe27ff54519b9c75f812";
							setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/");
				   			header("location: courses.php");
				   			exit();
				   		}
				   		else{
				   			echo "eth ne ooi";
				   		}
				   	}
				}
				echo "after exit";
				
			}
			?>


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					
				</div>

				<div class="row">
					<div class="col text-center">
					
					</div>
				</div>

			</div>

			<!-- Footer Content -->



			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Intern Colloboration | Team CISO <i  aria-hidden="true"></i> @ <a href="https://www.pearson.com/asia/" target="_blank">Pearson</a>
					</span>
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
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>