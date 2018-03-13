<?php 
parse_str(file_get_contents("php://input"), $_PUT);
session_start();
include 'multi.php';

if($_SERVER['REQUEST_METHOD'] === 'PUT'){

    if(isset($_SESSION['horoscope'])){
        session_unset('horoscope');
        //$_SESSION['horoscope'] = updateSign($signs);
       
     } else{
        echo "Skriv in ditt personnummer";
       } 
    

    if($_SESSION['horoscope'] != null){
        $_SESSION['horoscope'] = getSign($signs);
        echo "truegjghj";
       
    }
          
    }
    

    

    



//vilket födelsedatum horoskopet tillhör
// uppdatera (unset det gamla session), echo true
// om session !=, uppdatera inte, echo false 


?>