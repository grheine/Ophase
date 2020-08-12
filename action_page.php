<?php

require_once('config.php');

// define variables and set to empty values
$vname = $nname =  $email = $studiengang = $bachelor = $international = $teilnahme  = $comment  = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$vname = test_input($_POST["vname"]);
	$nname = test_input($_POST["nname"]);
	$email = test_input($_POST["email"]);
	$studiengang = test_input($_POST["studiengang"]);
	$bama = test_input($_POST["bama"]);
	$international = test_input($_POST["international"]);
	$teilnahme = test_input($_POST["teilnahme"]);
	$message = test_input($_POST["message"]);

}


// connect to database

	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

	if (!$link) {
		die('Could not connect: ' . mysqli_error($link));
	}

	$db_selected = mysqli_select_db($link, 'ophase');

	if(!$db_selected) {
		die('Can\'t use ' . DB_NAME . ': ' . mysqli_error($link));
	}

	$sql = "INSERT INTO anmeldung (Vname, Nname, Email, Studiengang, Bama, International, Teilnahme, Message) VALUES ('$vname', '$nname', '$email', '$studiengang', '$bama', '$international', '$teilnahme', '$message')";

	if (!mysqli_query($link, $sql)) {
		die('Error: ' . mysqli_error($link));
	} else {
		$success = "Anmeldung erfolgreich";
		$vname = $nname = $email = '';
	}


	mysqli_close($link);






function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anmeldung - O-Phase WS20/21</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="container-contact">

		<div class="wrap-contact">
			<div class="contact-form-title" style="background-image: url(images/bg-01.jpg);">
				<ul class="topnav">
		  <li><a href="<?= dirname($_SERVER['PHP_SELF'])?>/">Start</a></li>
		  <li><a class="active"  href="<?= dirname($_SERVER['PHP_SELF'])?>/anmeldung">Anmeldung</a></li>
		  <li><a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">FAQ</a></li>
		  <li class="right"><a href="https://fachschaft.physik.kit.edu/drupal/" target="_blank">Fachschaft Physik</a></li>
			</ul>
				<span class="contact-form-title-1">
					Anmeldung 
				</span>
				<span class="contact-form-title-2">
					O-Phase WS20/21
				</span>
			</div>

		<div class="success">
			<h2>Herzlichen Glückwunsch!</h2>
			<p>Du hast dich erfolgreich zur O-Phase angemeldet!</p>
			<a href="/">zurück</a>
		</div>	
		

	</div>
</div>








</body>
</html>
