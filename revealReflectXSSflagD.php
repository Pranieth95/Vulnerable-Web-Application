<?php
	session_start();
	ob_start();
	$username = strtolower(htmlspecialchars(htmlentities($_GET['username'])));
	$password = strtolower(htmlspecialchars(htmlentities($_GET['password'])));
	$ref = $_SERVER['HTTP_REFERER'];
	$headers = apache_request_headers(); 
	$real_client_ip = $headers["X-Forwarded-For"];
	$check_Constr = true;
	if(isset($_COOKIE['_reflexVUser'])){
		if(($username === null) || ($username === '') || ($password ===null) || ($password==='')){
			echo '
				<div class="alert alert-dismissible alert-danger">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
				</div>
			';
		}else{
			if(($username === 'root') && ($password ==='toor')){
				if((strpos($ref, 'http://localhost/CISOColabNewPHP/teachers.php') !== FALSE)){
					if(checkUserFormData($ref)){
						$_SESSION["usertoken_3"] = hash('sha256',base64_encode(date("Y-m-d h:i:sa") . " ReflectedXSS : ".$ref));
						$cookie_name = "_reflexVUserFDC";
						$cookie_value = $_SESSION["usertoken_3"];
						setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/");
						$check_Constr = false;
					}
				}					
			}
		}
	}
	if($check_Constr == true){
		$cookie_name_gen = "_reflexVUserError";
		$cookie_value = "Error: Please try again Later";
		setcookie($cookie_name_gen, $cookie_value, time() + (86400 * 2), "/");
	}
	header("location: teachers.php");


	function checkUserFormData($valueIn){
		$action = false;
		$usern = false;
		$passwd = false;
		$valueIn = urldecode($valueIn);
		if((strpos($valueIn, '<form') !== FALSE) && (strpos($valueIn, '<input') !== FALSE)){
			if((strpos($valueIn, 'action=revealReflectXSSflagD.php') !== FALSE) || (strpos($valueIn, 'action=\'revealReflectXSSflagD.php\'') !== FALSE) || (strpos($valueIn, 'action="revealReflectXSSflagD.php"') !== FALSE)){
				$action = true;
			}
			if((strpos($valueIn, 'name=username') !== FALSE) || (strpos($valueIn, 'name=\'username\'') !== FALSE) || (strpos($valueIn, 'name="username"') !== FALSE)){
				$usern = true;
			}
			if((strpos($valueIn, 'name=password') !== FALSE) || (strpos($valueIn, 'name=\'password\'') !== FALSE) || (strpos($valueIn, 'name="password"') !== FALSE)){
				$passwd = true;
			}
		    $checklegit = substr($valueIn,-22);
		    if(($checklegit === '&search_lec_sub=Submit') && ($action == true) && ($usern == true) &&  ($passwd == true)){
		        return true;
		    }else{
		        return false;
		    }
		}else{
			return false;
		}
	}

?>