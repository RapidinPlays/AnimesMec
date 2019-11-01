<?php
	error_reporting(0);
	session_start();
	$user_id = $_SESSION['user_id'];
	session_destroy();
	header('Location: ./index.php?t=logout');
?>