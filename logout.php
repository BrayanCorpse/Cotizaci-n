<?php 
	session_set_cookie_params(0); 
	session_start();
	session_unset();
	session_destroy();
	require_once 'App/app.config.php';
	
	header("Location:".url_link."login.php");
	?>