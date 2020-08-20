<?php include('header.php'); ?>

  <div class="container-contact">
    <div class="wrap-contact">

      <?php 
      $title = "Anmeldung";
      include('banner.php'); 
      ?>


      <form class="validate-form" action="<?= dirname($_SERVER['PHP_SELF'])?>/inc/action_page.php" method="post">
        <div class="wide">
          <h2>Welcher O-Phasen-Typ bist du?</h2>
          <p class="fragebogen">Dieser Fragebogen dient dazu, dich etwas besser kennenzulernen, damit wir dich einer geeigneten <a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">O-Phasen-Gruppe</a> zuweisen können. Denn bestenfalls findest du bereits in der O-Phase Freunde und Lernpartner für das gesamte Studium. Und besonders jetzt unter Corona Bedingungen, wird es am Anfang sehr schwierig werden, Kommilitonen außerhalb der O-Phase kennenzulernen. Die Daten dienen ausschließlich zur Einteilung dieser Gruppen und werden selbstverständlich vertraulich behandelt und zeitnah gelöscht. Wenn dir die Fragen zu persönlich sind oder du aus anderen Gründen nicht auf die Fragen antworten möchtest, kannst du die Felder auch einfach leer lassen. <br> <br> Mehrfache Auwahl ist möglich.</p>
        </div>


        <div class="wide">

          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">Der perfekte Freitagabend für mich ist ... :</span>
          <label class="mycheckbox">mit Freunden im Park
            <input type="checkbox" name="freitagabend[]" value="park">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">die ganze Nacht zocken
            <input type="checkbox" name="freitagabend[]" value="zocken">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">ein Spieleabend
            <input type="checkbox" name="freitagabend[]" value="spieleabend">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">gemütlicher Abend zuhause
            <input type="checkbox" name="freitagabend[]" value="allein">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">Kino/ Theater/ Konzert besuchen
            <input type="checkbox" name="freitagabend[]" value="kultur">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> eine Kneipentour
            <input type="checkbox" name="freitagabend[]" value="kneipentour">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">in den Club gehen
            <input type="checkbox" name="freitagabend[]" value="club">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">eine geile Party
            <input type="checkbox" name="freitagabend[]" value="party">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"><input type="checkbox" name="freitagabend[]" value="anderes">
            <span class="checkmark"></span> <input class="input alttext" type="text" name="altfreitagabend"  placeholder="anderes" >
          </label>
          <span class="focus-input"></span>
          
          </div>

          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">Wie gehst du eine schwierige Aufgabe an?</span>
          <label class="mycheckbox"> das wird sich schon irgendwie ergeben
            <input type="checkbox" name="problem[]" value="irgendwie">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> ich gebe mir erst recht Mühe
            <input type="checkbox" name="problem[]" value="ehrgeizig">
            <span class="checkmark"></span>
          </label>
                    <label class="mycheckbox"> ich gehe systematisch vor
            <input type="checkbox" name="problem[]" value="systematisch">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> ich suche mir Hilfe
            <input type="checkbox" name="problem[]" value="hilfe">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> ich ignoriere das Problem
            <input type="checkbox" name="problem[]" value="ignorieren">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"><input type="checkbox" name="problem[]" value="anderes">
            <span class="checkmark"></span> <input class="input" type="text" name="altproblem"  placeholder="anderes" >
          </label>
          <span class="focus-input"></span>
          </div>

          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">Zu welcher Tageszeit bist du am produktivsten?</span>
          <label class="mycheckbox"> morgens
            <input type="checkbox" name="produktiv[]" value="morgens">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> mittags
            <input type="checkbox" name="produktiv[]" value="mittags">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> nachmittags
            <input type="checkbox" name="produktiv[]" value="nachmittags">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> abends/ nachts
            <input type="checkbox" name="produktiv[]" value="abends">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> kein Unterschied
            <input type="checkbox" name="produktiv[]" value="egal">
            <span class="checkmark"></span>
          </label>
          <span class="focus-input"></span>
          </div>

          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">Hattest du dieses Jahr Abitur oder hast du zwischen Schule und jetzt noch etwas anderes gemacht?</span>
          <label class="mycheckbox"> dieses Jahr Abi
            <input type="checkbox" name="gapyear[]" value="abidirekt">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> Auslandsaufenthalt
            <input type="checkbox" name="gapyear[]" value="ausland">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> Arbeiten/ Praktikum
            <input type="checkbox" name="gapyear[]" value="jobben">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> Ausbildung/ Studium
            <input type="checkbox" name="gapyear[]" value="ausbildung">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> FSJ
            <input type="checkbox" name="gapyear[]" value="fsj">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"><input type="checkbox" name="gapyear[]" value="anderes">
            <span class="checkmark"></span> <input class="input" type="text" name="altgapyear"  placeholder="anderes" >
          </label>
          <span class="focus-input"></span>
          </div>

          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">Bisheriges Engagement im Ehrenamt oder Organisationen und wenn ja wo?</span>
          <label class="mycheckbox"> nicht wirklich
            <input type="checkbox" name="engagement[]" value="keins">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> Schule
            <input type="checkbox" name="engagement[]" value="Schule">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> Verein
            <input type="checkbox" name="engagement[]" value="verein">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> sozial-politische Organisation
            <input type="checkbox" name="engagement[]" value="soziales">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> Gemeinde
            <input type="checkbox" name="engagement[]" value="gemeinde">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> Feuerwehr & Co
            <input type="checkbox" name="engagement[]" value="feuerwehr">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"><input type="checkbox" name="engagement[]" value="anderes">
            <span class="checkmark"></span> <input class="input" type="text" name="altengagement"  placeholder="anderes" >
          </label>
          <span class="focus-input"></span>
          </div>

           <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">Was ist deine Motivation Physik/ Meteorologie/ Geophysik/ Lehramt zu studieren?</span>
          <textarea class="input" name="warumphysik" placeholder="(bspw. die Welt verstehen/ verbessern, Herausforderung suchen...)"></textarea>
          <span class="focus-input"></span>
          </div>
          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">Was wünschst du dir von der O-Phase?</span>
          <textarea class="input" name="wuensche" placeholder="(bspw. Freunde finden, Informationen, Party...)"></textarea>
          <span class="focus-input"></span>
          </div>





        </div>

        <!-- <div class="wide mytable">
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
        </div> -->
        


        <div class="wide">
          <h2>Informationen</h2>
           <p> Diese Daten dienen zum einen ebenfalls dazu, dich einer geeigneten Gruppe zuzuweisen und zum anderen benötigen wir die Daten aufgrund der <a href="https://www.baden-wuerttemberg.de/de/service/aktuelle-infos-zu-corona/aktuelle-corona-verordnung-des-landes-baden-wuerttemberg/">Corona-Verordnung</a> (siehe §6). Die persönlichen Daten werden vertraulich behandelt und zeitnah gelöscht. </p>
        </div>
        
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

        <div class="wrap-input validate-input" data-validate = "fehlt">
          <span class="label-input">Alter (Jahre):</span>
          <input class="input" type="number" name="age" placeholder="Alter eintragen">
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
            <label for="offline" class="radio"><span>vor Ort & digital</span></label>
            <input type="radio" class="input" value="online" id="online" name="teilnahme" />
            <label for="online" class="radio"><span>nur digital</span></label>
            <input type="radio" class="input" value="unklar" id="unklar" name="teilnahme" />
            <label for="unklar" class="radio"><span>unklar</span></label>
          </div>
          <span class="focus-input"></span>
        </div>
        

        
        <div class="wrap-input" >
          <span class="label-input">Kommentar:</span>
          <textarea class="input" name="message" placeholder="(bspw. Wunschpartner, Beeinträchtigungen, sonstige Informationen...)" rows="2"></textarea>
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

