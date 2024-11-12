<?php 
	require_once('config.php');
	unset($_SESSION['login']);
	header('Location: index.php');
?>