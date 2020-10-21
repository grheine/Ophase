<?php include('header.php'); ?>

	<div class="container-contact">

		<div class="fullwidth">
      <div class="language"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/success_feedback">en</a></div>
    </div>
		<div class="wrap-contact">
			<?php 
      $title = "Kummerkasten";
      include('banner.php'); 
      ?>

		<div class="success">
			<h2>Vielen Dank für Dein Feedback!</h2>
			<p>Wir melden uns bei Dir so bald wie möglich.</p>
			<a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">noch Fragen? </a>

		</div>	
		

	</div>


<?php include('footer.php'); ?>
