<?php

require_once("Database.php");

// Check if the required parameters are passed
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["vname"], $_POST["nname"], $_POST["email"], $_POST["age"], $_POST["studiengang"], $_POST["bama"], $_POST["international"], $_POST["teilnahme"])) {

    $db = new Database();
    $pdo = $db->connect();

    if (is_null($pdo)) {
        // Quit the script, if no database connection could be established
        header("Location: ../error.php");
        exit();
    }

    // Define variables and set to empty values
    $freitagabend = $altfreitagabend =  $problem = $altproblem = $produktiv = $gapyear = $altgapyear = $engagement = "";
    $altengagement = $warumphysik = $wuensche = $age = $vname = $nname = $email = $studiengang = $bachelor = "";
    $international = $teilnahme = $comment = $success = "";

    $fr= $pr = $prod = $gap = $eng = "";

    // Read the values and process them
    $freitagabend = $_POST["freitagabend"];
    $altfreitagabend = $_POST["altfreitagabend"];
    foreach ((array) $freitagabend as $item) { $fr .= $item.","; }
    $fr .= $altfreitagabend;

    $problem = $_POST["problem"];
    $altproblem = $_POST["altproblem"];
    foreach((array) $problem as $item) { $pr .= $item.","; }
    $pr .= $altproblem;

    $produktiv = $_POST["produktiv"];
    foreach((array) $produktiv as $item)  { $prod .= $item.","; }

    $gapyear = $_POST["gapyear"];
    $altgapyear = $_POST["altgapyear"];
    foreach((array) $gapyear as $item)  { $gap .= $item.","; }
    $gap .= $altgapyear;

    $engagement = $_POST["engagement"];
    $altengagement = $_POST["altengagement"];
    foreach((array) $engagement as $item)  { $eng .= $item.","; }
    $eng .= $altengagement;

    $warumphysik = $_POST["warumphysik"];
    $wuensche = $_POST["wuensche"];
    $vname = $_POST["vname"];
    $nname = $_POST["nname"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $studiengang = $_POST["studiengang"];
    $bama = $_POST["bama"];
    $international = $_POST["international"];
    $teilnahme = $_POST["teilnahme"];

    if (isset($_POST["message"])) {
        $message = $_POST["message"];
    } else {
        $message = "";
    }

    // Create query and bind the parameters
    $query = $pdo->prepare("INSERT INTO anmeldung (Freitagabend, Problem, Produktiv, Gapyear, Engagement, Warumphysik, Wuensche, Age, Vname, Nname, Email, Studiengang, Bama, International, Teilnahme, Message) VALUES (:abend, :problem, :produktiv, :gapyear, :engagement, :warumphysik, :wuensche, :age, :vname, :nname, :email, :studiengang, :bama, :international, :teilnahme, :message);");
    $query->bindParam(":abend", $fr);
    $query->bindParam(":problem", $pr);
    $query->bindParam(":produktiv", $prod);
    $query->bindParam(":gapyear", $gap);
    $query->bindParam(":engagement", $eng);
    $query->bindParam(":warumphysik", $warumphysik);
    $query->bindParam(":wuensche", $wuensche);
    $query->bindParam(":age", $age);
    $query->bindParam(":vname", $vname);
    $query->bindParam(":nname", $nname);
    $query->bindParam(":email", $email);
    $query->bindParam(":studiengang", $studiengang);
    $query->bindParam(":bama", $bama);
    $query->bindParam(":international", $international);
    $query->bindParam(":teilnahme", $teilnahme);
    $query->bindParam(":message", $message);

    // Execute the query
    $query->execute();

    // Close the query
    $query->closeCursor();

    // If the query was executed successfully, then refer to the next page and quit the script with exit()
    header("Location: ../success.php");
    exit();

} else {
    // If the required parameters are missing, the redirect the user to the error page
    header("Location: ../error.php");
    exit();
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>