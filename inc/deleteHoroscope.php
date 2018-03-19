<?php
session_start();
include 'multi.php';

if($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    if(isset($_SESSION["horoscope"])){
        session_unset();
    }
}

?>