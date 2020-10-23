<?php include('header.php'); ?>

<div class="container-contact">
<div class="fullwidth">
      <div class="language"><a href="">de</a><p>|</p><a href="<?= dirname($_SERVER['PHP_SELF'])?>/english/faq">en</a></div>
    </div>
<div class="wrap-contact">
    <?php 
    $title = "FAQ";
    include('banner.php'); 
    ?>
  

<div class="wide faq">
    <?php
    function TableOfContents($depth)
    /*AutoTOC function written by Alex Freeman
    * Released under CC-by-sa 3.0 license
    * http://www.10stripe.com/  */
    {
    $filename = __FILE__;
    //read in the file
    $file = fopen($filename,"r");
    $html_string = fread($file, filesize($filename));
    fclose($file);
 
    //get the headings down to the specified depth
    $pattern = '/<h[2-'.$depth.']*[^>]*>.*?<\/h[2-'.$depth.']>/';
    $whocares = preg_match_all($pattern,$html_string,$winners);
 
    //reformat the results to be more usable
    $heads = implode("\n",$winners[0]);
    $heads = str_replace('<a name="','<a href="#',$heads);
    $heads = str_replace('</a>','',$heads);
    $heads = preg_replace('/<h([1-'.$depth.'])>/','<li class="toc$1">',$heads);
    $heads = preg_replace('/<\/h[1-'.$depth.']>/','</a></li>',$heads);
 
    //plug the results into appropriate HTML tags
    $contents = '<div id="toc"> 
    <p id="toc-header">Inhalt</p>
    <ul>
    '.$heads.'
    </ul>
    </div>';
    echo $contents;
    }
 ?>
    <?php TableOfContents(3); ?>

    <h2><a name="inderophase"></a>In der O-Phase</h2>
    <h3><a name="zoom"></a>Zoom</h3>
    <p> Als Ersatz für die großen Hörsaalveranstaltungen mit allen Erstis verwenden wir das Programm Zoom. Dieses wird auch für das Übertragen der Vorlesungen benutzt und falls ihr es nicht eh bereits im Unterricht kennengelernt habt, könnt ihr so in der O-Phase den ersten Kontakt zu diesem Programm schon vor der ersten Vorlesung erstellen. Diverse Details zur Nutzung von Zoom und Hilfestellungen sind auf dieser <a href="https://www.zml.kit.edu/zoom-studierende.php">KIT Seite</a> zu finden. Dort findet ihr auch <a href="https://www.zml.kit.edu/downloads/Anleitung_Zoom-Nutzung_Studierende.pdf">Anleitungen für Studierende</a>  </p>
    
    <h3><a name="discord"></a>Discord</h3>
    <p>Da wir leider nicht genügend Zoom Lizenzen haben, um beispielsweise auch die Gruppenzeiten über Zoom anzubieten, haben wir uns für Discord entschieden. Hier haben wir bereits verschiedene Räume erstellt, denen ihr beitreten könnt. Ladet euch am besten noch vor der O-Phase das Discord Programm herunter, da dieses flüssiger läuft als die Web-App. Den Download-Link findet ihr <a href="https://discord.com/download">hier</a>. Setzt euch am besten auch noch vor der ersten Nutzung in der O-Phase mit dem Programm auseinander, da es teilweise nicht gänzlich intuitiv ist. <br>
    Eine gute Anleitung zu Discord findet ihr <a href="https://support.discord.com/hc/de/articles/360045138571-Beginner-s-Guide-to-Discord">hier</a>. Um es kurz auszudrücken: der Server ist aufgeteilt in Sprach- und Textkanäle (#). In den Sprachkanälen könnt ihr sprechen und in den Textkanälen chatten. Also ganz einfach oder? 
    </p>

    <h3><a name="discord"></a>Mir ist langweilig</h3>
    <p>Wenn dir mal langweilig sein sollte, dann kannst du jederzeit den öffentlichen Räumen in Discord unter dem Reiter "für alle" beitreten und vielleicht warten da ja schon andere Erstis oder Tutoren auf dich, mit denen du quatschen oder was zocken kannst. Hier findest du beispielsweise verschiedene Lounge-Räume und das Orga-Sofa, wo häufig einer von uns Orga-Leuten anzutreffen ist, um Fragen zu beantworten. 
    </p>
    

    <h2><a name="whatisophase"></a>Was ist die O-Phase?</h2>
    <p>Die Orientierungsphase – kurz O-Phase – ist unsere Infoveranstaltung, die dir helfen soll, dich besser an der Uni zurechtzufinden. Nach unserer Begrüßung lernst du in kleinen Gruppen dein Studium, Karlsruhe, sowie Ansprechpartner und Freunde für dein Studium kennen.</p>
    <h3><a name="lerneninophase"></a>Was lerne ich alles in der O-Phase?</h3>
    <p>Wir wollen natürlich nicht alles vorwegnehmen, das wäre ja langweilig. Aber ein paar Dinge können wir schonmal verraten. Wir beantworten Fragen, wie "Was muss ich für Vorlesungen belegen? Wie stelle ich meinen Stundenplan zusammen? Wie finde ich mich zurecht im Website-Dschungel des KIT? Wo gibts das beste Mittagessen? Wo kann ich günstig drucken? Was kann man an der Uni außer Studieren noch machen?" und viele mehr.  </p>
    <h3><a name="ogruppe"></a>Was ist die O-Phasen-Gruppe?</h3>
    <p>Deine O-Phasen-Gruppe ist eine Kleingruppe von bis zu 15 Erstsemestlern – oder kurz Erstis –, die von erfahrenen Studenten (Tutoren) aus höheren Semestern angeleitet wird. Die meiste Zeit verbringst du in dieser Gruppe. Während der Gruppenzeiten zeigen dir deine Tutoren beispielsweise, wie man ein Buch in der Bibliothek ausleiht oder wie man seinen Stundenplan erstellt und natürlich vieles mehr. </p>
    <h3><a name="nichtverpassen"></a>Was sollte ich nicht verpassen?</h3>
    <p>Alles :)
    Natürlich empfehlen wir dir, am gesamten Programm teilzunehmen. Falls du das nicht schaffst, solltest du auf jeden Fall an der Prüfungsordnung- und Nebenfachvorstellung teilnehmen. Solltest du diese Veranstaltungen auch verpassen, kannst du dich per <a href="mailto:fachschaft@physik.kit.edu">Mail</a> bei uns melden, damit du die wichtigen Informationen trotzdem erhältst.</p>

    <h2><a name="corona"></a>Corona</h2>
    <h3><a name="gehtdas"></a>O-Phase – geht das überhaupt?</h3>
    <p>Ja! Jedenfalls versuchen wir, die O-Phase so normal wie möglich zu gestalten. Wir mussten zwar leider aufgrund der jüngsten Ereignisse komplett auf digital umstellen, allerdings können viele Dinge auch in virtueller Umgebung stattfinden. So wirst du einen Großteil der Woche angeleitet von 2-3 Tutoren (Studenten aus höheren Semestern ) verbringen. Damit du und deine Kommilitonen möglichst gut charakterlich zusammenpasst, ist es wichtig, dass du den kleinen Persönlichkeitstest am Anfang der Anmeldung machst. So können wir versuchen, die Gruppen möglichst homogen einzuteilen, was Wünsche und Interessen betrifft.</p>
