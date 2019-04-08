<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	function getCookie($valueIn){
		foreach($_COOKIE as  $key => $val)
	    {
	      if($key == $valueIn){
	      	return $val;
	      }
	    }
	}	

	unset($_COOKIE["_usrLogged"]);
	setcookie("_usrLogged", $_SESSION["user_cookie"], time() - (86400 * 2), "/", "",false,true);
	setcookie("_usrAgr", getCookie('_usrAgr'), time() - (86400 * 2), "/", "",false,true);
	setcookie("_usrPlayName",getCookie('_usrPlayName'), time() - (86400 * 2), "/", "",false,true);
	setcookie("_reflexVUser", getCookie('_reflexVUser'), time() - (86400 * 2), "/", "",false,true);
	setcookie("_brokenAccessDC", getCookie('_brokenAccessDC'), time() - (86400 * 2), "/", "",false,true);
	setcookie("_gat", getCookie('_gat'), time() - (86400 * 2), "/", "",false,true);
	setcookie("_ga", getCookie('_ga'), time() - (86400 * 2), "/", "",false,true);
	setcookie("_gid", getCookie('_gid'), time() - (86400 * 2), "/", "",false,true);
	session_unset();
	session_destroy();
	header('Location: ../../index.php');
	exit();		
?>
</body>
</html>


