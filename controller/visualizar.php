<?php
    require('config.php');

    $cedula = $_POST['cedula'];

    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        $query = "SELECT Cedula, Nombre FROM po WHERE Cedula = '$cedula'";
        $result= mysqli_query($conn, $query);
    
        if (mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo "Datos:". "Cedula: " .$row["Cedula"]." ". "Nombre:".$row["Nombre"];
            }
        }else{
            echo "Usuario no existe";
        }
    }else{
        echo "error";
    }
  
mysqli_close($conn);
?>