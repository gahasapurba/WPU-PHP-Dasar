<?php
	session_start();
	$_SESSION = [];
	session_unset();
	session_destroy();

	setcookie('id', '', time() - 999999999);
	setcookie('key', '', time() - 999999999);

	header("Location: login.php");
	exit;
?>