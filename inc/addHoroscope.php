<?php
session_start();
include 'multi.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   $date = substr($_POST["personNummer"], 0, 6);
   $fourLastNr = $date[2] . $date[3] . $date[4] . $date[5];
    echo "<br>hejsan";

    if(!isset($_SESSION['horoscope'])){
        
       $_SESSION['horoscope'] = getSign($signs, $date, $fourLastNr);
        echo "true";
        echo  $_SESSION['horoscope'];
        
    }
else{
    echo "error";
}

}

?>