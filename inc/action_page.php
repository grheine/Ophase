<?php

require_once('config.php');

// define variables and set to empty values

$freitagabend = $altfreitagabend =  $problem = $altproblem = $produktiv = $gapyear = $altgapyear = $engagement = $altengagement =$warumphysik = $wuensche = $age = $vname = $nname =  $email = $phone = $studiengang = $bachelor = $international = $teilnahme  = $comment  = $success = "";

	$fr= $pr = $prod = $gap = $eng = "";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {


	$freitagabend = $_POST["freitagabend"];
	$altfreitagabend = mysqli_real_escape_string($conn, $_POST["altfreitagabend"]);
	foreach ((array) $freitagabend as $item) { $fr .= $item.","; } 
	$fr .= $altfreitagabend;
     
	$problem = $_POST["problem"];
	$altproblem = mysqli_real_escape_string($conn, $_POST["altproblem"]);
	foreach((array) $problem as $item) { $pr .= $item.","; } 
	$pr .= $altproblem;

	$produktiv = $_POST["produktiv"];
	foreach((array) $produktiv as $item)  { $prod .= $item.","; }

	$gapyear = $_POST["gapyear"];
	$altgapyear = mysqli_real_escape_string($conn, $_POST["altgapyear"]);
	foreach((array) $gapyear as $item)  { $gap .= $item.","; }
	$gap .= $altgapyear;	  

	$engagement = $_POST["engagement"];
	$altengagement = mysqli_real_escape_string($conn, $_POST["altengagement"]);
	$eng="";
	foreach((array) $engagement as $item)  { $eng .= $item.","; }
	$eng .= $altengagement;  
  

	$warumphysik = mysqli_real_escape_string($conn, $_POST["warumphysik"]);
	$wuensche = mysqli_real_escape_string($conn, $_POST["wuensche"]);

	$vname = mysqli_real_escape_string($conn, $_POST["vname"]);
	$nname = mysqli_real_escape_string($conn, $_POST["nname"]);
	$email = mysqli_real_escape_string($conn, $_POST["email"]);
	$phone = mysqli_real_escape_string($conn, $_POST["phone"]);
	$age = mysqli_real_escape_string($conn, $_POST["age"]);

	$studiengang = mysqli_real_escape_string($conn, $_POST["studiengang"]);
	$bama = mysqli_real_escape_string($conn, $_POST["bama"]);
	$international = mysqli_real_escape_string($conn, $_POST["international"]);
	$teilnahme = mysqli_real_escape_string($conn, $_POST["teilnahme"]);
	$message = mysqli_real_escape_string($conn, $_POST["message"]);

}

$sql = "INSERT INTO anmeldung (Freitagabend, Problem, Produktiv, Gapyear, Engagement, Warumphysik, Wuensche, Age,  Vname, Nname, Email, Telefon, Studiengang, Bama, International, Teilnahme, Message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
	echo "SQL error";
} else {

	mysqli_stmt_bind_param($stmt, "sssssssssssssssss",$fr, $pr, $prod, $gap, $eng, $warumphysik, $wuensche, $age, $vname, $nname, $email, $phone, $studiengang, $bama, $international, $teilnahme, $message);
	mysqli_stmt_execute($stmt);
}


















// connect to database

// $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// if ($mysqli->connect_errno) {
//     echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }

// /* Non-prepared statement */
// if (!$mysqli->query("DROP TABLE IF EXISTS test") || !$mysqli->query("CREATE TABLE test(id INT)")) {
//     echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
// }

//  Prepared statement, stage 1: prepare 
// if (!($stmt = $mysqli->prepare("INSERT INTO test(id) VALUES (?)"))) {
//     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
// }

// /* Prepared statement, stage 2: bind and execute */
// $id = 1;
// if (!$stmt->bind_param("i", $id)) {
//     echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
// }

// if (!$stmt->execute()) {
//     echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
// }



	// $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

	// if (!$link) {
	// 	die('Could not connect: ' . mysqli_error($link));
	// }

	// $db_selected = mysqli_select_db($link, 'ophase');

	// if(!$db_selected) {
	// 	die('Can\'t use ' . DB_NAME . ': ' . mysqli_error($link));
	// }

	// // fill database

	// $sql = "INSERT INTO anmeldung (Vname, Nname, Email, Studiengang, Bama, International, Teilnahme, Message) VALUES ('$vname', '$nname', '$email', '$studiengang', '$bama', '$international', '$teilnahme', '$message')";

	// if (!mysqli_query($link, $sql)) {
	// 	die('Error: ' . mysqli_error($link));
	// } else {
	// 	$success = "Anmeldung erfolgreich";
	// 	$vname = $nname = $email = '';
	// }


	// mysqli_close($link);






function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


header("Location: ../success.php");

?>








</body>
</html>
