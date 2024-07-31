<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

$sid = "";
$token = "";

$client = new Client($sid, $token);
$number = $_POST['number'];
$message = $_POST['message'];

$message = $client->messages->create(
    "+92" . $number,
    [
        'from' => '',
        'body' => $message
    ]
);

if($message){
    echo "Message sent";
}else{
    echo "Something went wrong";
}
?>