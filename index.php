<?php
/*
    Plugin Name: ConectarAPI
    Description: Plugin para conectarse a una API externa
    Version: 1.0.0
    Author: Jose Vicente Carratala
    Author URI: https://jocarsa.com
*/

function dameClientes(){
    $api_url = 'http://127.0.0.1:8080/clientes';
    $ch = curl_init($api_url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'cURL Error: ' . curl_error($ch);
    } else {

        $data = json_decode($response);

        if (is_array($data)) {
            echo '<div class="contenido">';
            
            foreach ($data as $item) {
                echo '<article class="entrada">';
                echo '<h2>' . esc_html($item->nombre) . '</h2>';
                echo '<p>' . esc_html($item->descripcion) . '</p>';
                echo '</article>';
            }

            echo '</div>';
        }
    }

    curl_close($ch);
}

add_shortcode("dame_clientes","dameClientes");

?>