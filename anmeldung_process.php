<!-- Von anmeldung.php kopiert -->

<!-- <?php include('anmeldung_process.php'); ?>
<link rel="stylesheet" type="text/css" href="anmeldung.css">

<div class="container">  
  <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email"  value="<?= $email ?>"tabindex="2">
      <span class="error"><?=$email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success; ?></div>
  </form>
</div> -->



<?php

require_once('config.php');

// define variables and set to empty values
$name_error = $email_error = $phone_error =  "";
$name = $email = $phone = $message  = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
	echo "alert";
	$name_error = "Name fehlt";
} else {
	$name = test_input($_POST["name"]);
	// check if name only contains letters and whitespace
		if (!preg_match('/[a-z\s]/i',$name)) {
			$name_error = "nur Buchstaben";
		}
}

if (empty($_POST["email"])) {
	$email_error = "E-Mail fehlt";
} else {
	$email = test_input($_POST["email"]);
	// check if email is well-formed
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$email_error = "falsches E-Mail Format";
	}
}

if (empty($_POST["phone"])) {
	$phone_error = "Telefonnummer fehlt";
} else {
	$phone = test_input($_POST["phone"]);
	// check if phone number is well-formed
	if (!preg_match("/^[a-zA-Z ]*$/", $phone)) {
		$name_error = "falsches Format";
	}
}

if (empty($_POST["message"])) {
	$message = "";
} else {
	$message = test_input($_POST["message"]);
}


// connect to database

if ($name_error == '' and $email_error == '' and $phone_error == '') {


	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

	if (!$link) {
		die('Could not connect: ' . mysqli_error($link));
	}

	$db_selected = mysqli_select_db($link, 'ophase');

	if(!$db_selected) {
		die('Can\'t use ' . DB_NAME . ': ' . mysqli_error($link));
	}

	$sql = "INSERT INTO anmeldung (Vname, Nname, Code) VALUES ('$name', '$email', '$phone')";

	if (!mysqli_query($link, $sql)) {
		die('Error: ' . mysqli_error($link));
	} else {
		$success = "Anmeldung erfolgreich";
		$name = $email = $phone = $message = '';
	}


	mysqli_close($link);


		$message_body = '';
		unset($_POST['submit']);
		foreach ($_POST as $key => $value) {
			$message_body .= "$key: $value\n";
		}

		

}

}


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>