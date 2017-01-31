<?php
$to = filter_var(trim($_POST['contactemail']), FILTER_SANITIZE_EMAIL);

$link = "https://calendly.com/matt-cybrid/15min/";

$subject = "You need a clone army! We got clone armies!!!";

// message
$txt = "Hi!\n\n";
$txt .= "This is Matt with Cybrid Industries.\n\n";
$txt .= "How many clone armies can I put you down for!?!\n\n";
$txt .= "Just kidding, let's set up an exploratory meeting to make sure this is right for you :)\n\n";
$txt .= "Can you do me a favor and click this link to schedule a time to talk?\n";
$txt .= $link. "\n\n";
$txt .= "Talk to you soon,\n";
$txt .= "Matt\n";

$mailheader = "From: Matt Brody <matt@cybridindustries.com> \r\n";
$mailheader .= "Cc: kristina@cybridindustries.com \r\n";
$mailheader .= "Bcc: kristina.traeger@gmail.com \r\n";
mail($to, $subject, $txt, $mailheader, "-fmatt@cybridindustries.com") or die("Error!");
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . 'index.html';
  header('Location: ' . $home_url);
?>
