<?php
/* Send an SMS using Twilio. */

// Include the Twilio-PHP library from http://twilio.com/docs/libraries
// Once downloaded move it into the folder containing this file.
require "twilio-php-master/Services/Twilio.php";

// Set your AccountSid and AuthToken here.
// Each can be found at http://www.twilio.com/user/account
$AccountSid = "AC1f88d4378f03609d4f8ddeb2255d1102";
$AuthToken = "833584594892269c9f3398b8e749882b";

// Your valid Twilio phone number
$fromNumber = "+18776052741";

// Create a new Twilio Rest Client
$client = new Services_Twilio($AccountSid, $AuthToken);

// Get the number and message we submitted
$toNumber = "+1" . $_REQUEST["number"];
// $message = $_REQUEST["message"];

// If testing we only need to load the PHP page in the browser
// if ($testing) {
  //  $fromNumber = "+18776052741";
  //  $toNumber = "+18776052741";
 //   $message = "This is a test. Time is " . date('h:i.s');
// }

// Send SMS
// - $fromNumber is your Twilio number
// - $toNumber is any phone number
// - $message is the sms body

$message = $client->account->messages->sendMessage(
    $fromNumber, 
    $_POST['number'], 
     'Hi, ask me anything. How may I help you?'
);

try {
    $sms = $client->account->messages->sendMessage($fromNumber, $toNumber);

    // Display a confirmation message on the screen
    // echo "An SMS message was sent to $toNumber";
    echo "<p style='color:#000; font-family:Helvetica, Arial, sans-serif; font-size:24px'>Thank you, We're looking forward to your question!</p>";
    //echo "Thank you, We're looking forward to your question!";
}

catch (Exception $e) {
echo "<p style='color:#000; padding:10px; font-family:Helvetica, Arial, sans-serif; font-size:24px'>We're looking forward to your question!</p>";
// error messeage orig

// catch (Exception $e) {
    // echo "The message was not sent!<br><br>";
    // If you don't see the previous message
    // Check to see if your Twilio phone number is correct in the $fromNumber
    // Check to see if the number you are texting is verified (the $toNumber)
    // The $toNumber must be verified if you are using a trial Twilio account

    // echo "From Number: " . $fromNumber." (must be your Twilio phone number)<br>";
   //  echo "To Number: " . $toNumber." (this must be a verified phone number if you are using a trial account)<br>";
   // echo "Message: " . $message."<br>";
   // echo "<br>";

}