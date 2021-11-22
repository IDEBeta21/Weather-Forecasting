<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    </style>
</head>
<body>
  <?php 
    require_once('components/key.php');

    $q = 'Caloocan';
    $lang = '';

    $result = $aPIs->getRealtimeWeather($q, $lang);

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
          <form class="d-flex">
            <!-- <button class="btn btn-outline-success" type="submit">Search</button>  -->
            <button class="btn btn-secondary-outline srchbtn" type="submit" onclick="alert('hello world');">
              <div class = "icon" style="background: #F0F1F1; width: 40px; height: 40px; border-radius: 20em; margin-bottom: 1px;margin-left: 9px; margin-top: 0px; font-size: 30px;">
                <i class='bx bx-search-alt-2'></i>
              </div>
            </button> 
            <input class="form-control me-2 srchbtn" type="search" placeholder="Search" aria-label="Search" style="border:0px; border-bottom:2px solid #E1E1E1; border-radius: 0px; padding-left: 30px; margin-top: 5px;">

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
            <p> Thursday, October 07, 2020</p>
            <p class = "seperator"> | </p>
            <p> 2:00 PM</p>
          </div>
        </div>
      </div>
      <!-- Selected Location -->

      <!-- Buttons -->
      <div class = "buttons">
        <div class = "refresh-far-cel">
          <div class = "refresh-icon">
            <span class="iconify" data-icon="ci:refresh"></span>
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
            <img src = "src/icon-lightRain.png" alt="status">
          </div>
          <div class = "temp">
            <h3> <?php echo((int)$result->current->tempC); ?> </h3>
          </div>
          <div class = "degree">
            <span class = "far-text" style='font-size: 32px;'>&#8451;</span>
          </div>

          <div class = "temp">
            <h3><?php echo((int)$result->current->tempF); ?> </h3>
          </div>
          <div class = "degree">
            <span class = "far-text" style='font-size: 32px;'>&#8457;</span>
          </div>
        </div>

        <div class = "status">
          <div class = "sub-status">
            <p> Light Rain </p>
          </div>
        </div>
      </div>
    </div>


    
    
    <!-- Weather Status -->

    <!-- Weather Details -->
    <div class = "main-container-details">
      <div class="left-container-details-top">

        <!-- UV Index -->
        <div class = "uv-index">
          <div class = "gauge">
            <div class = "sub-gauge">
              <div class="gauge__body">
                <div class="gauge__fill">
                </div>
                <div class="gauge__cover">
                </div>
              </div>
            </div>
          </div>
          <div class = "measurement-uv">
            <div class = "circle">
            </div>
            <p> Low </p>
          </div>
          <div class = "label-uv">
            <p> UV Index </p>
          </div>
        </div>
        <!-- UV Index -->

        <!-- Barometer -->
        <div class = "barometer">
          <div class = "measurement-barometer">
            <p> <?php echo($result->current->pressureMb)?> mb</p>
          </div>
          <div class = "label-barometer">
            <p> Barometer </p>
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
              <img src = "src/arrow.png" style="height: 24px; width: 24px; padding-bottom: 2px">
            </div>
            <div class = "wind-sub">
              <p> <?php echo($result->current->windKph) ?> km/ h </p>
            </div>
          </div>
          <div class = "label-wind">
            <p> Wind Status </p>
          </div>
        </div>
        <!-- Wind Status -->

        <!-- Visibility -->
        <div class = "visibility">
          <div class = "measurement-visib">
            <p> <?php echo($result->current->visKm);?> km </p>
          </div>
          <div class = "label-visib">
            <p> Visibilty </p>
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
            <p> <?php echo($result->current->humidity);?>% </p>
          </div>
          <div class = "bar-humid">
            <div class="progress">
              <div class="progress__fill"></div>
              <span class="progress__text"> </span>
            </div>
          </div>
          <div class = "label-humid">
            <p> Humidity </p>
          </div>
        </div>
        <!-- Visibility -->
        
        <!-- Precipitation -->
        <div class = "precipitation">
          <div class = "measurement-precip">
            <p> <?php echo($result->current->precipIn)?>% </p>
          </div>
          <div class = "bar-precip">
            <div class="progress2">
              <div class="progress2__fill"></div>
              <span class="progress2__text"> 0% </span>
            </div>
          </div>
          <div class = "label-precip">
            <p> Precipitation </p>
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
            <p> 5:45 AM </p>
            </div>
          </div>
          <div class = "label-rise">
            <p> Sun Rise </p>
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
            <p> 5:46 PM </p>
            </div>
          </div>
          <div class = "label-set">
            <p> Sun Set </p>
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
              <table class="table">
<!--               <table class="table table-hover">
 -->              <thead class="thead-style" style="text-align: center;
">
                <tr class="table table-borderless">
                  <th scope="col" id="tbl-head">LOCATION</th>
                  <th scope="col">TEMPERATURE</th>
                  <th scope="col">WEATHER STATUS</th>
                  <th scope="col">WIND DIRECTION</th>
                  <th scope="col">WIND STATUS</th>
                  <th scope="col">Go back</th>
                </tr>
              </thead>
              <tbody class="table table-borderless">
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
              </tbody>
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

    btn.onclick = function() {
      sidebar.classList.toggle("active");
    }

    searchBtn.onclick = function() {
      sidebar.classList.toggle("active");
    }

    // Gauge UV Index
    const gaugeElement = document.querySelector(".gauge");

    function setGaugeValue(gauge, value) {
      if (value < 0 || value > 1) {
        return;
      }

      gauge.querySelector(".gauge__fill").style.transform = `rotate(${
        value / 5
      }turn)`;
      gauge.querySelector(".gauge__cover").textContent = `${Math.round(
        value * 10
      )}%`;
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
