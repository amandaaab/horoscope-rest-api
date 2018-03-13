<?php
session_start();
include 'multi.php';

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_SESSION['horoscope'])){
        echo $_SESSION['horoscope'];
    }else{
        echo "ingenting";
    };
}

?>