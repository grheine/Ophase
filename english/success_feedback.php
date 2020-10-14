<?php include('header.php'); ?>

	<div class="container-contact">

		<div class="fullwidth">
      <div class="language"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/success_feedback">en</a></div>
    </div>
		<div class="wrap-contact">
			<?php 
      $title = "Leave Feedback";
      include('banner.php'); 
      ?>

		<div class="success">
			<h2>Thank you for your feedback!</h2>
			<p>We will contact you as soon as possible.</p>
			<a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">any questions? </a>

		</div>	
		

	</div>


<?php include('footer.php'); ?>
