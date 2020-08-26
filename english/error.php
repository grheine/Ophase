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
            <h2>Oops!</h2>
            <p>Some error occurred while you tried to register. Please try again!</p>
            <a href="<?= dirname($_SERVER['PHP_SELF'])?>/anmeldung">back to registration</a>

        </div>


    </div>

<?php include('footer.php'); ?>