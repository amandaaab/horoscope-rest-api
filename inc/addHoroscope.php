<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    include 'multi.php';
    echo "<br>hejsan";

    if($_POST["personNummer"] == null && $_SESSION["horoscope"] == null){
        echo "Skriv in ditt personnummer";
    }

    elseif($_SESSION['horoscope'] == null){
        $_SESSION['horoscope'] = getSign($signs);
        echo "true";
       
    }
        
}
else{
    echo "error";
}

    




?>