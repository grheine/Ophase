<div class="contact-form-title" style="background-image: url(images/bg-01.jpg);">        
  <div class="topnav"  id="myTopnav">
    <a class="<?php if ($title == "Welcome!") {echo(active);}; ?>" href="<?= dirname($_SERVER['PHP_SELF'])?>/index_en">O-Phase</a>
    <a class="<?php if ($title == "Registration") {echo(active);}; ?>" href="<?= dirname($_SERVER['PHP_SELF'])?>/anmeldung_en">Registration</a>
    <a class="<?php if ($title == "FAQ") {echo(active);}; ?>" href="<?= dirname($_SERVER['PHP_SELF'])?>/faq_en">FAQ</a>
    <a href="https://fachschaft.physik.kit.edu/drupal/content/kontakt" target="_blank">Contact</a>
    <a class="right" href="https://fachschaft.physik.kit.edu/drupal/" target="_blank">Fachschaft Physik</a>
    <a href="javascript:void(0);" class="icon" onclick="hamburgernav()"><i class="fa fa-bars"></i></a>
  </div>
  <span class="contact-form-title-1">
    <?= $title ;?> 
  </span>
  <span class="contact-form-title-2">
    O-Phase WS20/21
  </span>
</div>

