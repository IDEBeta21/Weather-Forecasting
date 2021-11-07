<?php
    require_once("vendor/autoload.php");
    $key = 'fce11b6c487a4e898fe142933211809';

    $client = new WeatherAPILib\WeatherAPIClient($key);

    $aPIs = $client->getAPIs();
?>