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
<?php
	$userCookie = base64_decode($_COOKIE['_usrPlayName']);
	$userCookie = explode("-",$userCookie);
	$user = $userCookie[0];
	
	require_once('connect.php');
	$sql = "SELECT * FROM `challengerDetails`";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			if(((String)$row["userName"] == $user)){
				$HintArray = [];
				$chArray = [];
				for ($x = 1; $x <= 8; $x++) {
					$HintName = "Hint".$x;
					$ChalName = "ch".$x;
				   	array_push($HintArray,$row[(String)$HintName]);
				   	array_push($chArray,$row[(String)$ChalName]);
				}

				//Assigning to Session
				$_SESSION["userName"] = $row["userName"];
				$_SESSION["ChallnegeARR"] = $chArray;
				$_SESSION["HintARR"] = $HintArray;
				$_SESSION["enterTime"] =$row["timeEnter"];
				$_SESSION["leaveTime"] =$row["timeLeave"];
			}else{
				//sdsd
			}
		}
	}
	else {
		echo "0 results";
	}	
?>
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
			<h1>User: <?php echo strtoupper($_SESSION["userName"]);?></h1>
		</div>
	</div>

	<?php
		$countCh = 0;
		$countHint = 0;
		foreach($_SESSION["ChallnegeARR"] as $n){
			if($n=='Yes'){
				$countCh = $countCh +1;
			}
		}
		foreach($_SESSION["HintARR"] as $n){
			if($n=='Yes'){
				$countHint = $countHint +1;
			}
		}
		$_SESSION["CompleteChCount"] = $countCh;
		$_SESSION["CompleteHintCount"] = $countHint;

		$dateC1 = new DateTime($_SESSION["enterTime"]);
		$dateC2 = new DateTime($_SESSION["leaveTime"]);
		$_SESSION["intervalTime"] = $dateC2->diff($dateC1);

		$scoreforCh = ($_SESSION["CompleteChCount"] *10) - ($_SESSION["CompleteHintCount"]*3.759);
		$bonus = 0;
		$hours = (int)$_SESSION["intervalTime"]->format('%H');
		$mins = (int)$_SESSION["intervalTime"]->format('%I');
		$sec = (int)$_SESSION["intervalTime"]->format('%S');
		$durationCh =(($hours*60*60)+($mins*60)+$sec);

		$reducing_Val =0.123;
		$levelConstL = 1;
		$levelConstM = 2.3;
		$levelConstH = 3.7;
		$levelConstE = 5;
		$scoreF = 0;
		
		echo "<br>Duration:".$durationCh;
		echo "<br>LevelsCompleted: ".$_SESSION["CompleteChCount"];
		echo "<br>Hints Completed: ".$_SESSION["CompleteHintCount"];
		echo "<br>Normal Score: ".$scoreforCh;
		for ($levelsComp=8; $levelsComp >0 ; $levelsComp--) { 
			if(($durationCh>5400)&&($durationCh<=7200)){
				if($_SESSION["CompleteChCount"] == $levelsComp){
					$scoreF = $scoreforCh + ($levelConstL *4);
					break;
				}
				$levelConstL = $levelConstL - $reducing_Val;
			}elseif (($durationCh>3600)&&($durationCh<=5400)) {
				if($_SESSION["CompleteChCount"] == $levelsComp){
					$scoreF = $scoreforCh + ($levelConstM *4);
					break;
				}
				$levelConstM = $levelConstM - $reducing_Val;
			}elseif (($durationCh>1800)&&($durationCh<=3600)) {
				if($_SESSION["CompleteChCount"] == $levelsComp){
					$scoreF = $scoreforCh + ($levelConstH *4);
					break;
				}
				$levelConstH = $levelConstH - $reducing_Val;
			}elseif (($durationCh>0)&&($durationCh<=1800)) {
				if($_SESSION["CompleteChCount"] == $levelsComp){
					$scoreF = $scoreforCh + ($levelConstE *4);
					break;
				}
				$levelConstE = $levelConstE - $reducing_Val;
			}else{
			}
		}
		$_SESSION["Final Score"]=round($scoreF,2);
		
		function colorChange($percenatge){
			if(($percenatge>0) &&($percenatge<=25)){
				return "bg-danger";
			}elseif (($percenatge>25) &&($percenatge<=50)){
				return "bg-warning";
			}elseif (($percenatge>50) &&($percenatge<=75)){
				return "bg-info";
			}elseif (($percenatge>75) &&($percenatge<=100)){
				return "bg-success";
			}else{
				return "";
			}
		}
		echo colorChange($_SESSION["Final Score"]);
		echo "<br>Final | Last Score: ".round($scoreF,2);
	?>

	<!-- Contact -->
	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<!-- Contact Form -->
					<div class="contact_form">
						<center>
							<div class="contact_title">Your SCORE</div>
							<div class="contact_form_container">
								<div class="card" style="width: 30rem;">
								  <div class="card-body">
								    <p class="card-text">Challenge Summary:</p>
								    <ul class="list-group">
									  <li class="list-group-item d-flex justify-content-between align-items-center">
									    Challenges Completed
									    <span class="badge badge-primary badge-pill"><?php echo $_SESSION["CompleteChCount"];?></span>
									  </li>
									  <li class="list-group-item d-flex justify-content-between align-items-center">
									    Hints Revealed
									    <span class="badge badge-primary badge-pill"><?php echo $_SESSION["CompleteHintCount"];?></span>
									  </li>
									  <li class="list-group-item d-flex justify-content-between align-items-center">
									    Time Taken
									    <span class="badge badge-primary badge-pill"><?php echo $_SESSION["intervalTime"]->format('%H hour(s), %I minute(s), %S second(s)');?></span>
									  </li>
									</ul>
									<br>
								    <span class="badge badge-success" 
								    style="margin-bottom: 10px;
									padding-bottom: 1.25em;
									padding-top: 1.25em;
									padding-right: 5.4em;
									padding-left: 5.4em;">
									
									<?php echo $_SESSION["Final Score"]."%";?>
									</span><br>
									<div class="progress">
									  <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo colorChange($_SESSION["Final Score"]);?>" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_SESSION["Final Score"]."%";?>"></div>
									</div>
									<br>
								    <button type="button" class="btn btn-dark">Leave Challenge</button>
								  </div>
								</div>
							</div>
						</center>
					</div>
				</div>
				
				<div class="col-lg-4">
					<div class="about">
						<div class="about_title">Thank You User.</div>
						<p class="about_text">Hello User, This page notifies you the score of you, After finishing the challenge. Thank You for participating with the Challenge.</p>
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
							
						</div>
					</div>
				</div>
			</div>

			<!-- Footer Content -->


			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span>
						Copyright &copy;<script>document.write(new Date().getFullYear());</script>  All rights reserved | Intern Colloboration | Team CISO <i  aria-hidden="true"></i> @ <a href="https://www.pearson.com/asia/" target="_blank">Pearson</a>
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>