<?php 
echo "hejsan";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_POST["personNummer"])){
        echo $_POST["personNummer"];

    }

}


?>