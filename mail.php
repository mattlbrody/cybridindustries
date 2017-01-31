<?php
// send reply to
$to = filter_var(trim($_POST['contactemail']), FILTER_SANITIZE_EMAIL);

// get prospect name from email address
$name = substr($to, 0, strrpos($to, '@'));
// capitalize
$name = ucfirst($name);

// link to schedule a call
$link = "https://calendly.com/matt-cybrid/15min/";

$phone = "925.876.3287";

// subject of reply email
$subject = "You need a clone army! We got clone armies!!!";

// message
$txt = "Hey " .$name. ",\n\n";
$txt .= "This is Matt with Cybrid Industries.\n\n";
$txt .= "How many clone armies can I put you down for!?!\n\n";
$txt .= "Just kidding, let's set up an exploratory meeting to make sure this is right for you :)\n\n";
$txt .= "Can you do me a favor and click this link to schedule a time to talk?\n";
$txt .= $link. "\n\n";
$txt .= "Talk to you soon!\n\n";
$txt .= "--\n";
$txt .= "Matt Brody\n";
$txt .= $phone;

$mailheader = "From: Matt Brody <matt@cybridindustries.com> \r\n";
$mailheader .= "Cc: kristina@cybridindustries.com \r\n";
$mailheader .= "Bcc: matt@cybridindustries.com \r\n";
mail($to, $subject, $txt, $mailheader, "-fmatt@cybridindustries.com") or die("Error!");
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . 'index.html';
  header('Location: ' . $home_url);
?>
