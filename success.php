<?php include('header.php'); ?>

	<div class="container-contact">

		<div class="fullwidth">
      <div class="language"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/success">en</a></div>
    </div>
		<div class="wrap-contact">
			<?php 
      $title = "Anmeldung";
      include('banner.php'); 
      ?>

		<div class="success">
			<h2>Herzlichen Glückwunsch!</h2>
			<p>Du hast dich erfolgreich zur O-Phase angemeldet! <br>	Wann und wo genau du am Montag sein musst, teilen wir dir kurz vor Beginn der O-Phase per Mail mit.</p>
			<a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">noch Fragen? </a>

		</div>	
		

	</div>


<?php include('footer.php'); ?>