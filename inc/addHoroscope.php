<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    include 'multi.php';
    echo "hejsan";

    if($_POST["personNummer"] == null){
        echo "<p>Skriv in personnummer!</p>";
    }
    else if($_SESSION["horoscopet"]==null){
        
    }
    
}else{
        echo "no sign here";
    }

    if(isset($_POST["personNummer"])){
      echo getSign($signs);

    }




?>