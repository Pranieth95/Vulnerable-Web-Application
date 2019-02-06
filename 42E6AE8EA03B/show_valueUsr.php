<?php
	require_once('../connect.php');
	$playUserCookie = base64_decode($_GET['UsrReveal']);
	$userName = explode(":",$playUserCookie);
	if($_GET['UsrReveal'])
	echo '
		<div class="alert alert-dismissible alert-info">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it\'s not super important.
		</div>
	';
?>