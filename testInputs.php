<?php
    require_once('components/key.php');

    $q = 'Caloocan';
    $lang = '';

    $result = $aPIs->getRealtimeWeather($q, $lang);

    echo('<h1>Initial test</h1></br>');
    echo($result->location->name);
    echo('</br>Current temperature: '.$result->current->tempC);
    echo('</br>Longitude: '.$result->location->lon);
    echo('</br>Latitude: '.$result->location->lat);
    echo('</br></br>');
    var_dump($result);
    echo('</br></br>');


    $q1 = 'caloocan';
    $days = 1;
    // $dt = date("D M d, Y G:i");
    $dt = date_create('2021-10-18');

    $unixdt = 245;
    $hour = 245;
    $lang1 = 'lang';

    // $result01 = $aPIs->getForecastWeather($q, $days, $dt);
    $result01 = $aPIs->getForecastWeather($q1, $days, $dt, $hour, $lang1);
    var_dump($result01);
?>