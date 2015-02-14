// this line loads the library 
require('/path/to/twilio-php/Services/Twilio.php'); 

 
$account_sid = 'AC4d5dd69fb8df62a37017d811717f36ea'; 
$auth_token = '[AuthToken]'; 
$client = new Services_Twilio($account_sid, $auth_token); 
 
$client->account->messages->create(array( 
	'To' => <?php echo $_POST["number"], 
	'From' => "+17313241822", 
	'Body' => "Snack menu stuff",   
));
