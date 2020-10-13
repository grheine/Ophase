<?php include('header.php'); ?>

  <div class="container-contact">
    <div class="fullwidth">
      <div class="language"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/anmeldung">en</a></div>
    </div>
    <div class="wrap-contact">

      <?php 
      $title = "Anmeldung";
      include('banner.php'); 
      ?>


      <form class="validate-form" action="<?= dirname($_SERVER['PHP_SELF'])?>/inc/send_feedback.php" method="post">
        <div class="wide">
          <h2>Hast Du Probleme oder sonstiges Feedback für die O-Phase?</h2>
          <p class="fragebogen">Miau!</p>
        </div>


        <div class="wide">
          <div class="wrap-input validate-input" data-validate="fehlt">
          <div style="width: 100%;"><p class="right">* Pflichtfelder</p></div>
          <span class="checkbox-title">Freitext*</span>
          <textarea class="input" name="maintext" placeholder="Was liegt Dir auf dem Herzen?"></textarea>
          <span class="focus-input"></span>
          </div>
        </div>

        <div class="wide">
          <h2>Informationen</h2>
           <p>Wenn wir uns bei Dir zurückmelden sollen, benötigen wir entweder eine E-Mail-Addresse oder eine Handynummer von Dir, Du musst aber auch keine Daten angeben. Natürlich behandeln wir Deine Daten anonym und diskret</p>
        </div>
        

        <div class="contact-form ">

        <div style="width: 100%;"><p class="right">* Pflichtfelder</p></div>

        <div class="wrap-input">
          <span class="label-input">Name:</span>
          <input class="input" type="text" name="name"  placeholder="Namen eintragen" >
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input">
          <span class="label-input">E-Mail:</span>
          <input class="input" type="text" name="email" placeholder="E-Mail Adresse eintragen">
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input">
          <span class="label-input">Handynummer:</span>
          <input class="input" type="phone" name="phone" placeholder="Telefonnummer eintragen">
          <span class="focus-input"></span>
        </div>
        

        </div>
        <div class="wide-check">
          <div class="question-answer question input validate-input " data-validate = "fehlt" >
            <input type="radio" class="input" value="datenschutz" id="datenschutz" name="datenschutz"/>
            <label for="datenschutz" class="check"><span class="check">Hiermit bestätige ich die Richtigkeit meiner Angaben und stimme der Speicherung dieser zu (Siehe <a href="https://fachschaft.physik.kit.edu/drupal/content/datenschutzerklärung">Datenschutz</a>)</span></label>
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

        </div>
      </form>
      
<?php include('footer.php'); ?>

