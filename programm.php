<?php include('header.php'); ?>

	<div class="container-contact">

		<div class="fullwidth">
      <div class="language"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/programm">en</a></div>
    </div>
		<div class="wrap-contact">
			<?php 
      $title = "Programm";
      include('banner.php'); 
      ?>

		<div class="wide faq">



		<img src="images/zeitplan.png" alt="Zeitplan" class="zeitplan">


	



<div class="programm">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Montag')" id="defaultOpen"><h2 class="tab-long">Montag</h2><h2 class="tab-short">Mo</h2></button>
  <button class="tablinks" onclick="openCity(event, 'Dienstag')"><h2 class="tab-long">Dienstag</h2><h2 class="tab-short">Di</h2></button>
  <button class="tablinks" onclick="openCity(event, 'Mittwoch')"><h2 class="tab-long">Mittwoch</h2><h2 class="tab-short">Mi</h2></button>
  <button class="tablinks" onclick="openCity(event, 'Donnerstag')"><h2 class="tab-long">Donnerstag</h2><h2 class="tab-short">Do</h2></button>
  <button class="tablinks" onclick="openCity(event, 'Freitag')" ><h2 class="tab-long">Freitag</h2><h2 class="tab-short">Fr</h2></button>
</div>

<div id="Montag" class="tabcontent">
	<br>
  <h3>Begrüßung</h3>
				<h4>Wann: 11:00-12:00</h4>
				<h4>Wo: Zoom</h4>
				<p>Am Montag startet die O-Phase mit der Begrüßung um 11:00 in Zoom. Im Rahmen der Begrüßung möchten wir euch offiziell und ganz herzlich am KIT und somit im Unileben willkommen heißen. Wir das sind auf der einen Seite die Fachschaft und auf der anderen Seite der Dekan und der Studiendekan der Fakultät Physik. Doch wer sind wir eigentlich?	Wir sind selbst Studentinnen und Studenten, die sich an der Fakultät für die Interessen der Studierenden	einsetzen. Außerdem gibt es bei uns Beratung und Informationen, wie zum Beispiel die O-Phase, aber auch	Klausursammlungen, Prüfungsprotokolle und vieles mehr. Mehr über unsere Arbeit erfahrt Ihr auf unserer <a target="_blank" href="https://fachschaft.physik.kit.edu/drupal/">Website</a> oder ... richtig: Während der O-Phase. Den Link zur Begrüßung solltet Ihr per Mail erhalten haben. Falls Ihr keine Mail erhalten habt, überprüft zunächst Euren Spam-Ordner und gebt uns ansonsten schnell Bescheid, dass Ihr keine Mail erhalten habt, sodass wir euch helfen können. Hierfür könnt Ihr beispielsweise das 	<a href="<?= dirname($_SERVER['PHP_SELF'])?>/kummerkasten">Kontaktformular</a> nutzen. </p>

				<h3>Gruppenzeit</h3>
				<h4>Wann: 12:00-16:00</h4>
				<h4>Wo: Discord</h4>
				<p>In der Gruppenzeit verbringt Ihr Zeit mit Eurer O-Phasen Gruppe. Aufgrund Eurer Angaben bei der Anmeldung haben wir Euch einer passenden Gruppe zugewiesen. Dabei haben wir zum einen darauf geachtet, dass Ihr sowohl von euren Interessen zusammen passt als auch auf Aspekte wie den Studiengang. Während der Gruppenzeiten erzählen euch eure Tutoren vieles über das Studium und bringen euch eventuell den ein oder anderen Trick bei, um das Studium angenehmer zu gestalten. Während der Gruppenzeit werdet ihr auch Gelegenheit zum Mittagessen haben. Wann die Mittagspause stattfindet, könnt Ihr einfach mit euren Tutoren und eurer Gruppe absprechen. Ursprünglich war es geplant, die Gruppenzeiten in Präsenz zu gestalten. Dies mussten wir leider auf digital umstellen, da die Infektionszahlen in den letzten Tagen dramatisch angestiegen sind. Aber keine Sorge! Ihr werdet auch in der virtuellen Umgebung genügend Möglichkeiten haben, eure Kommilitonen kennenzulernen. </p>

				<h3>Rallye</h3>
				<h4>Wann: 16:00-19:00</h4>
				<h4>Wo: Discord</h4>
				<p>Und da kommen wir auch schon zur ersten Gelegenheit, eure Kommilitonen besser kennenzulernen: die Rallye – die zugegebenermaßen dieses Jahr eher ein Quiz ist. Aber nichts destotrotz: hier habt Ihr die Möglichkeit, in 3er Gruppen die Aufgaben der Rallye zu lösen und mit etwas Glück, tolle Preise zu gewinnen. </p>

				<h3>Spieleabend</h3>
				<h4>Wann: 20:00-Ende</h4>
				<h4>Wo: Discord</h4>
				<p>Direkt am ersten Abend veranstalten wir für euch einen Spieleabend und zwar auf dem Discord Channel. Hier stellen die Tutoren verschiedene Räume für Spiele wie Among Us, LoL, Skribble und vieles mehr zur Verfügung. Wir wünschen viel Spaß!</p>
