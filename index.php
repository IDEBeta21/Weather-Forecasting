<?php

    require_once('components/key.php');

    $q = 'Caloocan';
    $lang = '';

    $result = $aPIs->getRealtimeWeather($q, $lang);

    echo('<h1>Initial test</h1></br>');
    echo($result->location->name);
    echo('</br>Current temperature: '.$result->current->tempC);
    echo('</br>');
    // var_dump($result);

?>