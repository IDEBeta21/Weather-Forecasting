<?php
    echo("History test");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <style>
            body{
                background-color: rgba(0, 0, 0, 0.8);
                color: white;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
        </style>
    </head>
    <body>
        History and Session test

        <form action="testHistory.php">
            <input type="text" placeholder="Enter text here" name="input">
            <input type="text" placeholder="Another text here" name="input2">
            <input type="submit" text="Click me!">
        </form>

        <?php
            session_set_cookie_params(0);
            session_start();
            $myArray = array();

            if(!isset($_SESSION['datahistory'])){
                $_SESSION['datahistory'] = array();
            }else{
                if(isset($_GET['input'])){
                    if(!empty($_GET['input'])){
                    //   array_push($myArray,$_GET['input']);
                        $myArray = array(
                            $_GET['input'],
                            $_GET['input2']
                        );
                        array_push($_SESSION['datahistory'],$myArray);
                    }
                }
            }
            
            
            
            // if(isset($_SESSION['datahistory'])){
            //     array_push($myArray,$_SESSION['datahistory']);
            // }
        ?>

        <?php
            var_dump($_SESSION['datahistory']);
            echo('</br>');
            echo('</br>');
            // var_dump($myArray);
            
            if(isset($_SESSION['datahistory'])){
                $count = 0;
                for($aa = count($_SESSION['datahistory'])-1 ; $aa >= 0; $aa-- ){
                    echo($_SESSION['datahistory'][$aa][0] . "    " . $_SESSION['datahistory'][$aa][1]);
                    echo('</br>');
                    if($count == 4){
                        $aa = -1;
                    }
                    $count++;
                }
            }
        ?>
    </body>
</html>