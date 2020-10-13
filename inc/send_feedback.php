<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

define("MAXIMUM_LENGTH", 4000);

// Check if the required parameters are passed
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["maintext"])) {

    // Define variables and set to empty values
    //$text = $name = $email = $phone = "";

    $maintext = checkInput($_POST["maintext"]);
    $name = checkInput($_POST["name"]);
    $email = checkInput($_POST["email"]);
    $phone = checkInput($_POST["phone"]);

    $mail = new PHPMailer(TRUE);
    try {
       $mail->CharSet = 'UTF-8';   
       $mail->setFrom('admins@fachschaft.physik.kit.edu', 'Fachschaft Physik');
       $mail->addAddress('vertrauenspersonen-ophase@fachschaft.physik.kit.edu', 'Vertrauenspersonen O-Phase');
       $mail->Subject = "Feedback von $name";
       $mail->Body = "text:\n$maintext\n\nname: $name\nemail: $email\nhandy: $phone";

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
        header("Location: ../" . getEnglishPrefix() . "error.php?error=3 ");
        error_log("PHP-Mailer :".$e->errorMessage());
        exit();
    }
    catch (\Exception $e)
    {
        header("Location: ../" . getEnglishPrefix() . "error.php?error=3 ");
        error_log("PHP-Mailer :".$e->errorMessage());
        exit();
    }

    if (isset($_POST["email"])) {
      $mail = new PHPMailer(TRUE);
      try {
         $mail->CharSet = 'UTF-8';   
         $mail->setFrom('vertrauenspersonen-ophase@fachschaft.physik.kit.edu', 'Fachschaft Physik');
         $mail->addAddress($email, $name);
         $mail->Subject = "Danke für Deine Nachricht!";
         $mail->Body = "Wir haben Deine Nachricht erhalten und melden uns sobald wie möglich bei Dir. (Diese Email ist automatisch generiert.)\n\nDeine Angaben:\n\ntext:\n$maintext\n\nname: $name\nemail: $email\nhandy: $phone";

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
          header("Location: ../" . getEnglishPrefix() . "error.php?error=3 ");
          error_log("PHP-Mailer :".$e->errorMessage());
          exit();
      }
      catch (\Exception $e)
      {
          header("Location: ../" . getEnglishPrefix() . "error.php?error=3 ");
          error_log("PHP-Mailer :".$e->errorMessage());
          exit();
      }
    }


    // If the query was executed successfully, then refer to the next page and quit the script with exit()
    header("Location: ../" . getEnglishPrefix() . "success.php");
    exit();

} else {
    // If the required parameters are missing, the redirect the user to the error page
    header("Location: ../" . getEnglishPrefix() . "error.php");
    error_log("Parameters missing");
    exit();
}

function checkInput($data)
{
    if (strlen((string)$data) > MAXIMUM_LENGTH) {
        header("Location: ../" . getEnglishPrefix() . "error.php?error=1 ");
        error_log("Passed parameter is longer than the maximum text size.");
        exit();
    }
    return $data;
}

function checkAge($age)
{
    if (is_numeric($age)) {
        $age = (int)$age;

        if ($age < 0) {
            header("Location: ../" . getEnglishPrefix() . "error.php?error=2 ");
            error_log("Passed age is negative.");
            exit();
        }

        return $age;

    } else {
        header("Location: ../" . getEnglishPrefix() . "error.php?error=2 ");
        error_log("Passed age is not a number.");
        exit();
    }
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
