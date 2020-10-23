<?php include('header.php'); ?>

  <div class="container-contact">
    <div class="fullwidth">
      <div class="language"><a href="<?= dirname($_SERVER['PHP_SELF'])?>/../kummerkasten_private">de</a><p>|</p><a href="">en</a></div>
    </div>
    <div class="wrap-contact">

      <?php 
      $title = "Private Problems";
      include('banner.php'); 
      ?>


        <form class="validate-form" action="<?= dirname($_SERVER['PHP_SELF'])?>/../inc/send_feedback.php" method="post">
        <div class="wide">
          <h2>Private problems and questions</h2>
          <p>Do you have a personal problems or feel uncomfortable for any reason about the O-Phase and want to confide in someone? Then you can contact our confidants here. This can also be done anonymously if you prefer. In addition, our confidants will introduce themselves personally below so that you know who you are actually dealing with.
          </p>
        </div>



        <div class="wide">
          <div class="wrap-input">
          <div style="width: 100%;"><p class="right"></p></div>
          <span class="checkbox-title">Your Message:</span>
          <textarea class="input" name="maintext" placeholder="What is on your mind?"></textarea>
          <span class="focus-input"></span>
          </div>
        </div>

      <div class="wide">
         <p>If you want us to get back to you, we need either an email address or a mobile phone number from you, but you do not have to provide any data. Of course, we treat your data anonymously and discreetly.</p>
      </div>
        

        <div class="contact-form ">

        <div class="wrap-input">
          <span class="label-input">Name:</span>
          <input class="input" type="text" name="name"  placeholder="Please insert your name" >
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input">
          <span class="label-input">Email:</span>
          <input class="input" type="text" name="email" placeholder="Please insert your email">
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input">
          <span class="label-input">Phone:</span>
          <input class="input" type="phone" name="phone" placeholder="Please insert your phone number">
          <span class="focus-input"></span>
        </div>
        

        </div>
        <div class="wide-check">
          <div class="question-answer question input validate-input " data-validate = "missing" >
            <input type="radio" class="input" value="datenschutz" id="datenschutz" name="datenschutz"/>
            <label for="datenschutz" class="check"><span class="check">Herewith, I confirm the correctness of my entered data and I confirm the storing of those (also see <a href="https://fachschaft.physik.kit.edu/drupal/content/datenschutzerklärung">privacy informations</a>)</span></label>
          </div>
          <span class="focus-input"></span>
        
        <input type="hidden" id="english_version" name="english_version" value="true" />

        <div class="container-contact-form-btn">
          <button class="contact-form-btn">
            <span>
              Submit
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>
        </div>
        </form>






        <div class="wide" style="margin-top: 50px;">
          <h3 class="fragebogen">Our confidants are always there for you:</h3> 
          <table style="width:100%; margin-top: 50px;">
            <tr>
              <td class="left-td">
                <img src="<?= dirname($_SERVER['PHP_SELF'])?>/../images/alina.jpg"></img>
              </td>
              <td class="right-td">
                  <p>
                    Hello,

                    My name is Alina and I'm already in my 9th semester studying physics.
                    After graduating from school, I first took a year off to work, do an internship and go on a few trips.
                    After that, I wasn't really sure whether physics was right for me either. I now know, however, that it was a good decision.
                    The way to this point was connected with a lot of doubts for me and I had to ask myself more than once whether the stress is worth it in the end (and it is xD).
                    In the spring, after my final oral exam and the bachelor thesis, I will also start my master’s degree.
                    When I'm not busy with physics, I am involved in the student council, ride a racing bike or help with food sharing.
                    I also love good food and wine and I like to cook / bake with people who I like. Otherwise I read a lot and philosophize with my fellow human beings about the world.

                    So if you have questions and problems, you can contact us,
                    I love to help.

                    Greetings and see you then :)
                  </p>
              </td>
            </tr>
            <tr>
              <td class="left-td">
                <img src="<?= dirname($_SERVER['PHP_SELF'])?>/../images/jonas.jpg"></img>
              </td>
              <td class="right-td">
                  <p>
                   Hello,

                     I'm Jonas and I'm in my 13th semester, so I will soon be awarded the "Old Sack" quality rating. I am currently working on my master's thesis in the field of semiconductor optics.
                     It was a while ago, but through my time as part of the student council, I got to know many facets of the course: beautiful exams with friends in the castle park, but also defeats and stress when working on exercise sheets.
                     I try to have an open ear for all your problems, worries or whatever you want to call them.
                     In this respect: my door, virtual or real, is always open to you, I look forward to seeing you.
                  </p>
              </td>
            </tr>
            <tr>
              <td class="left-td">
                <img src="<?= dirname($_SERVER['PHP_SELF'])?>/../images/mareike.jpg"></img>
              </td>
              <td class="right-td">
                  <p>
                    Moin moin!
                    I am Mareike.
                    A biscuit lover with lactose intolerance, dropout and doubt master, a stubborn and nonsense head and avowed coffee addict. Paulaner Spezi is a very popular alternative.

                    Not everything went smoothly for me during my studies. For example, I remember starting out and thinking: I just don't pack physics.
                    But I'm still there! The bachelor thesis has now been successfully submitted and only two exams to complete!

                    In addition to physics, you can often find me in the bouldering hall, drawing in all kinds of places or in front of the PS4.

                    I know how I was in my early days and I am happy to have met a few people from higher semesters to help me find my way.
                    If you don't have this luxury, I'll be happy to answer all of your questions.
                    Sometimes you don't have any explicit questions, but something preoccupies or burdens you. If so, then I'll be happy to listen to you if that's what you want. Feel free to just write to me. No matter when, no matter how! I will answer you as soon as I can.

                    But enough of the serious words!
                    I wish you a good start to your physics studies and see you soon!
              </td>
            </tr>
          </table>
        </div>
        </div>
      
      
<?php include('footer.php'); ?>
