<?php include('header.php'); ?>

	<div class="container-contact">
	<div class="fullwidth">
		<div class="language"><a href="<?= dirname($_SERVER['PHP_SELF'])?>/../success">de</a><p>|</p><a href="">en</a></div>
	</div>
		<div class="wrap-contact">
			<?php 
      $title = "Registration";
      include('banner.php'); 
      ?>

		<div class="success">
			<h2>Congratulations!</h2>
			<p>You succesfully assigned for the O-Phase! <br>When and where exactly you have to be on Monday, we will tell you via email shortly before the start of the O-Phase.</p>
			<a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">further questions? </a>

		</div>	
		

	</div>


<?php include('footer.php'); ?>