</div>

<div id="Dienstag" class="tabcontent">
  <br>
				<h3>Gruppenzeit</h3>
				<h4>Wann: 11:00-15:00</h4>
				<h4>Wo: Discord</h4>
				<p>Der Dienstag Vormittag startet wieder mit Zeit mit eurer Gruppe. Heute haben eure Tutoren viel Zeit, euch diverse Webseiten für und rund ums Studium zu zeigen. Die genaue Gestaltung der Gruppenzeit ist natürlich von euren Tutoren abhängig.  </p>

				<h3>SCC Präsentation</h3>
				<h4>Wann: 15:00-15:30</h4>
				<h4>Wo: Zoom</h4>
				<p> Das Steinbuch Center for Computing (SCC) bietet dieses Jahr wieder zur O-Phase eine Einführung in die angebotenen Dienste des SCC an, um somit einen Einblick in die IT-Angebote des KIT zu geben. Themen sind unter anderem der KIT-Account, Tools zur Onlineleere, der Druckdienst des SCC oder wie Ihr eine VPN Verbindung einrichten könnt.  </p>

				<h3>Kultur- und Hochschulgruppen-Vorstellung</h3>
				<h4>Wann: 16:00-18:00</h4>
				<h4>Wo: Zoom</h4>
				<p>Der KIT Campus ist kulturell sehr vielseitig. So gibt es beispielsweise über 70 Kultur- und Hochschulgruppen. Da ist fast für jeden noch etwas dabei, um sich neben dem Studium zu engagieren. Bei der heutigen Vorstellung kann sich natürlich nur ein Bruchteil dieser Gruppen vorstellen. Hierbei haben wir den Fokus auf Gruppen gelegt, die am relevantesten für Physik Studierende sind. Heute lernt Ihr beispielsweise die Lieblingskneipe viele Physiker – Z10 – kennen, die gänzlich ehrenamtlich betrieben wird und gleichzeitig noch ein Kulturzentrum ist, in dem Konzerte, Theaterabende etc. eintrittfrei angeboten werden. Weitere Gruppen, die sich heute vorstellen sind, die Fachschaft selbst, die jDPG, die Nacht der Wissenschaft und viele mehr. Es lohnt sich jedenfalls mal einen Blick über den Tellerrand zu wagen und Kompetenzen auch abseits des Lernschreibtischs zu sammeln. <br><br>
				Liste der Gruppen: AStA, Fachschaft, jDPG, Mentorenprogramm, Nightline, Nacht der Wissenschaft, HoC, Z10, AKK, Physikertheater, Physikerchor, KA-Raceing
				</p>

				<h3>Physikertheater Aufführung Stream</h3>
				<h4>Wann: 20:00-23:00</h4>
				<h4>Wo: noch offen</h4>
				<p>Heute Abend zeigen wir euch die Aufnahmen eines vergangenen Stücks des Physikertheaters. Welches Stück es sein wird, verraten wir noch nicht, lasst euch einfach überraschen. Nur eins können wir euch schonmal verraten: es wird lustig und unterhaltsam.    </p>
</div>

