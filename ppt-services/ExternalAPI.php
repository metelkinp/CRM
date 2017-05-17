<?php

require_once 'settings.php';

if (!isset($ppt_settings) || empty($ppt_settings))
    throw new Exception('Connection settings is not defined');

$curl = curl_init();

$settings = $ppt_settings['external_services'];

$url = $settings['external-url'];

switch ($_GET['case']) {
    case 'FLIGHT_SEARCH' : {
        $data = array(
            'origin' => $_GET['origin'],
            'destination' => $_GET['destination'],
            'from' => $_GET['from']
        );

        $path = $settings['path-flightsearch'];

        $url = $url . $path . '?' . http_build_query($data);

        break;
    }
}
//$parms = sprintf("%s", http_build_query($data));
//$parms = filter_input(INPUT_GET, $parms, FILTER_SANITIZE_ENCODED);

curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($curl);

curl_close($curl);

header("Content-Type:application/json");
echo $result;

