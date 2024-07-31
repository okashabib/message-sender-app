<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

$sid = "ACbd08c96a34d53a2aca1dde3f1c81195e";
$token = "188f30ad778e34bb0f1cbaa0cfcb0744";

$client = new Client($sid, $token);
$number = $_POST['number'];
$message = $_POST['message'];

$message = $client->messages->create(
    "+92" . $number,
    [
        'from' => '+12295278010',
        'body' => $message
    ]
);

if($message){
    echo "Message sent";
}else{
    echo "Something went wrong";
}
?>