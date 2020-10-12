<?php

// Define the default error message
$message = "Wärend der Anmeldung ist ein Fehler aufgetreten. Bitte probiere es erneut!";

// Parse the error code, if one was passed to the system
if (isset($_GET["error"]) && is_numeric($_GET["error"])) {

    $error = (int) $_GET["error"];

    switch ($error) {
        case 1:
            $message_title = "Ups!";
            $message = "Der angegebene Text überschreitet das Limit von 4000 Zeichen.</br>Bitte halte dich kurz!";
            break;
        case 2:
            $message_title = "Ups!";
            $message = "Dein Alter kann nicht negativ sein!";
            break;
        case 3:
            $message_title = "Herzlichen Glückwunsch";
            $message = "Deine Anmeldung war erfolgreich! Da wird gerade serverseitige Probleme haben, können wir momentan leider keine automatisch generierte Bestätigungsmail versenden. Wann und wo genau du am Montag sein musst, teilen wir dir kurz vor Beginn der O-Phase per Mail mit.";
            break;
    }

}

?>
<?php include('header.php'); ?>

<div class="container-contact">
    <div class="fullwidth">
      <div class="language"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/error">en</a></div>
    </div>
    <div class="wrap-contact">
        <?php
        $title = "Anmeldung";
        include('banner.php');
        ?>

        <div class="success">
            <h2><?php echo $message_title; ?></h2>
            <p><?php echo $message; ?></p>
            <a href="<?= dirname($_SERVER['PHP_SELF'])?>/anmeldung">zurück zur Anmeldung</a>

        </div>


    </div>


<?php include('footer.php'); ?>