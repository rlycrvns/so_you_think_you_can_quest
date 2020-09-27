<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST["agree"])) {
  $recipient = "farscribe@soyouthinkyoucanquest.com";
  $subject = "Application Form";
  $q1 = $_POST["q1"];
  $q2 = $_POST["q2"];
  $q3 = $_POST["q3"];
  $q4 = $_POST["q4"];
  $q5 = $_POST["q5"];
  $q6 = $_POST["q6"];
  $q7 = $_POST["q7"];
  $q8 = $_POST["q8"];
  $q9 = $_POST["q9"];
  $agree = $_POST["agree"];
  $contact = $_POST["contact"];

  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=itf-8";

  $mailBody = "<html>
  <body>
  <h1>Application Submission</h1>
  <hr>
  <p>Question 1:" . $q1 . "</p>
  <p>Question 2:" . $q2 . "</p>
  <p>Question 3:" . $q3 . "</p>
  <p>Question 4:" . $q4 . "</p>
  <p>Question 5:" . $q5 . "</p>
  <p>Question 6:" . $q6 . "</p>
  <p>Question 7:" . $q7 . "</p>
  <p>Question 8:" . $q8 . "</p>
  <p>Question 9:" . $q9 . "</p>
  <p>Agree:" . $agree . "</p>
  <p>Contact:" . $contact . "</p>
  </body>
  </html>";

  $send = mail($recipient, $subject, $mailBody, $headers);

  if ($send) {
    echo "<div class='container application-submitted'>Thank you, Your application has been submitted</div><hr>
    <script>
      setTimeout(function() {
        window.location.href = ' / ';
      }, 8000);
    </script>
    ";
  } else {
    echo "<div class='application-submitted'>Application submission Failed, Please try again</div><hr>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SYTYCQ: Official Application Form</title>
  <meta name="description" content="So You Think You Can Quest: Official Application Form" />
  <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/form-page.css" />
  <script src="https://kit.fontawesome.com/08fc318605.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
  <main>
    <div class="container">
      <div class="row">
        <div class="col mx-auto">
          <h1>So You Think You Can Quest?</h1>
          <p>Official Application Form</p>
          <span>** All fields are required for consideration**</span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <form method="post" name="Application" action="">
            <div class="form-group">
              <label for="q1">Let us cut to the chase, why?</label>
              <textarea class="form-control" id="q1" name="q1" required></textarea>

            </div>
            <div class="form-group">
              <label for="q2">How much experience do you have with tabletop RPG’s?</label>
              <textarea class="form-control" id="q2" name="q2" required></textarea>

            </div>
            <div class="form-group">
              <label for="q3">What is your longest running involvement in a group?</label>
              <textarea class="form-control" id="q3" name="q3" required></textarea>

            </div>
            <div class="form-group">
              <label for="q4">How would you describe yourself in that group dynamic?</label>
              <textarea class="form-control" id="q4" name="q4" required></textarea>

            </div>
            <div class="form-group">
              <label for="q5">Do you have any experience in the role as your groups
                Storyteller or DM? If so please describe?</label>
              <textarea class="form-control" id="q5" name="q5" required></textarea>

            </div>
            <div class="form-group">
              <label for="q6">Do you have any experience in the role as your groups
                Storyteller or DM? If so please describe?</label>
              <textarea class="form-control" id="q6" name="q6" required></textarea>

            </div>
            <div class="form-group">
              <label for="q7">Tell me about the last character death, from either side of
                the screen, and how you handled it graciously?</label>
              <textarea class="form-control" id="q7" name="q7" required></textarea>

            </div>
            <div class="form-group">
              <label for="q8">How much experience do you have with playing them in an
                online setting, or potentially with strangers?</label>
              <textarea class="form-control" id="q8" name="q8" required></textarea>

            </div>
            <div class="form-group">
              <label for="q9">Being aware of the fact that this game is live streamed,
                please describe your Microphone and Webcam setup (links to
                examples help)? **Please note you do not need a webcam to
                play, but those with better quality setups will be given
                priority over those who have lower-end equipment for the sake
                of stream quality</label>
              <textarea class="form-control" id="q9" name="q9" required></textarea>

            </div>
            <div class="form-group">
              <label for="q9">How did you hear about So You Think You Can Quest? And what
                is your primary interest in playing?</label>
              <textarea class="form-control" id="q9" name="q9" required></textarea>

            </div>
            <div class="form-group text-center">
              <label>You have read, understand, and agree to the release and
                disclaimer found here:
                <a href="/wiki/index.php?title=Disclaimer_Page">Disclaimer</a></label>

              <input class="radioBtn" type="radio" id="agree_y" name="agree" value="yes" required />
              <label class="radioLabel" for="agree_y">Yes</label>

              <input class="radioBtn" type="radio" id="agree_n" name="agree" value="no" />
              <label class="radioLabel" for="agree_n">No</label>

              <div class="invalid-feedback">Please choose an option</div>
            </div>
            <div class="form-group">
              <label for="contact">What is the best way to contact you? *please allow some time
                for your application to be processed</label>
              <textarea class="form-control" id="contact" name="contact" required></textarea>

            </div>

            <div class="note">
              ****If you intend on donating to the game for an increased
              chance at being drawn to play, please wait for a Letter of
              Confirmation first so that you know your application has been
              processed and that you both qualify for the Player Roster and
              can be accommodated reasonably to play.****
            </div>

            <input type="submit" class="submitBtn btn btn-primary btn-block" value="submit" />
          </form>
        </div>
      </div>
    </div>
  </main>
</body>

</html>