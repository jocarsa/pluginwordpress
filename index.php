<?php
/*
    Plugin Name: ConectarAPI
    Description: Plugin para conectarse a una API externa
    Version: 1.0.0
    Author: Jose Vicente Carratala
    Author URI: https://jocarsa.com
*/


$api_url = 'http://127.0.0.1:8080/clientes';
$ch = curl_init($api_url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);

?>