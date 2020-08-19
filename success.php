<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>
<body>

<div class="container-contact">

    <div class="wrap-contact">
        <div class="contact-form-title" style="background-image: url(images/bg-01.jpg);">
            <ul class="topnav">
                <li><a href="<?= dirname($_SERVER['PHP_SELF']) ?>/index.php">Start</a></li>
                <li><a class="active" href="<?= dirname($_SERVER['PHP_SELF']) ?>/anmeldung.php">Anmeldung</a></li>
                <li><a href="<?= dirname($_SERVER['PHP_SELF']) ?>/faq.php">FAQ</a></li>
                <li class="right"><a href="https://fachschaft.physik.kit.edu/drupal/" target="_blank">Fachschaft
                        Physik</a></li>
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
            <a href="index.php">zurück</a>
        </div>

    </div>
    <?php include "footer.php"; ?>
</div>
</body>
</html>