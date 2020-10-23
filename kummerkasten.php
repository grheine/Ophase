<?php include('header.php'); ?>

  <div class="container-contact">
    <div class="fullwidth">
      <div class="language"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/kummerkasten">en</a></div>
    </div>
    <div class="wrap-contact">

      <?php 
      $title = "Kummerkasten";
      include('banner.php'); 
      ?>


      <div class="wide">
        <h2>Probleme, Fragen, Feedback, ...</h2>
        <p>Du hast organisatorische Fragen bezüglich der O-Phase und das <a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">FAQ</a> konnte dir nicht weiter helfen? Dann kannst du hier eine Nachricht an die Orga schicken.  </p>
        <a href="<?= dirname($_SERVER['PHP_SELF'])?>/kummerkasten_orga">
        <button style="margin: 30px auto;" class="contact-form-btn center">
         <span>
          Organisatorisches
           <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
         </span>
        </button>
       </a>
       <p>Wenn du Probleme anderer Art hast, die du gerne vertraulich mitteilen möchtest, stehen dir unsere Vertrauenspersonen zur Seite und kümmern sich, um dein Anliegen.</p>

       <a href="<?= dirname($_SERVER['PHP_SELF'])?>/kummerkasten_privat">
        <button style="margin: 30px auto;" class="contact-form-btn center">
         <span>
          Vertrauliches
           <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
         </span>
        </button>
       </a>

</div>
</div>

      
<?php include('footer.php'); ?>
