<?php
/** 
 * Download the library from: https://github.com/twilio/twilio-php
 * Copy the 'Services' folder into a directory containing this file.
 */
require('twilio-php-master/Services/Twilio.php');
 
$account_sid = "AC1f88d4378f03609d4f8ddeb2255d1102"; // Your Twilio account sid
$auth_token = "833584594892269c9f3398b8e749882b"; // Your Twilio auth token
 
// Download data from Twilio API
$client = new Services_Twilio($account_sid, $auth_token);
$messages = $client->account->sms_messages->getIterator(0, 50, array(
    'DateSent>' => '2015-05-01', 
    'DateSent<' => '2015-12-30',
    //'From' => '+17075551234', // **Optional** filter by 'From'...
    //'To' => '+18085559876', // ...or by 'To'
));
 
// Browser magic
$filename = $account_sid."_sms.csv";
header("Content-Type: application/csv") ;
header("Content-Disposition: attachment; filename={$filename}");
 
// Write headers
$fields = array(
    'SMS Message SID', 'From', 'To', 'Date Sent', 
    'Status', 'Direction', 'Price', 'Body'
);
echo '"'.implode('","', $fields).'"'."\n";
 
// Write rows
foreach ($messages as $sms) {
    $row = array(
        $sms->sid, $sms->from, $sms->to, $sms->date_sent, 
        $sms->status, $sms->direction, $sms->price, $sms->body
    );
    echo '"'.implode('","', $row).'"'."\n";
}
