<?php
 
require "/Library/WebServer/Documents/whatSnack/twilio-php/Services/Twilio.php";
 
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = 'AC4d5dd69fb8df62a37017d811717f36ea';
$AuthToken = '1e87a0f9e44e164c0f08b32a6dbcf2a5';
 
$client = new Services_Twilio($AccountSid, $AuthToken);
 
$message = $client->account->messages->create(array(
    "From" => "909-303-6196",
    "To" => $_POST["number"],
    "Body" => $_POST["message"],
));
 
// Display a confirmation message on the screen
echo "Sent message {$message->sid}";
