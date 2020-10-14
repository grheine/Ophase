<?php

// Define the default error message
$message = "Beim Absendenden Deines Feedbacks ist ein Fehler aufgetreten. Bitte probiere es erneut!";

// Parse the error code, if one was passed to the system
if (isset($_GET["error"]) && is_numeric($_GET["error"])) {

    $error = (int) $_GET["error"];

    switch ($error) {
        case 1:
            $message = "Der angegebene Text überschreitet das Limit von 4000 Zeichen.</br>Bitte halte dich kurz!";
            break;
        case 3:
            $message = "Deine Anmeldung war erfolgreich, aber es konnte keine Bestätigungsemail verschickt werden!";
            break;
    }

}

?>
<?php include('header.php'); ?>

<div class="container-contact">
    <div class="fullwidth">
      <div class="language"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/error_feedback">en</a></div>
    </div>
    <div class="wrap-contact">
        <?php
        $title = "Kummerkasten";
        include('banner.php');
        ?>

        <div class="success">
            <h2>Ups!</h2>
            <p><?php echo $message; ?></p>
            <a href="<?= dirname($_SERVER['PHP_SELF'])?>/kummerkasten">zurück zum Kummerkasten</a>

        </div>


    </div>


<?php include('footer.php'); ?>
