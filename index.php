<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php session_start();?>
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Weather Forecast</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- External CSS Links  -->
    <link rel="stylesheet" type="text/css" href="CSS/layout.css">
    <link rel="stylesheet" type="text/css" href="CSS/weather-details-style.css">
    <link rel="stylesheet" type="text/css" href="CSS/table-style.css">
    <link rel="stylesheet" type="text/css" href="CSS/card-style.css">


    <!-- Boxicons CDN Link  -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Iconify link -->
    <!--  <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script> -->
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>

    <style>
      .srchbtn:focus {
        outline: none;
        box-shadow: none;
      }
      .forecast-view{
        zoom: 85%;
      }
      .home_content .main-container-details .right-container-details-top {
        margin-right: 50px;
      }

      /* Wind ToolTip */
      .wind-sub {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .wind-sub::before,
      .wind-sub::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .wind-sub::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        text-transform: Uppercase;
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: center;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 300%;
        background-color: var(--tooltip-color);
      }
      .wind-sub:hover::before,
      .wind-sub:hover::after {
        --scale: 1;
      }
      .wind-sub::after {
        --translate-y: calc(-1.2 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .wind-sub:hover {
        transform: scale(1.08);
      }
      
      .home_content .main-container-details .wind-status .label-wind p {
        width: max-content;
      }
      .wind-sub2 {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .wind-sub2::before,
      .wind-sub2::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .wind-sub2::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        /* text-transform: Uppercase; */
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: justify;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 400%;
        background-color: var(--tooltip-color);
      }
      .wind-sub2:hover::before,
      .wind-sub2:hover::after {
        --scale: 1;
      }
      .wind-sub2::after {
        --translate-y: calc(-1.1 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .wind-sub2:hover {
        transform: scale(1.08);
      }

      /* Barometer ToolTip */
      .home_content .main-container-details .barometer .measurement-barometer p{
        width: max-content;
      }

      .barometer-sub {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .barometer-sub::before,
      .barometer-sub::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .barometer-sub::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        text-transform: Uppercase;
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: center;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 300%;
        background-color: var(--tooltip-color);
      }
      .barometer-sub:hover::before,
      .barometer-sub:hover::after {
        --scale: 1;
      }
      .barometer-sub::after {
        --translate-y: calc(-1.2 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .barometer-sub:hover {
        transform: scale(1.08);
      }

      .home_content .main-container-details .barometer .label-barometer p{
        width: max-content;
      }

      .barometer-sub2 {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .barometer-sub2::before,
      .barometer-sub2::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .barometer-sub2::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        /* text-transform: Uppercase; */
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: justify;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 300%;
        background-color: var(--tooltip-color);
      }
      .barometer-sub2:hover::before,
      .barometer-sub2:hover::after {
        --scale: 1;
      }
      .barometer-sub2::after {
        --translate-y: calc(-1.1 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .barometer-sub2:hover {
        transform: scale(1.08);
      }

      /* Visibility ToolTip */
      .home_content .main-container-details .visibility .measurement-visib p{
        width: max-content;
      }

      .visib-sub {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .visib-sub::before,
      .visib-sub::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .visib-sub::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        text-transform: Uppercase;
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: center;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 300%;
        background-color: var(--tooltip-color);
      }
      .visib-sub:hover::before,
      .visib-sub:hover::after {
        --scale: 1;
      }
      .visib-sub::after {
        --translate-y: calc(-1.2 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .visib-sub:hover {
        transform: scale(1.08);
      }

      .home_content .main-container-details .visibility .label-visib p {
        width: max-content;
      }
      .visib-sub2 {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .visib-sub2::before,
      .visib-sub2::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .visib-sub2::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        /* text-transform: Uppercase; */
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: justify;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 400%;
        background-color: var(--tooltip-color);
      }
      .visib-sub2:hover::before,
      .visib-sub2:hover::after {
        --scale: 1;
      }
      .visib-sub2::after {
        --translate-y: calc(-1.1 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .visib-sub2:hover {
        transform: scale(1.08);
      }
      
      /* Humidity ToolTip */
      .home_content .main-container-details .humidity .measurement-humid p {
        width: max-content;
      }

      .humid-sub {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .humid-sub::before,
      .humid-sub::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .humid-sub::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        text-transform: Uppercase;
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: center;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 600%;
        background-color: var(--tooltip-color);
      }
      .humid-sub:hover::before,
      .humid-sub:hover::after {
        --scale: 1;
      }
      .humid-sub::after {
        --translate-y: calc(-1.1 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .humid-sub:hover {
        transform: scale(1.08);
      }

      .home_content .main-container-details .humidity .label-humid p{
        width: max-content;
      }

      .humid-sub2 {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .humid-sub2::before,
      .humid-sub2::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .humid-sub2::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        /* text-transform: Uppercase; */
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: justify;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 400%;
        background-color: var(--tooltip-color);
      }
      .humid-sub2:hover::before,
      .humid-sub2:hover::after {
        --scale: 1;
      }
      .humid-sub2::after {
        --translate-y: calc(-1.2 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .humid-sub2:hover {
        transform: scale(1.08);
      }

      /* Precipitation ToolTip */
      .home_content .main-container-details .precipitation .measurement-precip p {
        width: max-content;
      }

      .precip-sub {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .precip-sub::before,
      .precip-sub::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .precip-sub::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        text-transform: Uppercase;
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: center;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 820%;
        background-color: var(--tooltip-color);
      }
      .precip-sub:hover::before,
      .precip-sub:hover::after {
        --scale: 1;
      }
      .precip-sub::after {
        --translate-y: calc(-1.1 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .precip-sub:hover {
        transform: scale(1.08);
      }

      .home_content .main-container-details .precipitation .label-precip p {
        width: max-content;
      }

      .precip-sub2 {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .precip-sub2::before,
      .precip-sub2::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .precip-sub2::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        /* text-transform: Uppercase; */
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: justify;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 300%;
        background-color: var(--tooltip-color);
      }
      .precip-sub2:hover::before,
      .precip-sub2:hover::after {
        --scale: 1;
      }
      .precip-sub2::after {
        --translate-y: calc(-1.1 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .precip-sub2:hover {
        transform: scale(1.08);
      }

      /* SunRise ToolTip */
      .home_content .main-container-details .sun-rise .measurement-rise .rise-sub p {
        width: max-content;
      }

      .sunrise-sub {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .sunrise-sub::before,
      .sunrise-sub::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .sunrise-sub::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        text-transform: Uppercase;
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: center;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 400%;
        background-color: var(--tooltip-color);
      }
      .sunrise-sub:hover::before,
      .sunrise-sub:hover::after {
        --scale: 1;
      }
      .sunrise-sub::after {
        --translate-y: calc(-1.1 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .sunrise-sub:hover {
        transform: scale(1.08);
      }

      .home_content .main-container-details .sun-rise .label-rise p {
        width: max-content;
      }

      .sunrise-sub2 {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .sunrise-sub2::before,
      .sunrise-sub2::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .sunrise-sub2::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        /* text-transform: Uppercase; */
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: justify;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 400%;
        background-color: var(--tooltip-color);
      }
      .sunrise-sub2:hover::before,
      .sunrise-sub2:hover::after {
        --scale: 1;
      }
      .sunrise-sub2::after {
        --translate-y: calc(-1.1 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .sunrise-sub2:hover {
        transform: scale(1.08);
      }

      /* SunSet ToolTip */
      .home_content .main-container-details .sun-set .measurement-set .set-sub p {
        width: max-content;
      }

      .sunset-sub {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .sunset-sub::before,
      .sunset-sub::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .sunset-sub::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        text-transform: Uppercase;
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: center;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 400%;
        background-color: var(--tooltip-color);
      }
      .sunset-sub:hover::before,
      .sunset-sub:hover::after {
        --scale: 1;
      }
      .sunset-sub::after {
        --translate-y: calc(-1.1 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .sunset-sub:hover {
        transform: scale(1.08);
      }

      .home_content .main-container-details .sun-set .label-set p {
        width: max-content;
      }

      .sunset-sub2 {
        position: relative;
        cursor: pointer;
        transition: transform .2s;
      }
      .sunset-sub2::before,
      .sunset-sub2::after {
        --scale: 0;
        --tooltip-color: white;
        --arrow-size: 10px;

        
        position: absolute;
        top: -.25rem;
        left: 50%;
        transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
        transition: 150ms transform;
        transform-origin: bottom center;
      }
      .sunset-sub2::before {
        --translate-y: calc(-100% - var(--arrow-size));

        font-size: 11px;
        /* text-transform: Uppercase; */
        font-weight: 700;
        content: attr(data-tooltip); 
        color: #5E7F94;
        text-align: justify;
        border-radius: 0.4em;
        border: 2px solid #FF8D28;
        padding: .7rem;
        width: max-content;
        max-width: 410%;
        background-color: var(--tooltip-color);
      }
      .sunset-sub2:hover::before,
      .sunset-sub2:hover::after {
        --scale: 1;
      }
      .sunset-sub2::after {
        --translate-y: calc(-1.1 * var(--arrow-size));
        
        content: '';
        border: var(--arrow-size) solid transparent;
        border-top-color: #FF8D28;
        transform-origin: top center;
      }
      .sunset-sub2:hover {
        transform: scale(1.08);
      }
    </style>
</head>
<body>
  <?php 

    
    // session_set_cookie_params(0);
    // session_start();
    
    require_once('components/key.php');

    date_default_timezone_set("Asia/Manila");

    $q = 'Manila';
    $q_bak = $q;
    $lang = '';

    if(isset($_GET['txtSearch'])){
      if(!empty($_GET['txtSearch'])){
        $q = $_GET['txtSearch'];
      }
    }

    if(!isset($_SESSION['datahistory'])){
      $_SESSION['datahistory'] = array();
    }

    $err_enc = false;
    try {
      //code...
      $result = $aPIs->getRealtimeWeather($q, $lang);
    } catch (\Throwable $th) {
      //throw $th;
      if(count($_SESSION['datahistory']) != 0){
        $result = $aPIs->getRealtimeWeather($_SESSION['datahistory'][count($_SESSION['datahistory'])-1][0], $lang);
        $err_enc = true;
        // echo '<script>alert("Invalid Input. Please input city name")</script>';
      }else{
        $result = $aPIs->getRealtimeWeather($q_bak, $lang);
        $err_enc = true;
        // echo '<script>alert("Invalid Input. Please input city name")</script>';
      }
    }

    $_GET['hLocation']    = $result->location->name;
    $_GET['hTemp']        = $result->current->tempC;
    $_GET['hStatus']      = $result->current->condition->text;
    $_GET['hDirection']   = $result->current->windDir;
    $_GET['hWindStatus']  = $result->current->windKph;

    if(isset($_GET['txtSearch'])){
      
      // saving recent data for history
      $myArray = array();
      $bool_duplicate = false;

      if(!isset($_SESSION['datahistory'])){
        $_SESSION['datahistory'] = array();
      }else{
        if(isset($_GET['txtSearch'])){
          if(!empty($_GET['txtSearch'])){
        //   array_push($myArray,$_GET['input']);
            $myArray = array(
              $_GET['hLocation'],
              $_GET['hTemp'],
              $_GET['hStatus'],
              $_GET['hDirection'],
              $_GET['hWindStatus']
              // $result->location->name,
              // $result->current->tempC,
              // $result->current->condition->text,
              // $result->current->windDir,
              // $result->current->windKph
            );

            // check if the searched item haven't been searched before
            // check if the searched location exist in datahistory
            $check_count = 0;
            for ($i= count($_SESSION['datahistory']) - 1; $i >= 0; $i--) { 
              # code...
              $check_count++;
              if ($check_count <= 5) {
                # code...
                if($_SESSION['datahistory'][$i][0] == $_GET['hLocation']){
                  $bool_duplicate = true;
                }
              }              
            }
            
            
            // save the searched city in datahistory
            if($err_enc == false && $bool_duplicate == false){
              array_push($_SESSION['datahistory'],$myArray);
            }
          }
        }
      }
    }

  ?>
  <div class="sidebar">
    <div class="logo_content">
      <div class="logo">
        <i class='bx bxs-sun'></i>
        <div class="logo_name">Weather</div>
      </div>
        <i class='bx bx-menu' id="btn"></i>
    </div>

    <ul class="nav_list"> 
      <li>
        <a href="#">
          <i class='bx bx-cloud-snow'></i>
          <span class="links_name">Forecast</span>
          </a>
        <span class="tooltip">Forecast</span>
      </li>

      <li>
          <a href="#">
            <span style="padding-left: 15px; padding-right: 15px;">
              <span class="iconify" data-icon="ion:information-circle" style="color: white;" data-width="20" data-height="20"></span>
            </span>
            <span class="links_name">About us</span>
          </a>
            <span class="tooltip">About us</span>
      </li>

    </ul>

  </div>


  <div class = "home_content overflow-auto container-fluid">

  <?php 
  
    if($err_enc == true){
      // echo '<div class="alert alert-danger">Sorry the city name you input can not be found. Please try again</div>';
      echo 
      '<div class="alert alert-danger alert-dismissible fade show">
        Sorry the city name you input can not be found. Please try again
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }

  ?>

    <!-- Search Bar Ulet -->
    <!-- <div class = "search-bar">
      <div class = "icon-bg">
        <div class = "icon">
          <i class='bx bx-search-alt-2'></i>
        </div>
      </div>
        <input type = "text" placeholder = "Search for places...">
    </div> -->
    <!-- Search Bar -->
    <div class="container-fluid">
      <nav class="navbar navbar-light">
        <div class="container-fluid">
          <form class="d-flex" action="index.php" method="GET">
            <!-- <button class="btn btn-outline-success" type="submit">Search</button>  -->
            <!-- <button class="btn btn-secondary-outline srchbtn" type="submit" onclick="AddRow()"> -->
            <button class="btn btn-secondary-outline srchbtn" type="submit">
              <div class = "icon" style="background: #F0F1F1; width: 40px; height: 40px; border-radius: 20em; margin-bottom: 1px;margin-left: 9px; margin-top: 0px; font-size: 30px;">
                <i class='bx bx-search-alt-2'></i>
              </div>
            </button> 
            <input class="form-control me-2 srchbtn" name="txtSearch" type="text" placeholder="Search" aria-label="Search" style="border:0px; border-bottom:2px solid #E1E1E1; border-radius: 0px; padding-left: 30px; margin-top: 5px;" autocomplete="off">
          </form>
        </div>
      </nav>
    </div>

    <!-- Location and Buttons -->
    <div class = "location-buttons">

      <!-- Empty Container -->
      <div class = "empty-container">
      </div>
      <!-- Empty Container -->

      <!-- Selected Location -->

      <div class = "place-container">
        <div class = "place-date-time"> 
          <h2> <?php echo($result->location->name); ?> City</h2>
          <div class = "date-time">
            <?php
              $day = '';
              $month = '';

              if(date('w') == 0){
                $day = 'Monday';
              }else if(date('w') == 1){
                $day = 'Tuesday';
              }else if(date('w') == 2){
                $day = 'Wednesday';
              }else if(date('w') == 3){
                $day = 'Thursday';
              }else if(date('w') == 4){
                $day = 'Friday';
              }else if(date('w') == 5){
                $day = 'Saturday';
              }else if(date('w') == 6){
                $day = 'Sunday';
              }

              echo('<p> ' . $day . ', ' . date('F d, Y') . '</p>');

            ?>
            <!-- <p> Thursday, October 07, 2020</p> -->
            <p class = "seperator"> | </p>
            <p id="demo">
              <?php 
                // $cdate = new DateTime(date("Y-m-d H:i:sP"), new DateTimeZone('Asia/Manila'));
                // echo(date("h:i a")->); 
                // echo($cdate->format('h:i a')); 
              ?>
            </p>
            <!-- <p> 2:00 PM</p> -->
          </div>
        </div>
      </div>
      <!-- Selected Location -->

      <!-- Buttons -->
      <div class = "buttons">
        <div class = "refresh-far-cel">
          <div class = "refresh-icon">
            <span class="iconify" data-icon="ci:refresh" onclick="window.location.reload();"></span>
          </div>
        </div>
      </div>
      <!-- Buttons -->
    </div>
    <!-- Location and Buttons -->

    <!-- Weather Status -->
    <div class = "main-container">
      <div class = "left-container">
        <div class = "weather">

          <div class = "image">
            <!-- <img src = "src/icon-lightRain.png" alt="status"> -->
            <img src = "<?php echo($result->current->condition->icon); ?>" alt="status" style="width: 100px;margin-top: -30px; margin-left: -80px;">
          </div> 
          <div class = "temp">
            <h3> <?php echo((int)$result->current->tempC); ?> </h3>
          </div>
          <div class = "degree">
            <span class = "far-text" style='font-size: 32px; margin-left: 10px;'>&#8451;</span>
          </div>

          <div class = "temp" style="margin-left: 20px;">
            <h3><?php echo((int)$result->current->tempF); ?> </h3>
          </div>
          <div class = "degree">
            <span class = "far-text" style='font-size: 32px; margin-left: 15px;'>&#8457;</span>
          </div>
        </div>

        <div class = "status">
          <div class = "sub-status">
            <p><?php echo($result->current->condition->text); ?></p>
          </div>
        </div>
      </div>
    </div>


    
    
    <!-- Weather Status -->

    <!-- Weather Details -->
    <div class = "main-container-details">
      <div class="left-container-details-top">

        <!-- UV Index -->
        <div class = "uv-index" style="margin-top:60px;">
          <div class = "gauge">
            <div class = "sub-gauge">
              <div class="gauge__body">
                <div class="gauge__fill">
                </div>
                <div class="gauge__cover">
                  <?php 
                  if ($result->current->uv == null) {
                    # code...
                    echo('0');
                  }else{
                    echo($result->current->uv);
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class = "measurement-uv">
            <-- <div class = "circle">
            </div>
            <-- <p> Low </p> -->
            <!-- <p> <?php echo($result->current->uv)?> </p> 
          </div> -->
          <div class = "label-uv">
            <p class = "barometer-sub" data-tooltip = "Click for more"> 
              <a 
                href='https://www.who.int/news-room/questions-and-answers/item/radiation-the-ultraviolet-(uv)-index' 
                style="text-decoration:none;color: #6C99AE; ">UV Index
              </a>
            </p>
          </div>
        </div>
        <!-- UV Index -->

        <!-- Barometer -->
        <div class = "barometer" style="margin-top: -40px;">
          <div class = "measurement-barometer">
            <p class = "barometer-sub" data-tooltip = "Millibars (Air Pressure)"> <?php echo($result->current->pressureMb)?> mb</p>
          </div>
          <div class = "label-barometer">
            <p class = barometer-sub2 data-tooltip = "&emsp; Used in weather forecasting to measure
            the pressure of the atmosphere. It can tell us whether or not the air pressure is rising or falling.
            This information can use by meteorologists to determine whether a storm is coming or leaving. "> Barometer </p>
          </div>
        </div>
        <!-- Barometer -->

      </div>    
      <div class = "left-container-details-bottom">

        <!-- Wind Status -->
        <div class = "wind-status">
          <div class = "empty-wind">
          </div>
          <div class = "measurement-wind">
            <div class = "wind-icon">
              <!-- <img src = "src/arrow.png" style="height: 24px; width: 24px; padding-bottom: 2px"> -->
            </div>
            <div class = "wind-sub" style="margin-left: -50px;" data-tooltip = "Wind Direction & Speed (Kilometer per hour)">
              <p><text style="font-size: 30px;"><?php echo($result->current->windDir)?>&#176; </text> &nbsp; <?php echo($result->current->windKph) ?> km/ h </p>
            </div>
          </div>
          <div class = "label-wind">
            <p class = "wind-sub2" data-tooltip = "&emsp; It is composed of two subjects, first is  wind 
            direction and second is wind speed. Wind direction is the direction from which the wind is blowing; 
            the direction from which the air is moving, It is measured with reference to 360 degrees on the 
            compass (True North), and expressed to the nearest degree, going in a clockwise direction, or to 
            any one of the 16 points on the compass (N, S, E, W, NE, NW, SE, and SW). Wind Speed however, 
            simply describes how fast the air is moving past a certain point. This may be an averaged over a 
            given unit of time, such as miles per hour, kilometer per hour or an instantaneous speed."> Wind Status </p>
          </div>
        </div>
        <!-- Wind Status -->

        <!-- Visibility -->
        <div class = "visibility">
          <div class = "measurement-visib">
            <p class = "visib-sub"  data-tooltip = "Kilometer (Distance)"> <?php echo($result->current->visKm);?> km </p>
          </div>
          <div class = "label-visib">
            <p class = "visib-sub2" data-tooltip = "&emsp; The measurement of how far one can see in the 
            distance, and visibility can be affected by fog and sinking air."> Visibilty </p>
          </div>
        </div>
        <!-- Visibility -->

      </div>

      <div class="right-container-details-top">

        <!-- Visibility -->
        <div class = "humidity">
          <div class = "empty-humid">
          </div>
          <div class = "measurement-humid">
            <p class = "humid-sub" data-tooltip = "Percentage of water vapor in the atmoshpere"> <?php echo($result->current->humidity);?>% </p>
          </div>
          <div class = "bar-humid">
            <div class="progress">
              <div class="progress__fill"></div>
              <span class="progress__text"> </span>
            </div>
          </div>
          <div class = "label-humid">
            <p class = "humid-sub2"  data-tooltip = "&emsp; The measurement of how much water vapor is in the air/
            atmosphere. The higher the percentage, the more water vapor the air holds."> Humidity </p>
          </div>
        </div>
        <!-- Visibility -->
        
        <!-- Precipitation -->
        <div class = "precipitation">
          <div class = "measurement-precip">
            <p class = "precip-sub" data-tooltip = "Percentage of a chance of rain determined by the probability 
            of precipitation"> <?php echo($result->current->precipIn)?>% </p>
          </div>
          <div class = "bar-precip">
            <div class="progress2">
              <div class="progress2__fill"></div>
              <span class="progress2__text"> 0% </span>
            </div>
          </div>
          <div class = "label-precip">
            <p class = "precip-sub2"  data-tooltip = "&emsp; Any form of water from the atmosphere that falls to 
            the ground, It could be rain, drizzle, snow, sleet, hail or something rarer."> Precipitation </p>
          </div>
        </div>
        <!-- Precipitation -->
        
      </div>
      <div class = "right-container-details-bottom">

        <!-- Sun Rise -->
        <div class = "sun-rise">
          <div class = "empty-rise">
          </div>
          <div class = "measurement-rise">
            <div class = "rise-icon">
              <img src = "src/bi_sunrise-fill.png" alt="rise" style="height: 40px; width: 40px">
            </div>
            <div class = "rise-sub">
            <p class = "sunrise-sub"  data-tooltip = "Predicted sunrise"> 5:45 AM </p>
            </div>
          </div>
          <div class = "label-rise">
            <p class = "sunrise-sub2" data-tooltip = "&emsp; The time in the morning when the sun appears or full daylight 
            arrives."> Sun Rise </p>
          </div>
        </div>
        <!-- Sun Rise -->

        <!-- Sun Set -->
        <div class = "sun-set">
          <div class = "measurement-set">
            <div class = "set-icon">
              <img src = "src/bi_sunset-fill.png" style="height: 40px; width: 40px">
            </div>
            <div class = "set-sub">
            <p class = "sunset-sub" data-tooltip = "Predicted sunset"> 5:46 PM </p>
            </div>
          </div>
          <div class = "label-set">
            <p class = "sunset-sub2"  data-tooltip = "&emsp; The time in the evening when the sun disappears
            or daylight fades."> Sun Set </p>
          </div>
        </div>
        <!-- Sun Set -->
        
      </div>
    </div>
    <!-- Weather Details -->

    <style type="text/css">

</style>
      

        <div>
          <div class="center-table-container">
              <table class="table" id="show">
<!--               <table class="table table-hover">
-->           <thead class="thead-style" style="text-align: center;">
                <tr class="table table-borderless">
                  <?php
                    if(count($_SESSION['datahistory']) != 0){
                      echo('<th scope="col" id="tbl-head">LOCATION</th>');
                      echo('<th scope="col">TEMPERATURE</th>');
                      echo('<th scope="col">WEATHER STATUS</th>');
                      echo('<th scope="col">WIND DIRECTION</th>');
                      echo('<th scope="col">WIND STATUS</th>');
                      echo('<th scope="col">Go back</th>');
                    }
                  ?>
                  <!-- <th scope="col" id="tbl-head">LOCATION</th>
                  <th scope="col">TEMPERATURE</th>
                  <th scope="col">WEATHER STATUS</th>
                  <th scope="col">WIND DIRECTION</th>
                  <th scope="col">WIND STATUS</th>
                  <th scope="col">Go back</th> -->
                </tr>
              </thead>
              <tbody class="table table-borderless">
                <?php
                  if(isset($_SESSION['datahistory'])){
                    // if(count($_SESSION['datahistory']) == 0){
                      $count = 0;
                      for($aa = count($_SESSION['datahistory'])-1 ; $aa >= 0; $aa-- ){
                          // echo($_SESSION['datahistory'][$aa][0] . "    " . $_SESSION['datahistory'][$aa][1]);
                          // echo('</br>');

                          echo('<tr>');
                            echo('<td scope="row" id="loc">' . $_SESSION['datahistory'][$aa][0] . '</td>');
                            echo('<td>' . $_SESSION['datahistory'][$aa][1] . '&#x2103;</td>');
                            echo('<td>' . $_SESSION['datahistory'][$aa][2] . '</td>');
                            echo('<td>' . $_SESSION['datahistory'][$aa][3] . '</td>');
                            echo('<td>' . $_SESSION['datahistory'][$aa][4] . ' km/h</td>');
                            echo('<td>');
                              echo('<a href="index.php?txtSearch='. $_SESSION['datahistory'][$aa][0] .'">');
                                echo('<button type="submit" class="btn btn-outline-secondary" >Go back</button>');
                              echo('</td>');
                            echo('</td>');
                          echo('</tr>');
                          // count output to display, it should only be 5
                          if($count == 4){
                              $aa = -1;
                          }
                          $count++;
                      }
                    // }
                  }
                ?>

              </tbody>
              <!-- <tbody class="table table-borderless">
                <tr>
                  <td scope="row" id="loc">Angat, Bulacan</td>
                  <td>32&#x2103;</td>
                  <td>Sunny</td>
                  <td><span class="iconify" id="arrow-icon-dir" data-icon="akar-icons:arrow-up" data-width="20"></span>North</td>
                  <td>10 km/h</td>
                  <td><button type="submit" class="btn btn-outline-secondary" >Go back</button></td>
                </tr>
                <tr>
                  <td scope="row" id="loc">Bocaue, Bulacan</td>
                  <td>31&#x2103;</td>
                  <td>Partialy Cloudy</td>
                  <td><span class="iconify" id="arrow-icon-dir" data-icon="akar-icons:arrow-up-left" data-width="20"></span>North East</td>
                  <td>10 km/h</td>
                  <td><button type="submit" class="btn btn-outline-secondary" >Go back</button></td>
                </tr>
                <tr>
                  <td scope="row" id="loc">Meycauayan, Bulacan</td>
                  <td>32&#x2103;</td>
                  <td>Sunny</td>
                  <td><span class="iconify" id="arrow-icon-dir" data-icon="akar-icons:arrow-up" data-width="20"></span>North</td>
                  <td>10 km/h</td>
                  <td><button type="submit" class="btn btn-outline-secondary" >Go back</button></td>
                </tr>
                <tr>
                  <td scope="row" id="loc">Obando, Bulacan</td>
                  <td>32&#x2103;</td>
                  <td>Sunny</td>
                  <td><span class="iconify" id="arrow-icon-dir" data-icon="akar-icons:arrow-up" data-width="20"></span>North</td>
                  <td>10 km/h</td>
                  <td><button type="submit" class="btn btn-outline-secondary" >Go back</button></td>
                </tr>
                <tr>
                  <td scope="row" id="loc">Pandi, Bulacan</td>
                  <td>32&#x2103;</td>
                  <td>Sunny</td>
                  <td><span class="iconify" id="arrow-icon-dir" data-icon="akar-icons:arrow-up" data-width="20"></span>North</td>
                  <td>10 km/h</td>
                  <td><button type="submit" class="btn btn-outline-secondary" >Go back</button></td>
                </tr>
              </tbody> -->
            </table>

          </div>
        </div>


<br>
<!-- OPSSSS -->

<!-- 
<h1>Responsive column card Example</h1>

<h2>Resize the screen to see the below cards resize themselves</h2>
 -->
        <!--div class="center-card-card-container"-->
        <!--div-->
          <?php require_once("forecast.php");?>
        </div>


  </div>

  <style type="text/css">



  </style>

  <script type="text/javascript">
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let searchBtn = document.querySelector(".bx-search");

//     let row = 1;
//     var searchBtn = document.getElementById("searchBtn", displayDetails)
//   //searchBtn.addEventListener("click", false);

// //let row = 1;
// searchBtn.onclick = function() {
// function displayDetails (){
//     //alert(city1); 
//     let display = document.getElementById ("display");

//     var newRow = display.insertRow(row); 

//     var celli = newRow. insertCell (0);
//     var cell2 = newRow.insertCell(1);
//     var cell3 = newRow. insertCell(2);
//     var cell4 = newRow. insertCell(3);
//     var cell5 = newRow. insertCell(4);

//     celli. innerHTML = city1;
//     cell2. innerHTML = tempC1;
//     cell3. innerHTML = weatherStatus1;
//     cell4. innerHTML = windDirection1;
//     cell5. innerHTML = windKph1;

//     row++;
// }}
    // btn.onclick = function() {
    //   sidebar.classList.toggle("active");
    // }

    // //  searchBtn.onclick = function() {
    // //  sidebar.classList.toggle("active");

    //  city1 ='<?php echo($result->location->name) ;?> ';
    //  tempC1 = '<?php echo((int)$result->current->tempC); ?>';
    //  weatherStatus1 = '<?php echo($result->current->condition->text)?>';
    //  windDirection1 = '<?php echo($result->current->windDir)?>';
    //  windKph1 = ' <?php echo($result->current->windKph) ?>';
    

     
    // var list1 = [];
		// var list2 = [];
		// var list3 = [];
		// var list4 = [];
    // var list5 = [];
    // //var list6 = [];

		// var n = 1;
		// var x = 0;

		// function AddRow(){

		// 	var AddRown = document.getElementById('show');
		// 	var NewRow = AddRown.insertRow(n);

    //   list1[x] = city1 + "City";
		// 	list2[x] = tempC1 + "&#x2103;";
		// 	list3[x] = weatherStatus1;
		// 	list4[x] = windDirection1;
    //   list5[x] = windKph1 + " km/h";
    //   //list6[x] = <button type="submit" class="btn btn-outline-secondary" >Go back</button>; 

    //   var cel1 = NewRow.insertCell(0);
		// 	var cel2 = NewRow.insertCell(1);
		// 	var cel3 = NewRow.insertCell(2);
		// 	var cel4 = NewRow.insertCell(3);
    //   var cel5 = NewRow.insertCell(4);
    //   //var cel6 = NewRow.insertCell(5);

		// 	cel1.innerHTML = list1[x];
		// 	cel2.innerHTML = list2[x];
		// 	cel3.innerHTML = list3[x];
		// 	cel4.innerHTML = list4[x];
    //   cel5.innerHTML = list5[x];
    //   //cel6.innerHTML = list6[x];

		// 	n++;
		// 	x++;
		// }

    //}



    // Gauge UV Index
    const gaugeElement = document.querySelector(".gauge");

    function setGaugeValue(gauge, value) {
      if (value < 0 || value > 1) {
        return;
      }

      gauge.querySelector(".gauge__fill").style.transform = `rotate(${
        2.50 / 5
      }turn)`;
      // gauge.querySelector(".gauge__cover").textContent = `${Math.round(
      //   value //* 10
      // )}`;//%`;
    }

    setGaugeValue(gaugeElement, <?php echo($result->current->uv)?>);//0.2);
    // Gauge UV Index

    // Progress Bar Humidity
    function updateProgressBar(progressBar, value) {
    value = Math.round(value);
    progressBar.querySelector(".progress__fill").style.width = `${value}%`;
    progressBar.querySelector(".progress__text").textContent = `${value}%`;
    }

    const myProgressBar = document.querySelector(".progress");

    updateProgressBar(myProgressBar, <?php echo($result->current->humidity)?>);
    // Progress Bar Humidity

    // Progress Bar Precipitation
    function updateProgressBar2(progressBar2, value) {
      value = Math.round(value);
      progressBar2.querySelector(".progress2__fill").style.width = `${value}%`;
      progressBar2.querySelector(".progress2__text").textContent = `${value}%`;
    }

    const myProgressBar2 = document.querySelector(".progress2");

    updateProgressBar2(myProgressBar2, <?php echo($result->current->precipIn)?>);
    // Progress Bar Precipitation


    // time generation
    var today = new Date();
    function hours12(date) { return (date.getHours() + 24) % 12 || 12; }

    const ctime = hours12(new Date()) + ":" + today.getMinutes();
    document.getElementById("demo").innerHTML = ctime;
  </script>

 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->

</body>
</html>

  <!-- <span class="iconify" data-icon="carbon:settings" style="color: white;"></span>
  <span class="iconify" data-icon="fluent:weather-cloudy-24-regular" style="color: white;"></span>
  <span class="iconify" data-icon="fluent:weather-hail-day-24-regular" style="color: white;"></span>
   -->
