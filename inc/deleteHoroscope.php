<?php
if($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    
    if(isset($_SESSION["horoscope"])){
        unset($_SESSION["horoscope"]);
        echo "Delete: True</br>";
    }
}

?>