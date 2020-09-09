<?php
	session_start();

	include "controller/controller_register.php";
	$obj = new controller_register();

	$obj->insert($_POST["name"],$_POST["age"],$_POST["password"]);

	$user = $obj->check_login($_POST["name"],$_POST["password"]);

?>

<head>


</head>
<body>
<?php
	print_r($user);

	if($_SESSION["loggedIn"] != 1) {

		echo "<a href='templates/parts/login.php'>Login</a><br>";
		echo "<a href='templates/parts/register.php'>Register</a><br>";
	} else {
		echo "<h1>Welcome ".$user["name"]."</h1><br>";

		echo "<a href='templates/parts/login.php'>Log Out</a><br>";

	}

?>
</body>

