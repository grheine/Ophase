<?php include('header.php'); ?>

<div class="container-contact">

    <div class="wrap-contact">
        <?php
        $title = "Anmeldung";
        include('banner.php');
        ?>

        <div class="success">
            <h2>Ups!</h2>
            <p>Wärend der Anmeldung ist ein Fehler aufgetreten. Bitte probiere es erneut!</p>
            <a href="<?= dirname($_SERVER['PHP_SELF'])?>/anmeldung">zurück zur Anmeldung</a>

        </div>


    </div>
</div>