<!--     <h3><a name="teilnehmen"></a>Warum sollte ich präsent an der O-Phase teilnehmen? </h3>
    <p>Um es kurz zu sagen, das Physikstudium ist im Alleingang so gut wie unmöglich zu meistern. Besonders bei den ersten Übungsblättern wirst du feststellen, dass diese alleine schlicht nicht lösbar sind – egal wie gut du in der Schule warst. Die Physik und das physikalische Denken leben vom regen Austausch von Ideen und seien wir mal ehrlich, gemeinsam macht das Lösen von schwierigen Problemen einfach viel mehr Spaß. Daher ist es sehr wichtig, dass du zu Beginn des Studiums Kommilitonen kennenlernst und eine Lerngruppe finden kannst. Und dafür ist die O-Phase da. Mit etwas Glück findest du in dieser legendären Woche nicht nur Lernpartner, sondern eventuell sogar Freunde fürs Leben.</p> -->
    <h3><a name="nichtda"></a>Ich kann nicht vor Ort teilnehmen – was nun?</h3>
    <p>Das ist gar kein Problem! Die O-Phase findet gänzlich digital via Zoom und Discord statt. Das heißt du kannst bequem von deinem Sofa aus die wichtigen Dinge mitbekommen. Auch viele Abendprogramm-Punkte versuchen wir digital umzusetzen. </p>

    <h2><a name="studium"></a>Vor dem Studium</h2>
    <h3><a name="addressing"></a>Wie rede ich <em>Sie</em> an?</h3>
    <p><em>Mit du</em>! Wir, die Studierendenvertretung aller Physik Studierenden am KIT, und unsere Tutoren sind zum Großteil alle noch selbst Studierende und damit jung genug geduzt zu werden.
    <h3><a name="keinewohnung"></a>Hilfe, ich habe noch keine Wohnung!1!!</h3>
    <p>Da die O-Phase deutlich mehr Spaß macht, wenn du nicht schon am frühen Abend wieder nach hause fahren musst, versuchen wir eine Schlafmöglichkeit zu finden. Melde dich dafür am Montag bei uns bzw. deinen Tutoren. Hast du zum Vorlesungsbeginn noch immer keine Wohnung, versucht der AStA eine Notunterkunft bereitzustellen. Wende dich dazu an <a href="mailto:soziales@asta.kit.edu">soziales@asta.kit.edu</a></p>
    <h3><a name="bewerbung"></a>Wie muss ich mich für das Studium bewerben?</h3>
    <p>Am einfachtsten ist die <a target="_blank" href="https://www.sle.kit.edu/vorstudium/bewerbung.php">Online-Bewerbung</a>, die für alle Studiengänge möglich ist. Du solltest dir dabei die Informationen auf der Seite vom Studienbüro genauestens durchlesen. Für Fragen gibt es auch die KIT-Bewerberhotline: 0721 608 82222.</p>
    <h3><a name="vorbereitung"></a>Wie kann ich mich sonst auf das Studium vorbereiten?</h3>
    <p>Am besten genießt du deine freie Zeit und machst das, was dir Spaß macht. Falls du deine Mathematikkenntisse vor dem Studium noch etwas auffrischen oder dich vorbereiten willst, gibt es auch noch die <a target="_blank" href="https://www.mint-kolleg.kit.edu/Vorkurse.php">Vorkurse</a> vom MINT-Kolleg.</p>
    <h3><a name="andererstudiengang"></a>Ich will zusätzlich zu meinem Studiengang noch Mathematik/Informatik/E-Tech studieren. Geht das?</h3>
    <p>Es geht theoretisch. Aber - denk lieber nicht darüber nach. Der/Die normale Student*in hat üblichweise genug mit einem Studiengang zu kämpfen. Gerade der Einstieg in das Studium sollte deine volle Aufmerksamkeit bekommen. Im Zweifelsfall kannst du dich auch nach dem ersten Semester noch entscheiden, etwas anderes parallel zu studieren. Außerdem kannst du durch das Nebenfach im Bachelor bereits einen guten Einblick in ein anderes Studienfach bekommen. Wenn du partout zu wenig zu tun hast, kannst du deine Zeit übrigens auch anders totschlagen – z.B. mit Fachschaftsarbeit. :)</p>

    <h2><a name="technisches"></a>Technisches</h2>
    <h3><a name="internet"></a>Wo bekomme ich einen Internetzugang/Account/etc.?</h3>
    <p>Du solltest im Rahmen deiner Immatrikulation einen Brief mit deinem SCC-Account (u-Kürzel + Passwort) erhalten haben. Dieses Kürzel kannst du zum Anmelden im <a target="_blank" href="https://www.scc.kit.edu/dienste/wlan.php">WLAN</a>,
    im <a target="_blank" href="https://campus.studium.kit.edu">Studierendenportal</a>
    sowie beim <a target="_blank" href="https://www.scc.kit.edu/dienste/7386.php">KIT-Mail Server</a> verwenden.
    Melde dich bitte beim Studienbüro oder <a target="_blank" href="https://scc.kit.edu">SCC</a>, falls dies nicht funktioniert hat.</p>
    <h3><a name="tacker"></a>Habt ihr einen Tacker?</h3>
    <p>Ja, wir haben einen Tacker.</p>

    <h2><a name="studium"></a>Im Studium</h2>
    <h3><a name="jobs"></a>Was ist mit Jobs/Praktika?</h3>
    <p>Wenn du das Geld brauchst, oder einfach ein wenig Arbeitserfahrung sammeln willst, gibt es hier einen Haufen Nebenjobs – sowohl an als auch außerhalb der Uni. Allerdings ist es eine gute Idee, erst die großen Mathematikklausuren sowie die Orientierungsprüfung zu bestehen, bevor du mit einem Job anfängst.<br>
    Berufspraktika sind im Physikstudium nicht vorgesehen. Im Geophysikstudium ist ein Berufspraktikum im 5. Semester vorgesehen. Im Lehramtstudium ist ein Orientierungspraktikum (3 Wochen) im Bachelor und beim Master ein ganzes halbes Jahr Praxissemester eingeplant. 
    </p>
    <h3><a name="ausland"></a>Kann ich ins Ausland gehen?</h3>
    <p>Ja. Das wird sogar ganz gut gefördert: Für Auslandsaufenthalte innerhalb Europas gibt es das <a target="_blank" href="http://www.physik.kit.edu/Studium/Austauschprogramme/Erasmus_deutsch/">Erasmus-Programm</a>. Außerdem bietet die Fakultät einen <a target="_blank" href="http://www.physik.kit.edu/Studium/Austauschprogramme/Doppelmaster_outgoer/">Doppelmaster</a> mit der Université Grenoble Alpes an. Als Bachelor ist es üblich, zwischen dem 4. und dem 6. Semester den Auslandsaufenthalt zu machen. Als Faustregel: Vorbereitungen sollten ca. 1 Jahr im Voraus begonnen werden. Als Master solltest du dich am besten schon vor oder ganz zu Beginn deines Studiums darum kümmern.</p>

    <h2><a name="karlsruhe"></a>Karlsruhe</h2>
    <h3><a name="kit"></a>Wie ist das KIT so allgemein?</h3>
    <p>Das KIT ist eine Campusuni, d.h. (fast) alle Gebäude liegen auf einem einzigen Gelände. Der Campus liegt zentral am Schlosspark nahe der Fußgängerzone, also mitten im Herzen der Stadt und hat eine sehr gute Anbindung an den ÖPNV. Falls du auf Natur stehst, bietet es sich in kleinen Lernpausen an, einen ein Spaziergang in den direkt im Norden angrenzenden Hardtwald zu machen. Aber auch sonst, ist der Campus sehr grün und bietet genug schattige Plätzchen zum Entspannen.</p>
    <h3><a name="abendsweggehen"></a>Kann man in Karlsruhe gut abends weggehen?</h3>
    <p>In Karlsruhe gibt es viele nette Kneipen (im Sommer viele mit Biergarten), einige Diskos, gute Kinos und im Sommer lockt der Schlosspark. Es sollte also für jeden etwas dabei sein. Die Bahnen fahren an Wochenenden auch nachts, an Wochentagen leider nur bis ~ 01:00 Uhr. Mehr Infos <a target="_blank" href="https://www.kvv.de/fahrplan/sonderfahrten/nightliner.html">hier</a>.</p>
    <h3><a name="wohneninka"></a>Wie wohnen Studierende in Karlsruhe?</h3>
    <p>Die meisten Studierenden wohnen in Wohngemeinschaften (WGs) oder im Wohnheim. Davon gibt es in Karlsruhe einige. Zimmer vermittelt unter anderem das Studierendenwerk; einige Wohnheime sind auch selbstverwaltet. Besonders herauszustellen ist hierbei das <a target="_blank" href="https://www.hadiko.de">HaDiKo</a> – das größte selbstverwaltete Studentenwohnheim Deutschlands. Sowohl die Wohnheime als auch die Privatwohnungen liegen meist nicht mehr als zehn Minuten (mit dem Fahrrad) von der Uni entfernt. Die typischen Studentenwohnviertel sind die Oststadt, Innenstadt und Südstadt.  </p>
    <h3><a name="wohnunginka"></a>Ich suche eine (provisionsfreie) Wohnung, oder eine WG, wo suche ich am besten?</h3>
    <p>Das Studierendenwerk hat eine <a target="_blank" href="http://www.sw-ka.de/de/wohnen/zimmervermittlung">Wohnungsbörse</a>, die regelmäßig aktualisiert wird. Hier findest du neue WG- und Wohnungsangebote. Unter <a target="_blank" href="https://www.wg-gesucht.de">wg-gesucht</a> gibt es auch fast täglich neue Angebote, ebenso auf dem <a target="_blank" href="https://kit.edu/markt">KIT-Kleinanzeigenmarkt</a>. Weiterhin kann es sinnvoll sein, die Anzeigen in lokalen Zeitungen (z.B. BNN) durchzusehen oder gar selbst zu inserieren. Wenn du sowieso schon in Karlsruhe bist um dir Wohnungen anzuschauen, kannst du gleich noch beim schwarzen Brett in der Mensa vorbei schauen, da hängen auch oft WG- und Wohnungsanzeigen.</p>
    <p>Außerdem sind im <a target="_blank" href="https://ka.stadtwiki.net/Studentenwohnung">Stadtwiki</a> auch noch sämtliche Wohnheime und Anlaufstellen für private Vermietung aufgelistet.</p>
    <h3><a name="daheimbleiber"></a>Ich wohne ganz in der Nähe, kann ich zu Hause bleiben?</h3>
    <p>Du kannst – aber ob das schlau ist?  Wenn man ein Studium anfängt, sollte man eigentlich auch auf eigenen Beinen stehen. Zudem lernt man die Leute mit denen man studiert nur kennen, wenn man auch wirklich am Ort des Geschehens ist und nicht dann weg muss, wenn die letzte Bahn fährt.</p>
    <h3><a name="kvvticket"></a>Kann ich mir ein Studiticket für den KVV schon vor dem Studium kaufen?</h3>
    <p>Du kannst dein Studiticket kaufen, sobald du dir deine <a target="_blank"  href="https://campus.studium.kit.edu/reports/studyreports.php"> Studien-/KVV-Bescheinigung </a> im Studierendenportal ausdrucken kannst - also sobald du immatrikuliert bist. Wenn du ein Physik-Studium anfängst, ist es sogar sinnvoll, dass du dir dein Ticket schon vor dem Vorlesungsbeginn kaufst, denn du bist wahrscheinlich schon ab dem Mathe-Vorkurs in Karlsruhe. Ab 18:00 täglich, am Wochenende und an Feiertagen kannst du übrigens mit der ausgedruckten KVV-Bescheinigung und deinem Studierendenausweis kostenlos den KVV nutzen.</p>
    
    <h2><a name="fragenotfound"></a>Deine Frage war nicht dabei?</h2>
    <p>Dann hast du drei Möglichkeiten, dich zu informieren. Am besten gehst du diese in chronologischer Reihenfolge durch:</p>
    <ol>
    <li> <p>In unserem <a target="_blank" href="https://fachschaft.physik.kit.edu/drupal/sites/default/files/fsinfos/erstiinfo_1.pdf">Erstiinfo</a> stehen viele Antworten auf die obigen Fragen und noch vieles mehr. Dort findest du genauere Erklärungen zur Uni, dem Physik/ Geophysik/ Meteorologie/ Lehramt Studium und dem Leben in Karlsruhe. Das Erstiinfo ist ein Produkt vieler, vieler Semster- und Lebenserfahrungen. Die solltest du dir also wirklich sehr zu Herzen nehmen.</p></li>
    <li> <p>Deine O-Phasen Tutoren/Tutorinnen und die Orga – Die O-Phase ist dazu da, dich über das Studium zu informieren. Nutze also die Gelegenheit aus und frage allen Löcher in den Bauch. </p></li>
    <li> <p>Die <a target="_blank" href="https://fachschaft.physik.kit.edu/drupal/">Fachschaft</a>! Deine Studierendenvertretung ist dazu da, dich durch dein Studium zu begleiten. Sie ist dein Freund und Helfer und antwortet gerne auf Fragen. Außerhalb von Corona kann man gerne einfach jederzeit im sogenannten Sumpf oder dem Büro vorbeischauen und eine Person ansprechen. Ansonsten kannst du dich natürlich immer per <a href="mailto:fachschaft@physik.kit.edu">Mail</a> mit Fragen an uns wenden.</p></li>
    </ol>

    </div>

        

    </div>
    <?php include('footer.php'); ?>

