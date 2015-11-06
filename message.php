<?php

// Load the Twilio helper library and our configuration file
// Step 1: Download the Twilio-PHP library from twilio.com/docs/libraries, 
    // and move it into the folder containing this file.
    require "twilio-php-master/Services/Twilio.php";
 
    // Step 2: set our AccountSid and AuthToken from www.twilio.com/user/account
    $AccountSid = "AC1f88d4378f03609d4f8ddeb2255d1102";
    $AuthToken = "833584594892269c9f3398b8e749882b";
    $TWILIO_NUMBER = '8776052741';
 
// Create an authenticated REST client
$client = new Services_Twilio($AccountSid, $AuthToken);

// Send a text message
$message = $client->account->sms_messages->create(
    $TWILIO_NUMBER, 
    $_POST['to'], 
    'Have fun with your Twilio development!'
);

// Send a string reply back
echo 'Text message incoming!';