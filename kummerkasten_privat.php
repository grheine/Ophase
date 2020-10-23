<?php include('header.php'); ?>

  <div class="container-contact">
    <div class="fullwidth">
      <div class="language"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/kummerkasten">en</a></div>
    </div>
    <div class="wrap-contact">

      <?php 
      $title = "Persönliche Probleme";
      include('banner.php'); 
      ?>


        <form class="validate-form" action="<?= dirname($_SERVER['PHP_SELF'])?>/inc/send_feedback.php" method="post">
        <div class="wide">
          <h2>Persönliche Probleme und Fragen</h2>
          <p>Du hast ein persönliches Problem oder fühlst dich aus irgendeinem Grund bezüglich der O-Phase unwohl und möchtest dich jemandem anvertrauen? Dann kannst du dich hier vertraulich an unsere Vertrauenspersonen wenden. Dies geht auch anonym, wenn dir das lieber ist. Zudem stellen sich unsere Vertrauenspersonen weiter unten persönlich nochmal vor, damit du weißt, mit wem du es eigentlich zu tun hast. 
          </p>
        </div>



        <div class="wide">
          <div class="wrap-input">
          <div style="width: 100%;"><p class="right"></p></div>
          <span class="checkbox-title">Deine Nachricht</span>
          <textarea class="input" name="maintext" placeholder="Was liegt Dir auf dem Herzen?"></textarea>
          <span class="focus-input"></span>
          </div>
        </div>

      <div class="wide">
         <p>Wenn wir uns bei Dir zurückmelden sollen, benötigen wir entweder eine E-Mail-Addresse oder eine Handynummer von Dir, Du musst aber auch keine Daten angeben. Natürlich behandeln wir Deine Daten anonym und diskret.</p>
      </div>
        

        <div class="contact-form ">

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






        <div class="wide" style="margin-top: 50px;">
          <h3 class="fragebogen">Unsere Vertrauenspersonen sind immer für Dich da:</h3> 
          <table style="width:100%; margin-top: 50px;">
            <tr>
              <td class="left-td">
                <img src="<?= dirname($_SERVER['PHP_SELF'])?>/images/alina.jpg"></img>
              </td>
              <td class="right-td">
                  <p>
                    Hallo,

                    ich heiße Alina und studiere jetzt schon im 9. Semester Physik.
                    Nach dem Abi hab ich mir erstmal ein Jahr Pause genommen, in dem ich gearbeitet, ein Praktikum gemacht und einige Reisen unternommen habe.
                    So richtig sicher, ob Physik das Richtige für mich ist, war ich danach auch nicht. Mittlerweile weiß ich jedoch, dass es eine gute Entscheidung war.
                    Der Weg bis hier hin war für mich mit recht vielen Zweifeln verbunden und ich musste mich mehr als einmal Fragen, ob der Stress das ganze an Ende Wert ist (ist er xD ).
                    Im Frühjahr werde ich nach meiner letzten mündlichen Abschlussprüfung und der Bachlor-Arbeit dann auch mit dem Master anfangen.
                    Wenn ich nicht gerade mit Physik beschäftigt bin, engagiere ich mich in der Fachschaft, fahre Rennrad oder helfe beim Foodsharing. 
                    Außerdem liebe ich gutes Essen und Wein und bekoche/bebacke sehr gerne Menschen die mag. Ansonsten lese ich viel und philosphiere mit meinen Mitmenschen über die Welt.

                    Wenn ihr also Fragen und Probleme habt, könnt ihr euch melden,
                    ich helfe sehr gerne.

                    Liebe Grüße und bis dann :)
                  </p>
              </td>
            </tr>
            <tr>
              <td class="left-td">
                <img src="<?= dirname($_SERVER['PHP_SELF'])?>/images/jonas.jpg"></img>
              </td>
              <td class="right-td">
                  <p>
                    Hallo,

                    ich bin Jonas und studiere im 13. Semester, darf mich also demnächst mit dem Qualitätsprädikat "Alter Sack" schmücken. Momentan arbeite ich an meiner Masterarbeit im Bereich der Halbleiteroptik.
                    Es ist zwar schon etwas her, aber durch meine Zeit als Teil der Fachschaft habe ich viele Facetten des Studiums kennengelernt: Schöne Klausurfeiern mit Freunden im Schlosspark, aber auch Niederlagen und Stress beim Bearbeiten von Übungsblättern.
                    Ich bemühe mich, für all eure Probleme, Sorgen oder wie immer man es auch nennen will ein offenes Ohr zu haben.
                    Insofern: Meine Tür, virtuell oder real, ist euch immer offen, ich freue mich auf euch.
                  </p>
              </td>
            </tr>
            <tr>
              <td class="left-td">
                <img src="<?= dirname($_SERVER['PHP_SELF'])?>/images/mareike.jpg"></img>
              </td>
              <td class="right-td">
                  <p>
                    Moin moin!
                    Ich bin Mareike.
                    Eine Keksliebhaberin mit Laktoseintoleranz, Studiengangsabbrecherin und Zweifelmeisterin, ein Stur- und Quatschkopf und bekennender Kaffeesuchti. Wobei Paulaner Spezi eine sehr geliebte Alternative darstellt.

                    Bei mir lief im Studium auch nicht alles rund. Ich erinnere mich zum Beispiel daran, dass ich angefangen habe und dachte: Ich pack Physik einfach nicht.
                    Aber ich bin immernoch da! Mittlerweile ist die Bachelorarbeit erfolgreich abgegeben und nur noch zwei Prüfungen bis zum Abschluss!

                    Neben der Physik findet man mich öfter in der Boulderhalle, an allen möglichen Orten zeichnend oder vor der PS4.

                    Ich weiß wie es mir in meiner Anfangszeit ging und bin froh ein paar Leute aus höheren Semestern gekannt zu haben um mich zurecht zu finden.
                    Falls du diesen Luxus nicht hast beantworte ich dir gerne all deine Fragen.
                    Manchmal hat man ja aber keine expliziten Fragen, sondern etwas beschäftigt oder belastet einen. Wenn dem so ist , dann höre ich dir gerne zu wenn du das möchtest. Fühl dich frei mir einfach zu schreiben. Egal wann, egal wie! Ich antworte dir sobald ich kann.

                    Doch genug der ernsten Worte!
                    Ich wünsche einen schönen Start ins Physikstudium und bis bald!
                  </p>
              </td>
            </tr>
          </table>
        </div>
        </div>
      
      
<?php include('footer.php'); ?>
