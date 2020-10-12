<?php

// Define the default error message
$message = "Some error occurred while you tried to register. Please try again!";

// Parse the error code, if one was passed to the system
if (isset($_GET["error"]) && is_numeric($_GET["error"])) {

    $error = (int) $_GET["error"];

    switch ($error) {
        case 1:
            $message_title = "Oops!";
            $message = "Your provided text is exceeding the limit of 4000 characters.</br>Please keep it short!";
            break;
        case 2:
            $message_title = "Oops!";
            $message = "Your age can't be negative!";
            break;
        case 3:
            $message_title = "Congratulations!";
            $message = "You successfully signed up for the O-Phase! We are currently not able to send you an automatic confirmation mail because of server problems. When and where exactly you have to be on Monday, we will tell you via email shortly before the start of the O-Phase.  ";
            break;
    }

}

?>

<?php include('header.php'); ?>

<div class="container-contact">

    <div class="fullwidth">
        <div class="language"><a href="<?= dirname($_SERVER['PHP_SELF'])?>/../error">de</a><p>|</p><a href="">en</a></div>
    </div>
    <div class="wrap-contact">
        <?php
        $title = "Anmeldung";
        include('banner.php');
        ?>

        <div class="success">
            <h2><?php echo $message_title; ?></h2>
            <p><?php echo $message;?></p>
            <a href="<?= dirname($_SERVER['PHP_SELF'])?>/anmeldung">back to registration</a>

        </div>


    </div>

<?php include('footer.php'); ?>