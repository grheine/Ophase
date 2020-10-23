<?php include('header.php'); ?>

  <div class="container-contact">
    <div class="fullwidth">
    <div class="language"><a href="<?= dirname($_SERVER['PHP_SELF'])?>/../kummerkasten">de</a><p>|</p><a href="">en</a></div>
    </div>
    <div class="wrap-contact">

      <?php 
      $title = "Leave Feedback";
      include('banner.php'); 
      ?>


      <form class="validate-form" action="<?= dirname($_SERVER['PHP_SELF'])?>/../inc/send_feedback.php" method="post">
        <div class="wide">
          <h2>Did you run into problems or do you have other feedback for our O-Phase?</h2>
          <p class="fragebogen">Miau!</p>
        </div>


        <div class="wide">
          <div class="wrap-input validate-input" data-validate="fehlt">
          <div style="width: 100%;"><p class="right">* mandatory</p></div>
          <span class="checkbox-title">Main Text*</span>
          <textarea class="input" name="maintext" placeholder="What's on your mind?"></textarea>
          <span class="focus-input"></span>
          </div>
        </div>

        <div class="wide">
          <h2>Information</h2>
           <p>If you want us to reply to your feedback, we need either an email address or a cellphone number from you, but you don't have to give us any of your data. Of course, we handle your data anonymously and discretely.</p>
        </div>
        

        <div class="contact-form ">

        <div class="wrap-input">
          <span class="label-input">Name:</span>
          <input class="input" type="text" name="name"  placeholder="Please enter your name" >
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input">
          <span class="label-input">Email:</span>
          <input class="input" type="text" name="email" placeholder="Please enter your email address">
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input">
          <span class="label-input">Cellphone Number:</span>
          <input class="input" type="phone" name="phone" placeholder="Please enter your cellphone number">
          <span class="focus-input"></span>
        </div>
        

        </div>
        <div class="wide-check">
          <div class="question-answer question input validate-input " data-validate = "fehlt" >
            <input type="radio" class="input" value="datenschutz" id="datenschutz" name="datenschutz"/>
            <label for="datenschutz" class="check"><span class="check">Hereby, I confirm the storage of my entered data (also see <a href="https://fachschaft.physik.kit.edu/drupal/content/datenschutzerklärung">our privacy information</a>).</span></label>
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

        </div>
      </form>
      
<?php include('footer.php'); ?>
