<?php include('header.php'); ?>

  <div class="container-contact">
    <div class="fullwidth">
      <div class="language"><a href="<?= dirname($_SERVER['PHP_SELF'])?>/../kummerkasten_orga">de</a><p>|</p><a href="">en</a></div>
    </div>
    <div class="wrap-contact">

      <?php 
      $title = "Organizational Questions";
      include('banner.php'); 
      ?>


      <form class="validate-form" action="<?= dirname($_SERVER['PHP_SELF'])?>/../inc/send_feedback_orga.php" method="post">
        <div class="wide">

          <h2> Organizational questions and feedback </h2>
           <p> You have organizational questions regarding the O-phase and the <a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">FAQ</a> couldn't help you further? Then you can send a message to the organization here. <br>
           If you have any other problems that you would like to share confidentially, our confidants are at your side and will take care of your concerns. Just click <a href="<?= dirname($_SERVER['PHP_SELF'])?>/kummerkasten_privat">here</a> and describe your request.
          </p>
        </div>

        

        <div class="contact-form ">

        <div class="wrap-input validate-input" data-validate="missing">
          <span class="label-input">Message:</span>
          <textarea class="input" name="maintext" placeholder="Your message to the team"></textarea>
          <span class="focus-input"></span>
        </div>  

        <div class="wrap-input validate-input" data-validate="missing">
          <span class="label-input">Name:</span>
          <input class="input" type="text" name="name"  placeholder="Please insert your name" >
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input" data-validate="missing">
          <span class="label-input">Email:</span>
          <input class="input" type="text" name="email" placeholder="Please insert your email">
          <span class="focus-input"></span>
        </div>


        </div>
        <div class="wide-check">
          <div class="question-answer question input validate-input " data-validate = "missing" >
            <input type="radio" class="input" value="datenschutz" id="datenschutz" name="datenschutz"/>
            <label for="datenschutz" class="check"><span class="check"> Herewith, I confirm the correctness of my entered data and I confirm the storing of those (also see <a href="https://fachschaft.physik.kit.edu/drupal/content/datenschutzerklärung">privacy informations</a>)</span></label>
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


       
      
      
<?php include('footer.php'); ?>
