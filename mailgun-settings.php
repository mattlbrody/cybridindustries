<?php

// Enter your Mailgun API key here
/*
|--------------------------------------------------------------------------
| Mailgun Settings
|--------------------------------------------------------------------------
|
| Register for Free on Mailgun.com for sending transactional emails.
| Mailgun is powerful API email service by rackspace.
| It is easy to use. Just signup on mailgun.com and
| follow steps to get API key & domain name.
|
*/

$mailgunKey = 'key-efb6c93df934c63da2bcc0b032e1a41c'; //Will be like key-........
$mailgunDomain = 'sandboxad51725c31664ff287cef5d3031d8ff5.mailgun.org'; //You can use sandbox domain provided by mailgun


// Your details to receive email from end-user
$yourEmail = 'nileshg@themesease.com'; //Chage this email id to yours where you want to receive email


// Following settings will be used to send email to end-user who submits contact us form.
// We will be sending 'Thank You' email to end-user.
$fromName = 'Themes Ease'; //Sender's Name
$subject = 'Thank You';
$thankYouMsg = 'Thank you for contacting us! We will get back to you ASAP.'; //Your thank you message
