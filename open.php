<?php

require 'phpMQTT.php';

$server = "m21.cloudmqtt.com";     // change if necessary
$port = 12881;                     // change if necessary
$username = "tqdhktta";                   // set your username
$password = "4c2hKRo4g4Hl";                   // set your password
$client_id = "phpMQTT-publisher"; // make sure this is unique for connecting to sever - you could use uniqid()

$mqtt = new bluerhinos\phpMQTT($server, $port, $client_id);

if ($mqtt->connect(true, NULL, $username, $password)) {
	$mqtt->publish("esp/test", "1");
	$mqtt->close();
	echo "Door opened\n";
} else {
    echo "Time out!\n";
}