<div id="Mittwoch" class="tabcontent">
  <br>
  		<h3>Prüfungsordnung- und Nebenfachvorstellung</h3>
				<h4>Wann: 11:00-13:00</h4>
				<h4>Wo: Zoom</h4>
				<p>Vorstellung der Prüfungsordnungen für die verschiedenen Studiengänge (jeweils in unterschiedlichen Räumen). Für die Physik-Bachelor Vorstellung beinhaltet diese Vorstellung auch eine Übersicht über die Nebenfächer. </p>

				<h3>Gruppenzeit</h3>
				<h4>Wann: 13:00-18:00</h4>
				<h4>Wo: Discord</h4>
				<p>Heue verbringt Ihr wieder Zeit mit eurer Gruppe. Und auch für heute haben wir uns wieder etwas ganz besonderes ausgedacht, und zwar eine Campusführung per Videostream. Ein paar der Tutoren machen sich hierfür mit Livecam auf den Weg quer über den Campus und erzählen euch wissenswertes und witzige Anekdoten zu dem ein oder anderen Gebäude oder Platz auf dem Campus. </p>

				<h3>Fachschaftssitzung</h3>
				<h4>Wann: 18:00-19:00</h4>
				<h4>Wo: Zoom</h4>
				<p>Hier könnt Ihr live eine Fachschaftssitzung miterleben und erfahren, mit welchen Themen sich die Fachschaft beschäftigt, um das Leben der Studierenden am KIT ein wenig besser zu machen.  </p>

				<h3>Abend mit der Gruppe</h3>
				<h4>Wann: 20:00-23:00</h4>
				<h4>Wo: noch offen</h4>
				<p> Heute haben wir es euren Tutoren frei gelassen, sich ein eigenes Programm für euch zu überlegen. Seid also gespannt, was sich eure Tutoren für eure Bespaßung ausgedacht haben.   </p>
</div>

<div id="Donnerstag" class="tabcontent">
 <br>

				<h3>Gruppenzeit</h3>
				<h4>Wann: 11:00-15:00</h4>
				<h4>Wo: Discord</h4>
				<p>Heue verbringt Ihr ein letztes Mal Zeit mit eurer Gruppe.  </p>

				<h3>Prof Café</h3>
				<h4>Wann: 15:00-17:00</h4>
				<h4>Wo: Zoom</h4>
				<p>Jetzt habt Ihr eure Kommilitonen etwas besser kennen lernen können, fehlen noch die Profs. Beim Prof Café könnt Ihr in entspanntem Rahmen eure zukünftigen Professoren und Professorinnen kennenlernen. Hierfür haben die Profs Steckbriefe ausgefüllt, die Ihr euch durchlesen könnt, um sie etwas besser kennenzulernen. Zudem könnt Ihr in einzelnen Videochaträumen mit den jeweiligen Profs quatschen und ihnen Löcher in den Bauch fragen.   </p>

				<h3>Chatroulette</h3>
				<h4>Wann: 20:00-23:00</h4>
				<h4>Wo: Discord</h4>
				<p> Im Discord Chat Roulette könnt Ihr spielerisch neue Kommilitonen aus eurem Semester kennenlernen. Das Prinzip ist ganz einfach: Ihr werdet zufällig einem Gesprächspartner zugewiesen und habt dann die Möglichkeit euch zu unterhalten. Am witzigsten ist es natürlich, wenn Ihr auch die Kamera anmacht und euren gegenüber sehen könnt. Wenn Ihr dann einen neuen Gesprächspartner haben wollt, könnt Ihr einfach wechseln und werdet dem nächsten Kommilitonen zugewiesen und so weiter und so fort.  </p>
</div>

<div id="Freitag" class="tabcontent">
<br>
				<h3>Technischer Support</h3>
				<h4>Wann: 11:00-13:00</h4>
				<h4>Wo: Zoom</h4>
				<p>Den letzten Tag gehen wir ganz entspannt an. Hierfür haben wir eine Sprechstunde für technischen Support eingerichtet. Falls zum Beispiel euer MS Teams noch nicht funktioniert oder Ihr sonstige Hilfe beim Einrichten eures PCs fürs Physik Studium benötigt, bekommt Ihr hier die passende Hilfe </p>

				<h3>Institutsvorstellungen</h3>
				<h4>Wann: 13:00-17:00</h4>
				<h4>Wo: Zoom</h4>
				<p>Um euch einen Überblick über die Themen, an denen die Physik Institute am KIT forschen, etwas näher zu bringen, stellen sich einige der Institute heute vor. Ihr könnt euch beispielsweise über Vorträge der theoretischen Teilchenphysik, der Quantenmaterialien- und Technologien, der Meteorologie und einigen mehr freuen. Natürlich können wir hier nur einen Bruchteil der Institute der Fakultät abbilden. Also schaut auch einfach gerne auf der <a href="http://www.physik.kit.edu/Institute.php">Fakultätsseite</a> um, welche Institute es an unserer Fakultät überhaupt gibt.   </p>


</div>
</div>

   






		</div>	
		

	</div>

	<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



<?php include('footer.php'); ?>