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


      <form class="validate-form" action="<?= dirname($_SERVER['PHP_SELF'])?>/inc/action_page.php" method="post">
        <div class="wide">
          <h2>Welcher O-Phasen-Typ bist du?</h2>
          <p class="fragebogen">Dieser Fragebogen dient dazu, dich etwas besser kennenzulernen, damit wir dich einer geeigneten <a target="_blank" href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">O-Phasen-Gruppe</a> zuweisen können. Denn bestenfalls findest du bereits in der O-Phase Freunde und Lernpartner für das gesamte Studium. Und besonders jetzt unter Corona Bedingungen, wird es am Anfang sehr schwierig werden, Kommilitonen außerhalb der O-Phase kennenzulernen. Die Daten dienen ausschließlich zur Einteilung dieser Gruppen und werden selbstverständlich vertraulich behandelt und zeitnah gelöscht. Wenn dir die Fragen zu persönlich sind oder du aus anderen Gründen nicht auf die Fragen antworten möchtest, kannst du die Felder auch einfach leer lassen. <br> <br> Mehrfache Auswahl ist möglich.</p>
        </div>


        <div class="wide">

          <div class="wrap-input" >
          <span class="checkbox-title">Der perfekte Freitagabend für mich ist</span>
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
          <span class="checkbox-title">Hobbies</span>
          <label class="mycheckbox"><input type="checkbox" name="hobby[]" value="sport">
            <span class="checkmark"></span> <input class="input alttext" type="text" name="sport"  placeholder="Sport" >
          </label>
          <label class="mycheckbox"><input type="checkbox" name="hobby[]" value="musik">
            <span class="checkmark"></span> <input class="input alttext" type="text" name="musik"  placeholder="Musik/ Instrumente" >
          </label>
          <label class="mycheckbox">Theater
            <input type="checkbox" name="hobby[]" value="theater">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">Lesen
            <input type="checkbox" name="hobby[]" value="lesen">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">Kochen
            <input type="checkbox" name="hobby[]" value="kochen">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">Zocken
            <input type="checkbox" name="hobby[]" value="zocken">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">Filme/ Serien schauen
            <input type="checkbox" name="hobby[]" value="filme">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">Kunst/Handwerk
            <input type="checkbox" name="hobby[]" value="handwerk">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">Reisen/ Natur
            <input type="checkbox" name="hobby[]" value="reisen">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"><input type="checkbox" name="hobby[]" value="anderes">
            <span class="checkmark"></span> <input class="input alttext" type="text" name="althobby"  placeholder="anderes" >
          </label>
          <span class="focus-input"></span>
          </div>

          <div class="wrap-input" >
          <span class="checkbox-title">Wie gehst du eine schwierige Aufgabe an?</span>
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
          <span class="checkbox-title">Zu welcher Tageszeit bist du am produktivsten?</span>
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
          <span class="checkbox-title">Hattest du dieses Jahr Abitur oder hast du zwischen Schule und jetzt noch etwas anderes gemacht?</span>
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
          <span class="checkbox-title">Bisheriges Engagement im Ehrenamt oder Organisationen und wenn ja wo?</span>
          <label class="mycheckbox"> nicht wirklich
            <input type="checkbox" name="engagement[]" value="keins">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> Schule
            <input type="checkbox" name="engagement[]" value="Schule">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> (Sport-)Verein
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
          <span class="checkbox-title">Was ist deine Motivation Physik/ Meteorologie/ Geophysik/ Lehramt zu studieren?</span>
          <textarea class="input" name="warumphysik" placeholder="(bspw. die Welt verstehen/ verbessern, Herausforderung suchen...)"></textarea>
          <span class="focus-input"></span>
          </div>
          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">Was wünschst du dir von der O-Phase?</span>
          <textarea class="input" name="wuensche" placeholder="(bspw. Freunde finden, viele Informationen, Party...)"></textarea>
          <span class="focus-input"></span>
          </div>

        </div>


        

        <div class="wide">
          <h2>Informationen</h2>
           <p> Diese Daten dienen zum einen ebenfalls dazu, dich einer geeigneten Gruppe zuzuweisen und zum anderen benötigen wir die Daten aufgrund der <a href="https://www.baden-wuerttemberg.de/de/service/aktuelle-infos-zu-corona/aktuelle-corona-verordnung-des-landes-baden-wuerttemberg/">Corona-Verordnung</a> (siehe §6). Die persönlichen Daten werden vertraulich behandelt und zeitnah gelöscht. </p>
        </div>
        

        <div class="contact-form ">

        <div style="width: 100%;"><p class="right">* Pflichtfelder</p></div>

        <div class="wrap-input validate-input" data-validate="fehlt">
          <span class="label-input">Vorname*:</span>
          <input class="input" type="text" name="vname"  placeholder="Vornamen eintragen" >
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input" data-validate="fehlt">
          <span class="label-input">Nachname*:</span>
          <input class="input" type="text" name="nname"  placeholder="Nachnamen eintragen" >
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input" data-validate = "falsches Format">
          <span class="label-input">E-Mail*:</span>
          <input class="input" type="text" name="email" placeholder="E-Mail Adresse eintragen">
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input" data-validate = "falsches Format">
          <span class="label-input">Telefonnummer*:</span>
          <input class="input" type="phone" name="phone" placeholder="Telefonnummer eintragen">
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input">
          <span class="label-input">Alter (Jahre):</span>
          <input class="input" type="number" name="age" placeholder="Alter eintragen">
          <span class="focus-input"></span>
        </div>
    

        <div class="wrap-input" >
          <span class="label-input">Studiengang*:</span>
          <div class="question-answer question input validate-input " data-validate = "fehlt" >
            <input type="radio" class="input" value="Physik" id="physik" name="studiengang"/>
            <label for="physik" class="radio"><span>Physik</span></label>
            <input type="radio" class="input" value="Geophysik" id="geo" name="studiengang" />
            <label for="geo" class="radio"><span>Geo</span></label>
            <input type="radio" class="input" value="Meteorologie" id="meteo" name="studiengang" />
            <label for="meteo" class="radio"><span>Meteo</span></label>
            <input type="radio" class="input" value="Lehramt" id="lehramt" name="studiengang" />
            <label for="lehramt" class="radio"><span>Lehramt</span></label>
            
          </div>
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input" >
          <span class="label-input">BSc/MSc*:</span>
          <div class="question-answer question input validate-input " data-validate = "fehlt" >
            <input type="radio" class="input" value="Bachelor" id="bachelor" name="bama"/>
            <label for="bachelor" class="radio"><span>Bachelor</span></label>
            <input type="radio" class="input" value="Master" id="master" name="bama" />
            <label for="master" class="radio"><span>Master</span></label>
           </div>
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input" >
          <span class="label-input">Nationalität*:</span>
          <div class="question-answer question input validate-input " data-validate = "fehlt" >
            <input type="radio" class="input" value="deutsch" id="national" name="international" />
            <label for="national" class="radio"><span>deutsch</span></label>
            <input type="radio" class="input" value="international" id="international" name="international"/>
            <label for="international" class="radio"><span>international student</span></label>
          </div>
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input" >
          <span class="label-input">Ich nehme teil*:</span>
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
          <textarea class="input" name="message" placeholder="(bspw. Wunschpartner, Beeinträchtigungen, sonstiges...)" rows="2"></textarea>
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

