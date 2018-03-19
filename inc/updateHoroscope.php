<?php 
parse_str(file_get_contents("php://input"), $_PUT);
session_start();
include 'multi.php';

if($_SERVER['REQUEST_METHOD'] == 'PUT'){
    $date = substr($_PUT["personNummer"], 0, 6);  
    $fourLastNr = $date[2] . $date[3] . $date[4] . $date[5];

    if(isset($_SESSION['horoscope'])){
        session_unset();
        echo $_SESSION['horoscope'] = getSign($signs, $date, $fourLastNr);
    }else{
        echo "Skriv in ditt personnummer";
    } 
}

?>