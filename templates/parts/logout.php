<?php
	session_start();
	session_destroy();
	if($_SESSION["loggedIn"] != ""){
		header('Location: ../../index.php');

	}
?>