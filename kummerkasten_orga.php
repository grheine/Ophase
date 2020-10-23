<?php include('header.php'); ?>

  <div class="container-contact">
    <div class="fullwidth">
      <div class="language"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/kummerkasten">en</a></div>
    </div>
    <div class="wrap-contact">

      <?php 
      $title = "Organisatorische Fragen";
      include('banner.php'); 
      ?>


      <form class="validate-form" action="<?= dirname($_SERVER['PHP_SELF'])?>/inc/send_feedback_orga.php" method="post">
        <div class="wide">
          <h2>Organisatorische Fragen und Feedback</h2>
          <p>Du hast organisatorische Fragen bezüglich der O-Phase und das <a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">FAQ</a> konnte dir nicht weiter helfen? Dann kannst du hier eine Nachricht an die Orga schicken. <br>
          Wenn du Probleme anderer Art hast, die du gerne vertraulich mitteilen möchtest, stehen dir unsere Vertrauenspersonen zur Seite und kümmern sich, um dein Anliegen. Klicke einfach <a href="<?= dirname($_SERVER['PHP_SELF'])?>/kummerkasten_privat">hier</a> und schilder dein Anliegen.
          </p>
        </div>

        

        <div class="contact-form ">

        <div class="wrap-input validate-input" data-validate="fehlt">
          <span class="label-input">Nachricht:</span>
          <textarea class="input" name="maintext" placeholder="Deine Nachricht an die Orga"></textarea>
          <span class="focus-input"></span>
        </div>  

        <div class="wrap-input validate-input" data-validate="fehlt">
          <span class="label-input">Name:</span>
          <input class="input" type="text" name="name"  placeholder="Namen eintragen" >
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input" data-validate="fehlt">
          <span class="label-input">E-Mail:</span>
          <input class="input" type="text" name="email" placeholder="E-Mail Adresse eintragen">
          <span class="focus-input"></span>
        </div>


        </div>
        <div class="wide-check">
          <div class="question-answer question input validate-input " data-validate = "fehlt" >
            <input type="radio" class="input" value="datenschutz" id="datenschutz" name="datenschutz"/>
            <label for="datenschutz" class="check"><span class="check">Hiermit stimme ich der Speicherung meiner Angaben zu (siehe <a href="https://fachschaft.physik.kit.edu/drupal/content/datenschutzerklärung">Datenschutz</a>).</span></label>
          </div>
          <span class="focus-input"></span>
        

        <div class="container-contact-form-btn">
          <button class="contact-form-btn">
            <span>
              Abschicken
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>
        </div>
        </form>


       
      
      
<?php include('footer.php'); ?>
