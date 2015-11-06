<?php

// Load the Twilio helper library and our configuration file
include 'twilio-php-master/Services/Twilio.php';
include 'config.php';

// Create an authenticated REST client
$client = new Services_Twilio($TWILIO_ACCOUNT_SID, $TWILIO_AUTH_TOKEN);

// Make an outbounf call
$call = $client->account->calls->create(
    $TWILIO_NUMBER, 
    $_POST['to'], 
    'http://twilio-elearning.herokuapp.com/starter/voice.php'
);

// Send a string reply back
echo 'Call inbound!';