<?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://localhost/curso-php-danki/web_services/request.php');
    curl_setopt($curl, CURLOPT_POST, 1);
    //curl_setopt($curl, CURLOPT_POSTFIELDS, "postvar1=value1&postvar2=value2&postvar3=value3");

    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(['request' => 'name_return']));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($curl);

    curl_close($curl);
    $retorno = json_decode($server_output);
    echo $retorno->resultado->nome . ', ' . $retorno->resultado->idade . ' anos.';