<?php
// require_once ('vendor/autoload.php'); // if you use Composer
require_once('ultramsg.class.php'); // if you download ultramsg.class.php

$ultramsg_token="ccx8sz7z3y2uofvc"; // Ultramsg.com token
$instance_id="instance22124"; // Ultramsg.com instance id
$client = new UltraMsg\WhatsAppApi($ultramsg_token,$instance_id);

$to="+573106443987"; 
$body="Hello world"; 
$api=$client->sendChatMessage($to,$body);
print_r($api);