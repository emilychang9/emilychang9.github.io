<?php

if($_POST["submit"]) {
    $recipient="emilycc2000@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Contact Information</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Arsenal:wght@400;700&display=swap" rel="stylesheet">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="topnav">
      <div class="topnav-right">
        <a href="index.html">Home</a>
        <a href="about.html">About Me</a>
        <a href="projects.html">Projects</a>
        <a class= "active" href="contact.php">Contact</a>
      </div>
    </div>

    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="index.html">Home</a>
      <a href="about.html">About Me</a>
      <a href="projects.html">Projects</a>
      <a class="active" href="contact.php">Contact</a>
    </div>

    <div style="padding-bottom: 50px">
      <button class="openbtn" onclick="openNav()">&#9776; Menu</button>
    </div>

    <h1>Contact Information</h1>
    <div class="description">
      <p>Feel free to reach out to me on <a href="www.linkedin.com/in/emily-chang-22b683186">LinkedIn</a> or via email below.</p>
    </div>

    <!-- EMAIL FORM -->
    <?=$thankYou ?>
    <div class="container">
      <form method="post" action="contact.php">
        <div>
          <label><b>Name:</b></label>
          <input name="sender">
        </div>
        <div>
          <label><b>Email address:</b></label>
          <input name="senderEmail">
        </div>

        <div>
          <label><b>Message:</b></label>
        </div>
        <div>
          <textarea rows="5" cols="35" name="message"></textarea>
        </div>
          <input id="submit-btn" type="submit" name="submit">
      </form>
    </div>
    <!-- END EMAIL FORM -->

    <hr>
    <footer>
      <p><b>School&nbsp;email:</b>&nbsp;echang9@cs.washington.edu | <b>Personal&nbsp;email&nbsp;(preferred):</b>&nbsp;emilycc2000@gmail.com | <a href="www.linkedin.com/in/emily-chang-22b683186">LinkedIn</a></p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>