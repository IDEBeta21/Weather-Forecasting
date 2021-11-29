<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-color: rgba(0, 0, 0, 0.8);
                color: white;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
        </style>
    </head>
    <body>
        <?php
            require_once('components/key.php');

            // $q = 'Caloocan';
            // $lang = '';

            // $result = $aPIs->getRealtimeWeather($q, $lang);

            // echo('<h1>Initial test</h1></br>');

            // echo($result->location->name);

            // echo('</br>Current temperature: '.$result->current->tempC);
            // echo('</br>Longitude: '.$result->location->lon);
            // echo('</br>Latitude: '.$result->location->lat);
            // echo('</br></br>');
            // var_dump($result);
            // echo('</br></br>');


            // $q1 = 'caloocan';
            // $days1 = 7;
            // // $dt = date("D M d, Y G:i");
            // $dt1 = date_create('2021-11-22');
            // $unixdt1 = null;
            // $hour1 = 245;
            // $lang1 = 'lang';

            // $result1 = $aPIs->getForecastWeather($q1, $days1, $dt1, $unixdt1, $hour1, $lang1);
            // // $result01 = $aPIs->getForecastWeather($q, $days, $dt);
            // // $result01 = $aPIs->getForecastWeather($q1, $days, $dt, $hour, $lang1);
            // var_dump($result1);
            // echo('</br></br>');


            // // date_add($date,date_interval_create_from_date_string("40 days"));
            // // date_format($date,"Y-m-d");
            // $date = date("Y-m-d");

            // $startDate = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("-7 days"));
            // $endDate = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("3 days"));
            // $hour;







            $q2 = 'caloocan';
            // $dt2 = date_create('2021-11-14');
            $dt2 = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("-6 days"));
            $unixdt2 = null;
            // $endDt2 = date_create('2021-11-22');
            $endDt2 = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("0 days"));
            // $endDt2 = date_create(date("Y-m-d"));
            $unixendDt2 = null;
            $hour2 = 245;
            $lang2 = null;

            $result2 = $aPIs->getHistoryWeather($q2, $dt2, $unixdt2, $endDt2, $unixendDt2, $hour2, $lang2);
            // $result2 = $aPIs->getHistoryWeather($q, $dt, $endDt, $hour, $lang);
            var_dump($result2);

            echo('</br>');
            echo('</br>');

            // testing api 
            echo($result2->forecast->forecastday[0]->date.'</br>');
            echo($result2->forecast->forecastday[0]->day->maxtempC);

            echo('</br>');
            echo('</br>');

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

            var_dump($data);

            echo('</br>');
            echo('</br>');

            // printing data collected
            foreach ($data as $wdata) {
                # code...
                echo($wdata[0] . '</br>');
                echo($wdata[1] . '</br>');
                echo($wdata[2] . '</br>');
                echo($wdata[3] . '</br></br>');
            }

            echo('</br>');
            echo('</br>');
            // //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            // $weatherStatus = array();
            // $count = 0;

            // foreach($data as $ws){
            //     $weatherStatus[$count] = $ws[2];
            //     $count++;
            // }
            
            // // var_dump($weatherStatus);
            // // get weather status w/o duplication
            // $weatherStatusUniq = array_unique($weatherStatus);

            // echo('</br>');
            // echo('</br><p></p>');
            
            // // Count weather condition/ status
            // $weatherStatusCount = array();
            // $count = 0;
            // print_r($weatherStatusUniq);

            // foreach($weatherStatusUniq as $wu){
            //     $count = 0;
            //     for($aa = 0 ; $aa < count($data); $aa++ ){
            //         if($wu == $data[$aa][2]){
            //             $count++;
            //         }
            //     }
            //     array_push($weatherStatusCount, $count);
            // }
            
            // echo('</br>');
            // print_r($weatherStatusCount);

            // echo('</br>');
            // echo('</br><p></p>');

            // foreach (array_combine($weatherStatusUniq, $weatherStatusCount) as $wu => $wc){
            //     $strCondition = $wu;
            //     $strCount = $wc;
            //     echo($strCondition . "   " . $strCount . "</br>");
            // }
            // echo('</br>');

            // // get weather condition with highest count
            // foreach (array_combine($weatherStatusUniq, $weatherStatusCount) as $wu => $wc){
            //     if($wc>$strCount){
            //         $strCondition = $wu;
            //         $strCount = $wc;
            //     }
            // }
            // echo($strCondition . "   " . $strCount . "</br>");

            // // /////////////////////////////////////////////////////////////////////////////////////////////////////////////


            echo("</br>");
            echo("</br>");
            echo("</br>");
            echo("</br>");
            echo("</br>");
            echo("</br>");
            echo("Wether forecast count: " . count($data));
            echo("</br>");
            echo("</br>");
            echo("</br>");
            echo("</br>");
            echo("</br>");
            echo("</br>");
            echo("</br>");
            echo("</br>");

            // loading prediction
            // $predictionCounter = 0;     
            // for ($aa = 0 ; $aa < 7 ; $aa++){

            //     $weatherStatus = array();
            //     $weatherIcon = array();
            //     $count = 0;

            //     $newdata = array();
            //     for( $ab = $predictionCounter ; $ab < count($data) ; $ab++){
            //         $newdata[$ab] = array($data[$ab][0],$data[$ab][1],$data[$ab][2],$data[$ab][3]);
            //     }
            //     var_dump($newdata);
            //     echo("VAvadfa</br>");

            //     foreach($newdata as $ws){
            //         $weatherStatus[$count] = $ws[2];
            //         $weatherIcon[$count] = $ws[3];
            //         $count++;
            //     }
                
            //     // var_dump($weatherStatus);
            //     // get weather status w/o duplication
            //     $weatherStatusUniq = array_unique($weatherStatus);
            //     $weatherIconUniq = array_unique($weatherIcon);
            //     // Count weather condition/ status
            //     $weatherStatusCount = array();
            //     $count = 0;

            //     var_dump($weatherIconUniq);
            //     echo("VAvadfa</br>");


            //     foreach($weatherStatusUniq as $wu){
            //         $count = 0;
            //         for($ad = 0 ; $ad < count($data); $ad++ ){
            //             if($wu == $data[$ad][2]){
            //                 $count++;
            //             }
            //         }
            //         array_push($weatherStatusCount, $count);
            //     }
            //     $strCount = 0;
            //     $c = 0;
            //     // get weather condition with highest count (creating prediction)
            //     foreach (array_combine($weatherStatusUniq, $weatherStatusCount) as $wu => $wc){
            //         if($wc>$strCount){
            //             $strCondition = $wu;
            //             $strCount = $wc;
            //             $c++;
            //         }
            //     }

            //     $newAddedDay = $predictionCounter + 3;

            //     $newdate = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string((string)$newAddedDay." days"));
            //     $newtemp = 30;
            //     $newcondition = $strCondition;

            //     // Getting icon for the weather
            //     $newicon;
            //     foreach($data as $dt){
            //         if ($dt[2] == $newcondition){
            //             $newicon = $dt[3];
            //         }
            //     }


            //     echo($newdate->format('Y-m-d') . "  " .$newtemp . "  " . $newcondition . '</br>');

            //     // array_push($data, array($newdate, $newtemp, $newcondition));;
            //     $data[count($data)] = array($newdate->format('Y-m-d'), $newtemp, $newcondition, $newicon);
            //     $predictionCounter++;
            // }

            // echo('</br></br>');
            // var_dump($data);

            // echo('</br></br>');
            // for($aa = 6; $aa <= 12 ; $aa++){
            //     echo(date_create($data[$aa][0])->format('D') . '    ' . date_create($data[$aa][0])->format('m') . '</br>'); // date
            //     echo($data[$aa][1] . '</br>'); // temperature
            //     echo($data[$aa][2] . '</br>'); // condition
            //     echo($data[$aa][3] . '</br></br>'); // icon
            // }


            // adding data to the existing weather data collected
            $tempForecast = array();
            $newfdata = array();
            for ($aa = 1 ; $aa < 7; $aa++){
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
                echo("</br>");
                echo("</br>");
                // echo($result3->forecast->forecastday[0]->date . "</br>");
                // echo($result3->forecast->forecastday[0]->day->avgtempC . "</br>");
                // echo($result3->forecast->forecastday[0]->day->condition->text . "</br>");
                // echo($result3->forecast->forecastday[0]->day->condition->icon . "</br>");

                $fdate = $result3->forecast->forecastday[0]->date;
                $ftemp = $result3->forecast->forecastday[0]->day->avgtempC;
                $ftext = $result3->forecast->forecastday[0]->day->condition->text;
                $ficon = $result3->forecast->forecastday[0]->day->condition->icon;

                array_push($newfdata, array($fdate, $ftemp, $ftext, $ficon));
            }
            
            foreach ($newfdata as $wdata) {
                # code...
                echo($wdata[0] . '</br>');
                echo($wdata[1] . '</br>');
                echo($wdata[2] . '</br>');
                echo($wdata[3] . '</br></br>');
            }










































































            // $q2 = $q;
            // // $dt2 = date_create('2021-11-14');
            // $dt2 = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("-6 days"));
            // $unixdt2 = null;
            // // $endDt2 = date_create('2021-11-22');
            // $endDt2 = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string("0 days"));
            // // $endDt2 = date_create(date("Y-m-d"));
            // $unixendDt2 = null;
            // $hour2 = 12;
            // $lang2 = null;
          
            // $result2 = $aPIs->getHistoryWeather($q2, $dt2, $unixdt2, $endDt2, $unixendDt2, $hour2, $lang2);
          
            // // collect data from the API and printing
            // $data = array();
          
            // for ($aa = 0 ; $aa < count($result2->forecast->forecastday) ; $aa++){
            //   $data[$aa] = array(
            //     $result2->forecast->forecastday[$aa]->date,
            //     $result2->forecast->forecastday[$aa]->day->maxtempC,
            //     $result2->forecast->forecastday[$aa]->day->condition->text,
            //     $result2->forecast->forecastday[$aa]->day->condition->icon
            //   );
            // }
          
            // $predResultCount = count($data);
            // echo("Alert('" . $predResultCount . "');");
            // // Generating weather prediction
            // $predictionCounter = 0;     
            // for ($aa = 0 ; $aa < 7 ; $aa++){
            //   $weatherStatus = array();
            //   $weatherIcon = array();
            //   $count = 0;
          
            //   $newdata = array();
            //   for( $ab = $predictionCounter ; $ab < count($data) ; $ab++){
            //     $newdata[$ab] = array($data[$ab][0],$data[$ab][1],$data[$ab][2],$data[$ab][3]);
            //   }
              
            //   foreach($newdata as $ws){
            //     $weatherStatus[$count] = $ws[2];
            //     $weatherIcon[$count] = $ws[3];
            //     $count++;
            //   }
              
            //   // var_dump($weatherStatus);
            //   // get weather status w/o duplication
            //   $weatherStatusUniq = array_unique($weatherStatus);
            //   $weatherIconUniq = array_unique($weatherIcon);
          
            //   // Count weather condition/ status
            //   $weatherStatusCount = array();
            //   $count = 0;
            //   foreach($weatherStatusUniq as $wu){
            //     $count = 0;
            //     for($ad = 0 ; $ad < count($data); $ad++ ){
            //       if($wu == $data[$ad][2]){
            //         $count++;
            //       }
            //     }
            //     array_push($weatherStatusCount, $count);
            //   }
          
            //   $strCount = 0;
            //   $c = 0;
            //   // get weather condition with highest count (creating prediction)
            //   // getting most posibble weather outcome
            //   foreach (array_combine($weatherStatusUniq, $weatherStatusCount) as $wu => $wc){
            //     if($wc>$strCount){
            //       $strCondition = $wu;
            //       $strCount = $wc;
            //       $c++;
            //     }
            //   }
          
            //   // if($predResultCount == 9){
            //   //   $newAddedDay = $predictionCounter + 2;
            //   // }else{
            //     $newAddedDay = $predictionCounter + 0;
            //   // }
              
            //   $newdate = date_add(date_create(date("Y-m-d")),date_interval_create_from_date_string((string)$newAddedDay." days"));
            //   $newtemp = 30;
            //   $newcondition = $strCondition;
          
            //   // Getting icon for the weather
            //   $newicon;
            //   foreach($data as $dt){
            //     if ($dt[2] == $newcondition){
            //       $newicon = $dt[3];
            //     }
            //   }
          
            //   // array_push($data, array($newdate, $newtemp, $newcondition));;
            //   $data[count($data)] = array($newdate->format('Y-m-d'), $newtemp, $newcondition, $newicon);
            //   $predictionCounter++;
            // }
        ?>
    </body>
</html>


