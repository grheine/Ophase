<?php include('header.php'); ?>

<div class="container-contact">
<div class="fullwidth">
        <div class="language"><a href="<?= dirname($_SERVER['PHP_SELF'])?>/../faq">de</a><p>|</p><a href="">en</a></div>
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
    <p id="toc-header">Contents</p>
    <ul>
    '.$heads.'
    </ul>
    </div>';
    echo $contents;
    }
 ?>
    <?php TableOfContents(3); ?>
    <h2><a name="whatisophase"></a>What is the O-Phase?</h2>
    <p>The orientation phase - O-phase for short - is our information event, which should help you to find your way around the university better. After the welcome ceremony, you will get to know everything you need to know about your studies, the campus, Karlsruhe and you will meet your fellow students in small groups.</p>
    <h3><a name="whatwillilearn"></a>What will I learn in the O-Phase?</h3>
    <p>Of course we don't want to reveal everything in advance, that would be boring. But we can tell you a few things. We answer questions like "What lectures do I have to take? How do I put my timetable together? How do I find my way around the KIT's jungle of websites? Where can I get the best lunch? Where can I print cheaply? What can I do at the university besides studying? " and many more. </p>
    <h3><a name="smallgroups"></a>What about the small groups?</h3>
    <p>Your O-phase group is a small group of up to 15 first-year students that is guided by experienced students (tutors) from higher semesters. You spend most of the time in this group and especially now under Corona conditions the O-phase takes place exclusively in these small groups. I.e. you will have no physical contact with other O-Phase groups. During the group times, your tutors will show you, for example, how to borrow a book from the library or where to have lunch and of course much more.</p>
    <h3><a name="notmiss"></a>What shouldn't I miss?</h3>
    <p>All :)
    Of course, we recommend that you take part in the entire program. If you can't do that, you should definitely take part in the events regarding examination regulations and minor subject presentation. If you miss these events, you can contact us via <a href="mailto:fachschaft@physik.kit.edu"> mail</a> so that you can still receive the important information.</p>

    <h2><a name="covid19"></a>Covid-19</h2>
    <h3><a name="ophasepossible"></a>O-Phase – is this even possible?</h3>
    <p>Yes! In any case, we try to make the O-Phase as normal as possible. This means that you spend the entire week with your O-Phase group, guided by 2-3 tutors from higher semesters. Of course, we have to monitor the current infection rate and the legal requirements, but we initially plan with group sizes of up to 15 people. In order for you and your fellow students to have the best possible match, it is important that you take the small personality test at the beginning of the registration form. In this way we can try to divide the groups as homogeneously as possible in terms of wishes and interests.</p>
    <h3><a name="whyinperson"></a>Why should I attend the O-Phase in person? </h3>
    <p>In short, studying physics is as good as impossible to master on your own. Especially with the first exercise sheets, you will find that these are simply not solvable on your own - no matter how good you were in school. Physics and physical thinking thrive on the lively exchange of ideas and let's be honest, solving difficult problems is just a lot more fun together. It is therefore very important that you get to know your fellow students at the beginning of your studies and be able to find a study group. And that's what the O-Phase is for. With a little luck you will not only find study partners during this legendary week, but possibly even friends for life.</p>
    <h3><a name="onlydigital"></a> I cannot participate in person - what now? </h3>
    <p> That's no problem at all! The important program items are all streamed digitally via zoom. That means you can comfortably receive the important informations sitting on your sofa. We also try to digitally implement many evening program points. In addition, we plan with O-Phase groups that take place purely digitally. </p>

    <h2><a name="beforestudies"></a> Before your studies </h2>
    <h3><a name="noappartment"></a> Help, I don't have an apartment yet! 1 !! </h3>
    <p> Since the O-Phase is a lot more fun if you don't have to go home in the early evening, we try to find a place to sleep for you. Contact us or your tutors on Monday. If you still do not have an apartment at the start of the lectures, the AStA will try to provide an emergency accommodation. To do this, contact <a href="mailto:soziales@asta.kit.edu"> soziales@asta.kit.edu </a> </p>
    <h3><a name="application"></a> How do I have to apply for the degree? </h3>
    <p> The easiest way is the <a target="_blank" href="https://www.sle.kit.edu/english/vorstudium/88.php"> online application </a>, which is possible for all subjects. You should carefully read the information on the Student Office page. If you have any questions, there is also the KIT applicant hotline: 0721 608 82222. </p>
    <h3><a name="prepare"></a> How else can I prepare for my studies? </h3>
    <p> It's best to enjoy your free time and do what you enjoy. If you want to brush up on your mathematic skills or prepare yourself before your studies, there are also <a target="_blank" href="https://www.mint-kolleg.kit.edu/Vorkurse.php"> preliminary courses </a> from the MINT college. </p>
    <h3><a name="othersubject"></a> I want to study mathematics / computer science / electronics in addition to my degree. Is that possible? </h3>
    <p> It works theoretically. But - better not think about it. The normal student usually has enough to contend with one subject of study. Getting started with your studies should get your full attention. If in doubt, you can still decide after the first semester to study something else in parallel. In addition, you can already get a good insight into another subject with the minor in the Bachelor's degree. If you have too little to do, you can also kill your time in other ways - e.g. with student council work. :) </p>
    <h2><a name="technical"></a> Technical Stuff</h2>
    <h3><a name="internetaccess"></a> Where can I get internet access / accounts / etc.? </h3>
    <p> You should have received a letter with your SCC account (u-code + password) when you enrolled. You can use this u-code to log in to the <a target="_blank" href="https://www.scc.kit.edu/dienste/wlan.php"> wifi </a>,
    in the <a target="_blank" href="https://campus.studium.kit.edu"> student portal </a>
    as well as the <a target="_blank" href="https://www.scc.kit.edu/dienste/7386.php"> KIT web server </a>.
    Please contact the study office or <a target="_blank" href="https://scc.kit.edu"> SCC </a> if anything did not work. </p>
    <h3><a name="stapler"></a> Do you have a stapler? </h3>
    <p> Yes, we have a stapler. </p>
    <h2><a name="duringstudies"></a> During your studies </h2>
    <h3><a name="jobs"></a> What about jobs / internships? </h3>
    <p> If you need the money or just want to get some work experience, there are tons of part-time jobs here - both at and outside of university. However, it is a good idea to take the major math and orientation exams before starting a job. <br>
    Internships are not included in the physics course. An internship in the 5th semester of the geophysics course is planned.
    </p>
    <h3><a name="abroad"></a> Can I go abroad? </h3>
    <p> Yes. That is even promoted quite well: For stays abroad within Europe there is the <a target="_blank" href="http://www.physik.kit.edu/Studium/Austauschprogramme/Erasmus_deutsch/"> Erasmus program </a>. In addition, the faculty offers a <a target="_blank" href="http://www.physik.kit.edu/Studium/Austauschprogramme/Doppelmaster_outgoer/"> double master program </a> with the University of Grenoble Alpes. As a Bachelor, it is common to do a stay abroad between the 4th and 6th semester. As a rule of thumb: preparations should be started about 1 year in advance. As a master’s degree, it is best to take care of it before or at the very beginning of your studies. </p>

    <h2><a name="karlsruhe"></a> Karlsruhe </h2>
    <h3><a name="kit"></a> How is the KIT in general? </h3>
    <p> The KIT is a campus university, i.e. (almost) all buildings are on a single site. The campus is centrally located between the castle park and the pedestrian zone, i.e. right in the heart of the city, and has very good connections to public transport. If you like nature, it is a good idea to take small breaks to take a walk in the Hardtwald, which is directly to the north. But otherwise, the campus is very green and offers enough shady spots to relax. </p>
    <h3><a name="eveninginka"></a> Is it good to go out in the evening in Karlsruhe? </h3>
    <p> In Karlsruhe there are many nice pubs (many with beer gardens in summer), a few clubs, good cinemas and in summer the palace garden is a nice place to meet friends. So there should be something for everyone. The trains also run at night on weekends, unfortunately only until ~ 01:00 on weekdays. You can find more information <a target="_blank" href="https://www.kvv.de/fahrplan/sonderfahrten/nightliner.html"> here </a>. </p>
    <h3><a name="livinginka"></a> How do students live in Karlsruhe? </h3>
    <p> Most students live in shared flats (WGs) or in dormitories. There are a few of them in Karlsruhe. The Studierendenwerk offers most of the dormitories; but some dormitories are also self-governed. Particularly noteworthy is the <a target="_blank" href="https://www.hadiko.de"> HaDiKo </a> - the largest self-managed student residence in Germany. Both dormitories and private apartments are usually no more than ten minutes (by bike) from the university. The typical student residential areas are Oststadt, Innenstadt and Südstadt. </p>
    <h3><a name="flatfinding"></a> I am looking for a (commission-free) apartment or a flat share, where is the best place to look? </h3>
    <p> The Studierendenwerk has a <a target="_blank" href="http://www.sw-ka.de/de/wohnen/zimmervermittlung"> housing exchange platform </a>, which is updated regularly. Here you will find new flat share and apartment offers. Under <a target="_blank" href="https://www.wg-gesucht.de"> wg-sucht </a> there are also new offers almost daily. And also on the <a target = "_ blank" href = "https://kit.edu/markt"> KIT classifieds market </a> you can have luck. It can also be useful to look through the advertisements in local newspapers (e.g. BNN) or even to advertise yourself. If you are already in Karlsruhe to look at apartments, you can stop by the notice board in the cafeteria, there are often ads for shared flats and apartments. </p>
    <p> In addition, the <a target="_blank" href="https://ka.stadtwiki.net/Studentenwohnung"> Stadtwiki </a> also lists all dormitories and contact points for private renting. </p>
    <h3><a name="stayathome"></a> I live nearby, can I stay at home? </h3>
    <p> You can - but is that smart? When you start studying, you should actually stand on your own two feet. In addition, you only get to know the people you study with when you are really there and don't have to leave when the last train leaves. </p>
    <h3><a name="kvvticket"></a> Can I buy a student ticket for the KVV before I start studying? </h3>
    <p> You can buy your student ticket as soon as you have your <a target="_blank" href="https://campus.studium.kit.edu/reports/studyreports.php"> study / KVV certificate </a> in the student portal - i.e. as soon as you are enrolled. If you start studying physics, it even makes sense that you buy your ticket before the start of the lecture, because you will probably be in Karlsruhe after the preliminary math course. From 6:00 p.m. every day, on weekends and on public holidays, you can use the KVV free of charge with the printed KVV certificate and your student ID. </p>
    
  <h2><a name="notfound"></a>You didn't find your question? </h2>
    <p> Then you have three options to find out more. It's best to go through them in chronological order: </p>
    <ol>
    <li> <p> In our <a target="_blank" href="https://fachschaft.physik.kit.edu/drupal/sites/default/files/fsinfos/erstiinfo_1.pdf"> first-semester info </a> there are many answers to the above questions and much more. There you will find more detailed explanations about the university, the physics / geophysics / meteorology / teaching degree and life in Karlsruhe. The first-semester info is a product of many, many semester and life experiences. So you should really take it to heart. </p> </li>
    <li> <p> Your O-phase tutors and the organization - The O-phase is there to inform you about the course. So take the opportunity and ask everything that's on your heart. </p> </li>
    <li> <p> The <a target="_blank" href="https://fachschaft.physik.kit.edu/drupal/"> Fachschaft </a>! Your student representatives are there to support you through your studies. It is your friend and helper and is happy to answer questions. Outside of Corona, you are welcome to drop by at any time in the so-called swamp or the office and speak to a person. Otherwise you can of course always contact us via <a href="mailto:fachschaft@physik.kit.edu"> mail </a> with questions. </p> </li>
    </ol>

    </div>

        

    </div>
    <?php include('footer.php'); ?>

