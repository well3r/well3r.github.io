
<?php
// Include the bundled autoload from the Twilio PHP Helper Library
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';
use Twilio\Rest\Client;
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACd5a08788b462f904aa0bb11cb569675e';
$auth_token = '13f17fef2d7e8fd3c75a3ecd78df81e2';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// A Twilio number you own with SMS capabilities
$twilio_number = "+447506332802";
$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+447506332802',
    array(
        'from' => +441133204145,
        'body' => 'hi there justin isn't feeling at he's best could you give him a call'
    )
);



?>
