<?php

$curl = curl_init();
$url = "192.168.1.187:3030/services/ppt/flights/find";

$data = array(
    'origin' => $_GET['origin'],
    'destination' => $_GET['destination'],
    'from' => $_GET['from']
);

$parms = sprintf("%s", http_build_query($data));
//$parms = filter_input(INPUT_GET, $parms, FILTER_SANITIZE_ENCODED);

$url = $url . '?' . $parms;

curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_USERPWD, "username:password");

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($curl);

curl_close($curl);

header("Content-Type:application/json");
echo $result;

