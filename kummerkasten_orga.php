<?php include('header.php'); ?>

  <div class="container-contact">
    <div class="fullwidth">
      <div class="language"><a href="<?= dirname($_SERVER['PHP_SELF'])?>/../kummerkasten_orga">de</a><p>|</p><a href="">en</a></div>
    </div>
    <div class="wrap-contact">

      <?php 
      $title = "Organisatorische Fragen";
      include('banner.php'); 
      ?>


      <form class="validate-form" action="<?= dirname($_SERVER['PHP_SELF'])?>/inc/send_feedback_orga.php" method="post">
        <div class="wide">

          <h2> Organisatorische Fragen und Feedback  </h2>
           <p> Du hast organisatorische Fragen oder Probleme und das <a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">FAQ</a> konnte dir nicht helfen? Dann kannst du hier eine Nachricht an das Orga Team senden <br>
           Wenn du persönliche Probleme bezüglich der O-Phase hast oder dich aus irgendeinem Grund unwohl fühlst, kannst du unsere Vertrauenspersonen <a href="<?= dirname($_SERVER['PHP_SELF'])?>/kummerkasten_privat">hier</a> erreichen und dein Problem schildern. 
          </p>
        </div>

        

        <div class="contact-form ">

        <div class="wrap-input validate-input" data-validate="fehlt">
          <span class="label-input">Nachricht:</span>
          <textarea class="input" name="maintext" placeholder="Deine Nachricht "></textarea>
          <span class="focus-input"></span>
        </div>  

        <div class="wrap-input validate-input" data-validate="fehlt">
          <span class="label-input">Name:</span>
          <input class="input" type="text" name="name"  placeholder="Bitte Name eintragen" >
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input" data-validate="fehlt">
          <span class="label-input">E-Mail:</span>
          <input class="input" type="text" name="email" placeholder="Bitte Mailadresse eintragen">
          <span class="focus-input"></span>
        </div>


        </div>
        <div class="wide-check">
          <div class="question-answer question input validate-input " data-validate = "fehlt" >
            <input type="radio" class="input" value="datenschutz" id="datenschutz" name="datenschutz"/>
            <label for="datenschutz" class="check"><span class="check"> Hiermit bestätige ich die Speicherung meiner Daten (siehe auch  <a href="https://fachschaft.physik.kit.edu/drupal/content/datenschutzerklärung">Datenschutzerklärung</a>)</span></label>
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
