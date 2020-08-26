<?php include('header.php'); ?>

	<div class="container-contact">

		<div class="fullwidth">
		<div class="language"><a href="<?= dirname($_SERVER['PHP_SELF'])?>/../">de</a><p>|</p><a href="">en</a></div>
	</div>
		<div class="wrap-contact">
			<?php 
    $title = "Welcome!";
    include('banner.php'); 
    ?>

		<div class="wide">
			<p>
				Hello! <br> <br>
				You want to start studying physics, geophysics, meteorology or teaching physics in Karlsruhe in the 2020/2021 winter semester? Then you are exactly right here! If not, you can find your O-phase under 
				<a target="_blank" href="https://www.asta-kit.de/o-phase"> www.asta-kit.de/o-phase. </a> <br><br>
				Regardless of this, you probably have a lot of questions: What lectures do I have to take? What is my schedule like? Which textbooks are recommended? How do I find the lecture halls, cafeteria, library, ...? Where are the best pubs in Karlsruhe? What else can you do at the university besides studying? <br>
				In order to make it easier for you to start your studies and to answer these questions, we organize an orientation phase for new students every winter semester. We would like to cordially invite you to the next O phase in the winter semester 2020/2021. It starts on Monday, October 26th, 2020 and ends on Friday, October 30th, 2020. <br><br>
				That begs the next question: Who are we actually? We are students ourselves who stand up for the interests of the students at the faculty. We also provide advice and information, such as this O-Phase, but also exam collections, examination protocols and much more. You can find out more about our work on our <a target="_blank" href="https://fachschaft.physik.kit.edu/drupal/"> website </a> or ... right: during the O-Phase . <br> <br>
				See you! <br>
				Your Greta and Alex <br> <br>
			</p>
			<a href="<?= dirname($_SERVER['PHP_SELF'])?>/anmeldung">
				<button class="contact-form-btn center">
     <span>
       Register
       <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
     </span>
   	</button>
   </a>

		</div>	
	</div>
	
<?php include('footer.php'); ?>
