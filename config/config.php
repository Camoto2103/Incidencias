
<?php
    $server =  "10.210.2.243";
    $user = "entrenamiento";
    $password = "C0l0mb142019#*";
    $database = "po";
    $port = "3306";

    $conn = mysqli_connect($server, $user, $password, $database, $port);

    if(!$conn){
        die("connection faile: ". mysqli_connect_error());
    }
?>
