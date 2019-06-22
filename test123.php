<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once '/path/to/vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "ACd5a08788b462f904aa0bb11cb569675e"; 
$token  = "[AuthToken]"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("+447506332802", // to 
                           array( 
                               "from" => "+441133204145",       
                               "body" => "hi there justin isn't feeling at he's best could you give him a call" 
                           ) 
                  ); 
 
print($message->sid);

?>
