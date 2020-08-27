<?php include('header.php'); ?>

  <div class="container-contact">
    <div class="fullwidth">
    <div class="language"><a href="<?= dirname($_SERVER['PHP_SELF'])?>/../anmeldung">de</a><p>|</p><a href="">en</a></div>
  </div>
    <div class="wrap-contact">

      <?php 
      $title = "Registration";
      include('banner.php'); 
      ?>


      <form class="validate-form" action="<?= dirname($_SERVER['PHP_SELF'])?>/../inc/action_page_en.php" method="post">
        <div class="wide">
          <h2>Which O-Phase type are you?</h2>
          <p class="fragebogen"> This formular serves to get to know you a little bit better in order to assign you to a suitable <a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">group</a>. Especially this year, it will be difficult to get to know your fellow students outside of the O-Phase. In the best case scenario you will find friends and study partners for your whole studies in this special week. The data we take from you is exclusively used to assign you to a group and is treated confidentially and deleted timely. If you do not want to answer the questions because they are for example to personally for you, you do not have to answer them and you can just leave them empty. <br> <br>
          Several answers are possible.

        </div>


        <div class="wide">

          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">For me the perfect Friday night is ... :</span>
          <label class="mycheckbox">meeting friends in the park
            <input type="checkbox" name="freitagabend[]" value="park">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">a night of gaming
            <input type="checkbox" name="freitagabend[]" value="zocken">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">playing board games
            <input type="checkbox" name="freitagabend[]" value="spieleabend">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">a relaxed evening at home
            <input type="checkbox" name="freitagabend[]" value="allein">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">go to the cinema/theatre/ concert
            <input type="checkbox" name="freitagabend[]" value="kultur">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> join a bar tour
            <input type="checkbox" name="freitagabend[]" value="kneipentour">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">party at the club
            <input type="checkbox" name="freitagabend[]" value="club">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox">a party with friends
            <input type="checkbox" name="freitagabend[]" value="party">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"><input type="checkbox" name="freitagabend[]" value="anderes">
            <span class="checkmark"></span> <input class="input alttext" type="text" name="altfreitagabend"  placeholder="other" >
          </label>
          <span class="focus-input"></span>
          
          </div>

          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">How do you solve a difficult task?</span>
          <label class="mycheckbox"> it will work out somehow
            <input type="checkbox" name="problem[]" value="irgendwie">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> I try my best, of course
            <input type="checkbox" name="problem[]" value="ehrgeizig">
            <span class="checkmark"></span>
          </label>
                    <label class="mycheckbox"> I proceed systematically
            <input type="checkbox" name="problem[]" value="systematisch">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> I ask for help
            <input type="checkbox" name="problem[]" value="hilfe">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> I just ignore it
            <input type="checkbox" name="problem[]" value="ignorieren">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"><input type="checkbox" name="problem[]" value="anderes">
            <span class="checkmark"></span> <input class="input" type="text" name="altproblem"  placeholder="other" >
          </label>
          <span class="focus-input"></span>
          </div>

          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">At which time of the day are you most productive?</span>
          <label class="mycheckbox"> in the morning
            <input type="checkbox" name="produktiv[]" value="morgens">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> in the noon
            <input type="checkbox" name="produktiv[]" value="mittags">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> in the afternoon
            <input type="checkbox" name="produktiv[]" value="nachmittags">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> in the evening/ at night
            <input type="checkbox" name="produktiv[]" value="abends">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> no difference
            <input type="checkbox" name="produktiv[]" value="egal">
            <span class="checkmark"></span>
          </label>
          <span class="focus-input"></span>
          </div>

          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">Have you finished school this year? If not, what have you done in your gap time?</span>
          <label class="mycheckbox"> finished school this year
            <input type="checkbox" name="gapyear[]" value="abidirekt">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> being abroad
            <input type="checkbox" name="gapyear[]" value="ausland">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> working/ internship
            <input type="checkbox" name="gapyear[]" value="jobben">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> another study
            <input type="checkbox" name="gapyear[]" value="ausbildung">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> social engagement
            <input type="checkbox" name="gapyear[]" value="fsj">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"><input type="checkbox" name="gapyear[]" value="anderes">
            <span class="checkmark"></span> <input class="input" type="text" name="altgapyear"  placeholder="other" >
          </label>
          <span class="focus-input"></span>
          </div>

          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">Previous involvement in voluntary work or organizations and if so where?</span>
          <label class="mycheckbox"> not really
            <input type="checkbox" name="engagement[]" value="keins">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> school
            <input type="checkbox" name="engagement[]" value="Schule">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> sports club
            <input type="checkbox" name="engagement[]" value="verein">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> social/ political organisation
            <input type="checkbox" name="engagement[]" value="soziales">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> local community/ church
            <input type="checkbox" name="engagement[]" value="gemeinde">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"> firefighters & co
            <input type="checkbox" name="engagement[]" value="feuerwehr">
            <span class="checkmark"></span>
          </label>
          <label class="mycheckbox"><input type="checkbox" name="engagement[]" value="anderes">
            <span class="checkmark"></span> <input class="input" type="text" name="altengagement"  placeholder="other" >
          </label>
          <span class="focus-input"></span>
          </div>

           <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">What is your motivation studying physics/ geophysics/ meteorology?</span>
          <textarea class="input" name="warumphysik" placeholder="(e.g. trying to understand the world, seeking the challenge,...)"></textarea>
          <span class="focus-input"></span>
          </div>
          <div class="wrap-input" >
          <span style="display: block; padding-bottom: 15px;">What are your expectations and hopes regarding the O-Phase?</span>
          <textarea class="input" name="wuensche" placeholder="(e.g. find friends, informations, party...)"></textarea>
          <span class="focus-input"></span>
          </div>

        </div>



        <div class="wide">
          <h2>Personal Data</h2>
           <p> On the one hand, this data is also used to find a suitable group for you and on the other hand we need to take this data because of the <a href="https://www.baden-wuerttemberg.de/fileadmin/redaktion/m-sm/intern/downloads/Downloads_Gesundheitsschutz/2020-07-28_CoronaVO_konsolidierte_Fassung_ab_200806_en.pdf" target="_blank">Covid-19 regulations</a> (see also §6). The personal data will be treated confidentially and deleted timely.</p>
        </div>
        
        <div class="contact-form ">
        <div class="wrap-input validate-input" data-validate="missing">
          <span class="label-input">First name:</span>
          <input class="input" type="text" name="vname"  placeholder="Please insert your first name" >
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input" data-validate="missing">
          <span class="label-input">Family name:</span>
          <input class="input" type="text" name="nname"  placeholder="Please insert your family name" >
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input" data-validate = "wrong format">
          <span class="label-input">Email:</span>
          <input class="input" type="text" name="email" placeholder="Please insert your email adress">
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input" data-validate = "wrong format">
          <span class="label-input">Phone number:</span>
          <input class="input" type="phone" name="phone" placeholder="Please insert your phone number">
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input validate-input" data-validate = "missing">
          <span class="label-input">age (years):</span>
          <input class="input" type="number" name="age" placeholder="Please insert your age">
          <span class="focus-input"></span>
        </div>
    

        <div class="wrap-input" >
          <span class="label-input">Subject:</span>
          <div class="question-answer question input validate-input " data-validate = "missing" >
            <input type="radio" class="input" value="physik" id="physik" name="studiengang"/>
            <label for="physik" class="radio"><span>physics</span></label>
            <input type="radio" class="input" value="geo" id="geo" name="studiengang" />
            <label for="geo" class="radio"><span>geophysics</span></label>
            <input type="radio" class="input" value="meteo" id="meteo" name="studiengang" />
            <label for="meteo" class="radio"><span>meteorology</span></label>
            <input type="radio" class="input" value="lehramt" id="lehramt" name="studiengang" />
            <label for="lehramt" class="radio"><span>teaching</span></label>
            
          </div>
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input" >
          <span class="label-input">BSc/MSc:</span>
          <div class="question-answer question input validate-input " data-validate = "missing" >
            <input type="radio" class="input" value="bachelor" id="bachelor" name="bama"/>
            <label for="bachelor" class="radio"><span>Bachelor</span></label>
            <input type="radio" class="input" value="master" id="master" name="bama" />
            <label for="master" class="radio"><span>Master</span></label>
           </div>
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input" >
          <span class="label-input">Nationality:</span>
          <div class="question-answer question input validate-input " data-validate = "missing" >
            <input type="radio" class="input" value="international" id="international" name="international"/>
            <label for="international" class="radio"><span>international student</span></label>
            <input type="radio" class="input" value="national" id="national" name="international" />
            <label for="national" class="radio"><span>german citizen</span></label>
          </div>
          <span class="focus-input"></span>
        </div>

        <div class="wrap-input" >
          <span class="label-input">I participate:</span>
          <div class="question-answer question input validate-input " data-validate = "missing" >
            <input type="radio" class="input" value="offline" id="offline" name="teilnahme"/>
            <label for="offline" class="radio"><span>in person & digitally</span></label>
            <input type="radio" class="input" value="online" id="online" name="teilnahme" />
            <label for="online" class="radio"><span>only digitally</span></label>
            <input type="radio" class="input" value="unklar" id="unklar" name="teilnahme" />
            <label for="unklar" class="radio"><span>I don't know</span></label>
          </div>
          <span class="focus-input"></span>
        </div>
        

        
        <div class="wrap-input" >
          <span class="label-input">Comments:</span>
          <textarea class="input" name="message" placeholder="(e.g. desired partner, impairments, other informations...)" rows="2"></textarea>
          <span class="focus-input"></span>
        </div>

        </div>
        <div class="wide-check">
          <div class="question-answer question input validate-input " data-validate = "missing" >
            <input type="radio" class="input" value="datenschutz" id="datenschutz" name="datenschutz"/>
            <label for="datenschutz" class="check"><span class="check">Herewith, I confirm the correctness of my entered data and I confirm the storing of those (also see <a href="https://fachschaft.physik.kit.edu/drupal/content/datenschutzerklärung">privacy informations</a>)</span></label>
          </div>
          <span class="focus-input"></span>
        

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

