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
				<span class="label "><button id="contact_send_btn" name="form_logout" type="submit" class="button button2" value="Submit">Student Logout</button></span>
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
			<h1>e-Shop</h1>
		</div>
	</div>

	<!-- Popular -->

	<div >
		<div class="container">
		
			<?php 

$connect = mysqli_connect("localhost", "root", "", "ciit_db");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="shop.php"</script>';
			}
		}
	}
}

?>




<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	
			
			
	<body>


	<div class="newsletter">  
			

			<div class="row">
				<div class="col text-center">
					<div class="newsletter_form_container mx-auto">
					
						<form action="shop.php" method="post">
						<input type="text" name="search" class="newsletter_email"/>
						<button class="newsletter_submit_btn trans_300" name="btn_search">search</button>
						</form>
					</div>
				</div>
			</div>

		</div>
		<table class="table table-bordered">
					<tr>
						<th width="30%">Name of the Book</th>
						<th width="10%">Author</th>
						
					</tr>

		<?php
			if(isset($_POST['btn_search'])){
				$conn=mysqli_connect("localhost","root","","ciit_db");
				$get=$_POST['search'];
				if($get){
					$show="select name,author from tbl_product where id='$get'";
					$result=mysqli_query($conn,$show);
					if (!$result) {
						printf("Error: %s\n", mysqli_error($conn));
						exit();
					}
					while($rows=mysqli_fetch_array($result)){
						
					    echo "<tr> <td>".$rows ['name']."</td>"; 
						echo  "<td>".$rows ['author']."</td> </tr>"; 
						echo "<br/></table>";




						
					}
				}
			}
		?>


		<br />
		<div class="container">
			<br />
			<br />
			<br />
			
			<br /><br />
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			
			<div class="col-md-4">
				<form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Ebook Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="shop.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>

<?php

?>













			
		</div>		
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<center>
				<div class="card border-danger mb-3" style="max-width: 30rem;">
				  <div class="card-header" style="background:#ffb606;color:white;border-bottom:1px solid #ffb606"><b>Task to Get the Flag</b></div>
				  <div class="card-body" style="background:#1a1a1a;color:white;border-bottom:1px solid #ffb606">
				    <label for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm">As you have found the vulnerability as Sensitive Data Exposure. using the aforementioned vulnerability: 
				    </label>
				    <label class="text-danger">Expose the NIC of Janith Upendra".</label>  
				  </div>
				</div>
			</center>
			<br>
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
											<label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm">NIC Value of the User:</label>
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
						if($vulN == '941954673v'){
							$_SESSION['usertoken_7'] = hash('sha256',base64_encode(date("Y-m-d h:i:sa") . " Sensitive Data Exposure : ".$vulN));
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
										margin-right: auto;
										background-color:#17a2b8;";

							>'.$_SESSION["usertoken_7"].
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
											echo "<br>" . $submitval . " <br> token: <br>" .  $_SESSION["usertoken_7"];
											if($submitval == trim(urlencode($_SESSION["usertoken_7"]))){
												$userCookie = base64_decode($_COOKIE['_usrPlayName']);
												$userCookie = explode("-",$userCookie);
												$user = $userCookie[0];
												$sqlUpdate = "UPDATE `challengerDetails` SET ch7='Yes' WHERE userName="."'$user'";
												//echo $sqlUpdate."";
												require("connect.php");
												if (mysqli_query($conn, $sqlUpdate)) {
													$conn->close();
													header("location: xxeattk.php");
												}else{
													echo "didn't workout";
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
										header("location: xxeattk.php");
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
<script src="js/min.js/down7.min.js"></script>
<script src="js/min.hts.js/down7.min.hts.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>