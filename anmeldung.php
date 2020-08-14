<?php include('header.php'); ?>

  <div class="container-contact">
    <div class="wrap-contact">

      <?php 
      $title = "Anmeldung";
      include('banner.php'); 
      ?>


      <form class="validate-form" action="<?= dirname($_SERVER['PHP_SELF'])?>/action_page.php" method="post">
        <div class="wide">
          <h2>Welcher O-Phasen-Typ bist du?</h2>
          <p class="fragebogen">Dieser Fragebogen dient dazu, dich etwas besser kennenzulernen, damit wir dich einer geeeigneten Gruppe zuweisen können. Wenn dir die Fragen zu persönlich sind oder du aus anderen Gründen nicht auf die Fragen antworten möchtest, kannst du die Felder auch einfach leer lassen.</p>
        </div>

        <div class="wide mytable">
        <table class="form-table">
          <tbody>
            <tr>
              <th> &nbsp;</th>
              <th><label for="party_1"> 1 </label></th>
              <th><label for="party_1"> 2 </label></th>
              <th><label for="party_1"> 3 </label></th>
              <th><label for="party_1"> 4 </label></th>
              <th><label for="party_1"> 5 </label></th>
              <th>&nbsp;</th>
            </tr>
            <tr>
              <td class="table-label right">Ruhiges Wesen</td>
              <td><input type="radio" name="party" value="1" id="party_1"></td>
              <td><input type="radio" name="party" value="2" id="party_2"></td>
              <td><input type="radio" name="party" value="3" id="party_3"></td>
              <td><input type="radio" name="party" value="4" id="party_4"></td>
              <td><input type="radio" name="party" value="5" id="party_5"></td>
              <td class="table-label left">Partytier</td>
            </tr>
            <tr>
              <td class="table-label right">Früher Vogel</td>
              <td><input type="radio" name="nachteule" value="1" id="nachteule_1"></td>
              <td><input type="radio" name="nachteule" value="2" id="nachteule_2"></td>
              <td><input type="radio" name="nachteule" value="3" id="nachteule_3"></td>
              <td><input type="radio" name="nachteule" value="4" id="nachteule_4"></td>
              <td><input type="radio" name="nachteule" value="5" id="nachteule_5"></td>
              <td class="table-label left">Nachteule</td>
            </tr>
            <tr>
              <td class="table-label right">Gemächlich</td>
              <td><input type="radio" name="streber" value="1" id="streber_1"></td>
              <td><input type="radio" name="streber" value="2" id="streber_2"></td>
              <td><input type="radio" name="streber" value="3" id="streber_3"></td>
              <td><input type="radio" name="streber" value="4" id="streber_4"></td>
              <td><input type="radio" name="streber" value="5" id="streber_5"></td>
              <td class="table-label left">Ehrgeizig</td>
            </tr>
            <tr>
              <td class="table-label right">Scheu</td>
              <td><input type="radio" name="gesellig" value="1" id="gesellig_1"></td>
              <td><input type="radio" name="gesellig" value="2" id="gesellig_2"></td>
              <td><input type="radio" name="gesellig" value="3" id="gesellig_3"></td>
              <td><input type="radio" name="gesellig" value="4" id="gesellig_4"></td>
              <td><input type="radio" name="gesellig" value="5" id="gesellig_5"></td>
              <td class="table-label left">Gesellig</td>
            </tr>
            <tr>
              <td class="table-label right">Noob</td>
              <td><input type="radio" name="gamer" value="1" id="gamer_1"></td>
              <td><input type="radio" name="gamer" value="2" id="gamer_2"></td>
              <td><input type="radio" name="gamer" value="3" id="gamer_3"></td>
              <td><input type="radio" name="gamer" value="4" id="gamer_4"></td>
              <td><input type="radio" name="gamer" value="5" id="gamer_5"></td>
              <td class="table-label left">Profi-Gamer</td>
            </tr>
            <tr>
              <td class="table-label right">Angela Merkel</td>
              <td><input type="radio" name="memelord" value="1" id="memelord_1"></td>
              <td><input type="radio" name="memelord" value="2" id="memelord_2"></td>
              <td><input type="radio" name="memelord" value="3" id="memelord_3"></td>
              <td><input type="radio" name="memelord" value="4" id="memelord_4"></td>
              <td><input type="radio" name="memelord" value="5" id="memelord_5"></td>
              <td class="table-label left">Memelord</td>
            </tr>
          </tbody>
        </table>
        </div>


        <div class="wide"><h2>Informationen</h2></div>
        
        <div class="contact-form ">
        <div class="wrap-input validate-input" data-validate="fehlt">
          <span class="label-input">Vorname:</span>
          <input class="input" type="text" name="vname"  placeholder="Vornamen eintragen" >
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input" data-validate="fehlt">
          <span class="label-input">Nachname:</span>
          <input class="input" type="text" name="nname"  placeholder="Nachnamen eintragen" >
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input" data-validate = "falsches Format">
          <span class="label-input">E-Mail:</span>
          <input class="input" type="text" name="email" placeholder="E-Mail Adresse eintragen">
          <span class="focus-input"></span>
        </div>
    

        <div class="wrap-input" >
          <span class="label-input">Studiengang:</span>
          <div class="question-answer question input validate-input " data-validate = "fehlt" >
            <input type="radio" class="input" value="physik" id="physik" name="studiengang"/>
            <label for="physik" class="radio"><span>Physik</span></label>
            <input type="radio" class="input" value="geo" id="geo" name="studiengang" />
            <label for="geo" class="radio"><span>Geo</span></label>
            <input type="radio" class="input" value="meteo" id="meteo" name="studiengang" />
            <label for="meteo" class="radio"><span>Meteo</span></label>
            <input type="radio" class="input" value="lehramt" id="lehramt" name="studiengang" />
            <label for="lehramt" class="radio"><span>Lehramt</span></label>
            
          </div>
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input" >
          <span class="label-input">BSc/MSc:</span>
          <div class="question-answer question input validate-input " data-validate = "fehlt" >
            <input type="radio" class="input" value="bachelor" id="bachelor" name="bama"/>
            <label for="bachelor" class="radio"><span>Bachelor</span></label>
            <input type="radio" class="input" value="master" id="master" name="bama" />
            <label for="master" class="radio"><span>Master</span></label>
           </div>
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input" >
          <span class="label-input">International Student:</span>
          <div class="question-answer question input validate-input " data-validate = "fehlt" >
            <input type="radio" class="input" value="international" id="international" name="international"/>
            <label for="international" class="radio"><span>ja</span></label>
            <input type="radio" class="input" value="national" id="national" name="international" />
            <label for="national" class="radio"><span>nein</span></label>
          </div>
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input" >
          <span class="label-input">Ich nehme teil:</span>
          <div class="question-answer question input validate-input " data-validate = "fehlt" >
            <input type="radio" class="input" value="offline" id="offline" name="teilnahme"/>
            <label for="offline" class="radio"><span>präsent</span></label>
            <input type="radio" class="input" value="online" id="online" name="teilnahme" />
            <label for="online" class="radio"><span>nur digital</span></label>
            <input type="radio" class="input" value="unklar" id="unklar" name="teilnahme" />
            <label for="unklar" class="radio"><span>unklar</span></label>
          </div>
          <span class="focus-input"></span>
        </div>

        
        <div class="wrap-input" >
          <span class="label-input">Kommentar:</span>
          <textarea class="input" name="message" placeholder="(bspw. Wunschpartner, weitere Informationen,...)"></textarea>
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
              Anmelden
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>
        </div>

        </div>
      </form>
      
<?php include('footer.php'); ?>

