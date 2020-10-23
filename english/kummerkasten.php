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


      <div class="wide">
        <h2>Problems, questions, feedback, ...</h2>
        <p> You have organizational questions regarding the O-Phase and the <a href="<?= dirname($_SERVER['PHP_SELF'])?>/faq">FAQ</a> couldn't help you further? Then you can send a message to the organization team here.
         </p>
        <a href="<?= dirname($_SERVER['PHP_SELF'])?>/kummerkasten_orga">
        <button style="margin: 30px auto;" class="contact-form-btn center">
         <span>
          Organizational
           <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
         </span>
        </button>
       </a>
       <p>If you have any other problems that you would like to share confidentially, our confidants are at your side and will take care of your concerns.</p>

       <a href="<?= dirname($_SERVER['PHP_SELF'])?>/kummerkasten_privat">
        <button style="margin: 30px auto;" class="contact-form-btn center">
         <span>
          Private
           <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
         </span>
        </button>
       </a>

</div>
</div>
      
<?php include('footer.php'); ?>
