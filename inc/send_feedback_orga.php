<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

define("MAXIMUM_LENGTH", 4000);

// Check if the required parameters are passed
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["maintext"])) {

    $maintext = checkInput($_POST["maintext"]);
    $name = checkInput($_POST["name"]);
    $email = checkInput($_POST["email"]);

    $mail = new PHPMailer(TRUE);
    try {
        $mail->CharSet = 'UTF-8';   
        $mail->setFrom('admins@fachschaft.physik.kit.edu', 'Fachschaft Physik');
        $mail->addAddress('ophasenorga@fachschaft.physik.kit.edu', 'O-Phasen-Orga');
        $mail->Subject = "[OPHASENORGA] Feedback von $name";
        $mail->Body = "text:\n$maintext\n\nname: $name\nemail: $email";

        /* SMTP parameters. */
        $mail->isSMTP();
        $mail->Host = 'smarthost.kit.edu';
        $mail->SMTPAuth = False;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 25;
        $mail->send();
    }
    catch (Exception $e)
    {
        header("Location: ../" . getEnglishPrefix() . "error_feedback.php?error=3 ");
        error_log("PHP-Mailer :".$e->errorMessage());
        exit();
    }
    catch (\Exception $e)
    {
        header("Location: ../" . getEnglishPrefix() . "error_feedback.php?error=3 ");
        error_log("PHP-Mailer :".$e->errorMessage());
        exit();
    }

    if (isset($_POST["email"])) {
      $mail = new PHPMailer(TRUE);
      try {
          $mail->CharSet = 'UTF-8';   
          $mail->setFrom('ophasenorga@fachschaft.physik.kit.edu', 'Fachschaft Physik – O-Phasen-Orga');
          $mail->addAddress($email, $name);
          if (isEnglish()) {
              $mail->Subject = "Thank you for your message!";
              $mail->Body = "We received your message and will reply as soon as possible. (This Email was generated automatically.)\n\nYour data:\n\ntext:\n$maintext\n\nname: $name\nemail: $email";
          } else {
              $mail->Subject = "Danke für Deine Nachricht!";
              $mail->Body = "Wir haben Deine Nachricht erhalten und melden uns sobald wie möglich bei Dir. (Diese Email ist automatisch generiert.)\n\nDeine Angaben:\n\ntext:\n$maintext\n\nname: $name\nemail: $email";
          }

          /* SMTP parameters. */
          $mail->isSMTP();
          $mail->Host = 'smarthost.kit.edu';
          $mail->SMTPAuth = False;
          $mail->SMTPSecure = 'tls';
          $mail->Port = 25;
          $mail->send();
      }
      catch (Exception $e)
      {
          header("Location: ../" . getEnglishPrefix() . "error_feedback.php?error=3 ");
          error_log("PHP-Mailer :".$e->errorMessage());
          exit();
      }
      catch (\Exception $e)
      {
          header("Location: ../" . getEnglishPrefix() . "error_feedback.php?error=3 ");
          error_log("PHP-Mailer :".$e->errorMessage());
          exit();
      }
    }


    // If the query was executed successfully, then refer to the next page and quit the script with exit()
    header("Location: ../" . getEnglishPrefix() . "success_feedback.php");
    exit();

} else {
    // If the required parameters are missing, the redirect the user to the error page
    header("Location: ../" . getEnglishPrefix() . "error_feedback.php");
    error_log("Parameters missing");
    exit();
}

function checkInput($data)
{
    if (strlen((string)$data) > MAXIMUM_LENGTH) {
        header("Location: ../" . getEnglishPrefix() . "error_feedback.php?error=1 ");
        error_log("Passed parameter is longer than the maximum text size.");
        exit();
    }
    return $data;
}

function isEnglish()
{
    return isset($_POST["english_version"]);
}

function getEnglishPrefix()
{
    if (isEnglish()) {
        return "english/";
    } else {
        return "";
    }
}

?>
