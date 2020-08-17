<?php

//require_once('config.php');
require_once "include/Database.php";

// Check if all required parameters are passed to the system
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["vname"], $_POST["nname"], $_POST["email"], $_POST["studiengang"], $_POST["bama"], $_POST["international"], $_POST["teilnahme"])) {

    $db = new Database();
    $pdo = $db->connect();

    // Redirect the user to the error page, if no database connection can be established
    if (is_null($pdo)){
        header("Location: ../error.php ");
        exit();
    }

    // define variables and set to empty values
    $vname = $nname = $email = $studiengang = $bachelor = $international = $teilnahme = $comment = $success = "";

    $vname = test_input($_POST["vname"]);
    $nname = test_input($_POST["nname"]);
    $email = test_input($_POST["email"]);
    $studiengang = test_input($_POST["studiengang"]);
    $bama = test_input($_POST["bama"]);
    $international = test_input($_POST["international"]);
    $teilnahme = test_input($_POST["teilnahme"]);
    $message = test_input($_POST["message"]);

    $query = $pdo->prepare("INSERT INTO anmeldung (Vname, Nname, Email, Studiengang, Bama, International, Teilnahme, Message) VALUES (:vname, :nname, :email, :studiengang, :bama, :international, :teilnahme, :message);");
    $query->bindParam(":vname", $vname);
    $query->bindParam(":nname", $nname);
    $query->bindParam(":email", $email);
    $query->bindParam(":studiengang", $studiengang);
    $query->bindParam(":bama", $bama);
    $query->bindParam(":international", $international);
    $query->bindParam(":teilnahme", $teilnahme);
    $query->bindParam(":message", $message);

    // Execute the insert query
    $query->execute();

    // Close the cursor, when the database insert is ready
    $query->closeCursor();

    //Redirect to the something went wrong page
    header("Location: ../success.php ");
    exit();


} else {
    //Redirect to the something went wrong page
    header("Location: ../error.php ");
    exit();
}

// Function only required when outputting data back on the page
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>