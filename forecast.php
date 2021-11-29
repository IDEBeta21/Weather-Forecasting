<?php 

  $q2 = $q;
  // $dt2 = date_create('2021-11-14');
  $dt2 = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("-6 days"));
  $unixdt2 = null;
  // $endDt2 = date_create('2021-11-22');
  $endDt2 = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("0 days"));
  // $endDt2 = date_create(date("Y-m-d"));
  $unixendDt2 = null;
  $hour2 = 12;
  $lang2 = null;

  $result2 = $aPIs->getHistoryWeather($q2, $dt2, $unixdt2, $endDt2, $unixendDt2, $hour2, $lang2);

  // collect data from the API and printing
  $data = array();

  for ($aa = 0 ; $aa < count($result2->forecast->forecastday) ; $aa++){
    $data[$aa] = array(
      $result2->forecast->forecastday[$aa]->date,
      $result2->forecast->forecastday[$aa]->day->maxtempC,
      $result2->forecast->forecastday[$aa]->day->condition->text,
      $result2->forecast->forecastday[$aa]->day->condition->icon
    );
  }

  $newfdata = array();
  for ($aa = 0 ; $aa < 7; $aa++){
    $q3 = $q2;
    $days3 = 1;
    // $dt = date("D M d, Y G:i");
    $dt3 = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string((string)$aa . " days"));
    $unixdt3 = null;
    $hour3 = 11;
    $lang3 = null;

    $result3 = $aPIs->getForecastWeather(
        $q3, 
        $days3, 
        $dt3, 
        $unixdt3, 
        $hour3, 
        $lang3
    );
    
    $fdate = $result3->forecast->forecastday[0]->date;
    $ftemp = $result3->forecast->forecastday[0]->day->avgtempC;
    $ftext = $result3->forecast->forecastday[0]->day->condition->text;
    $ficon = $result3->forecast->forecastday[0]->day->condition->icon;

    array_push($newfdata, array($fdate, $ftemp, $ftext, $ficon));

  }





  $predResultCount = count($data);

  // Generating weather prediction
  $predictionCounter = 0;     
  for ($aa = 0 ; $aa < 7 ; $aa++){
    $weatherStatus = array();
    $weatherIcon = array();
    $count = 0;

    $newdata = array();
    for( $ab = $predictionCounter ; $ab < count($data) ; $ab++){
      $newdata[$ab] = array($data[$ab][0],$data[$ab][1],$data[$ab][2],$data[$ab][3]);
    }
    
    foreach($newdata as $ws){
      $weatherStatus[$count] = $ws[2];
      $weatherIcon[$count] = $ws[3];
      $count++;
    }
    
    // var_dump($weatherStatus);
    // get weather status w/o duplication
    $weatherStatusUniq = array_unique($weatherStatus);
    $weatherIconUniq = array_unique($weatherIcon);

    // Count weather condition/ status
    $weatherStatusCount = array();
    $count = 0;
    foreach($weatherStatusUniq as $wu){
      $count = 0;
      for($ad = 0 ; $ad < count($data); $ad++ ){
        if($wu == $data[$ad][2]){
          $count++;
        }
      }
      array_push($weatherStatusCount, $count);
    }

    $strCount = 0;
    $c = 0;
    // get weather condition with highest count (creating prediction)
    // getting most posibble weather outcome
    foreach (array_combine($weatherStatusUniq, $weatherStatusCount) as $wu => $wc){
      if($wc>$strCount){
        $strCondition = $wu;
        $strCount = $wc;
        $c++;
      }
    }

    $newAddedDay = $predictionCounter + 0;
    
    $newdate = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string((string)$newAddedDay." days"));
    $newtemp = 30;
    $newcondition = $strCondition;

    // Getting icon for the weather
    $newicon;
    foreach($data as $dt){
      if ($dt[2] == $newcondition){
        $newicon = $dt[3];
      }
    }

    // array_push($data, array($newdate, $newtemp, $newcondition));;
    $data[count($data)] = array($newdate->format('Y-m-d'), $newtemp, $newcondition, $newicon);
    $predictionCounter++;
  }

  

?>


<div class="card-container">
  <div class="center-card-container">

    <!-- <div class="card">
      <h5>Thu 30</h5>
      <center><img src="src/icon-lightRain.png" id="img-card" alt="Light Rain"></center>
      <h2>31&#x2103;</h2>
      <p class="status">Light Rain</p>
    </div> -->
    <?php 
      
      for($aa = 7; $aa < 9 ; $aa++){
        echo('<div class="card">');
        echo('<h5>' . date_create($data[$aa][0])->format('D') . ' ' . date_create($data[$aa][0])->format('d') . '</h5>');
        echo('<center><img src="' . $data[$aa][3] . '" id="img-card" alt="Light Rain"></center>');
        echo('<h2>' . $newfdata[$aa - 7][1] . '&#x2103;</h2>');
        echo('<p class="status">' . $data[$aa][2] . '</p>');
        echo('</div>');
      }
      
      for($aa = 2; $aa < 7 ; $aa++){
        echo('<div class="card">');
        echo('<h5>' . date_create($newfdata[$aa][0])->format('D') . ' ' . date_create($newfdata[$aa][0])->format('d') . '</h5>');
        echo('<center><img src="' . $newfdata[$aa][3] . '" id="img-card" alt="Light Rain"></center>');
        echo('<h2>' . $newfdata[$aa][1] . '&#x2103;</h2>');
        echo('<p class="status">' . $newfdata[$aa][2] . '</p>');
        echo('</div>');
      }
      
      
    ?>
  </div>
</div>



































<!-- <div class="card-container">
  <div class="center-card-container">
    <div class="card">
      <h5>Thu 30</h5>
      <center><img src="src/icon-lightRain.png" id="img-card" alt="Light Rain"></center>
      <h2>31&#x2103;</h2>
      <p class="status">Light Rain</p>
    </div>

    <div class="card">
      <h5>Fri 01</h5>
      <center><img src="src/icon-partlySunny.png" id="img-card" alt="Partly Sunny"></center>
      <h2>32&#x2103;</h2>
      <p class="status">Partly Sunny</p>
    </div>

    <div class="card">
      <h5>Sat 02</h5>
      <center><img src="src/icon-thunderstorms.png" id="img-card" alt="Thunderstorms"></center>
      <h2>32&#x2103;</h2>
      <p class="status">Thunderstorm</p>
    </div>

    <div class="card">
      <h5>Sun 03</h5>
      <center><img src="src/icon-lightRain.png" id="img-card" alt="Light Rain"></center>
      <h2>31&#x2103;</h2>
      <p class="status">Light Rain</p>
    </div>

    <div class="card">
      <h5>Mon 04</h5>
      <center><img src="src/icon-lightRain.png" id="img-card" alt="Light Rain"></center>
      <h2>32&#x2103;</h2>
      <p class="status">Light Rain</p>
    </div>

    <div class="card">
      <h5>Tue 05</h5>
      <center><img src="src/icon-lightRain.png" id="img-card" alt="Light Rain"></center>
      <h2>31&#x2103;</h2>
      <p class="status">Light Rain</p>
    </div>

    <div class="card">
      <h5>Wed 06</h5>
      <center><img src="src/icon-lightRain.png" id="img-card" alt="Light Rain"></center>
      <h2>30&#x2103;</h2>
      <p class="status">Rain</p>
    </div>

    <div class="card">
      <h5>Thu 07</h5>
      <center><img src="src/icon-rain.png" id="img-card" alt="Rain"></center>
      <h2>31&#x2103;</h2>
      <p class="status">Rain</p>
    </div>
  </div>
</div> -->