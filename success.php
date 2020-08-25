<?php include('header.php'); ?>

	<div class="container-contact">

		<div class="language"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/success">en</a></div>
		<div class="wrap-contact">
			<?php 
      $title = "Anmeldung";
      include('banner.php'); 
      ?>

		<div class="success">
			<h2>Herzlichen Glückwunsch!</h2>
			<p>Du hast dich erfolgreich zur O-Phase angemeldet!</p>
			<a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">noch Fragen? </a>

		</div>	
		

	</div>


<?php include('footer.php'); ?>