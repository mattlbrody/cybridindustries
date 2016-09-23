<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'Mailgun/vendor/autoload.php';
use Mailgun\Mailgun;

include 'mailgun-settings.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];

# Instantiate the client.
$mgClient = new Mailgun($mailgunKey);
$domain = $mailgunDomain;

# Make the call to the client.
if ($_POST['g-recaptcha-response']!='') {
    $result = $mgClient->sendMessage("$domain",
                      array('from'    => "Website <postmaster@$mailgunDomain>",
                            'to'      => $yourEmail,
                            'subject' => 'Contact From Website - SoftEase',
                            'html'    => 'Hi there,<br><br>'.$firstname.' '.$lastname.' -'.$email.' sent you following message from website.:<br>'.$message));


    $result = $mgClient->sendMessage("$domain",
                      array('from'    => "$fromName <postmaster@$mailgunDomain>",
                            'to'      => $email,
                            'subject' => $subject,
                            'html'    => "Hello $name,<br><br>".$thankYouMsg));

}
