<?php
    $server = "localhost";
    $data = "ycs";
    $user = "root";
    $pass = "";

    $con = mysqli_connect($server, $user, $pass, $data);
    if(!$con) {
        die("Falla en la conexión".mysqli_connect_error());
    // } else {
    //     echo "Conexión exitosa";
    }
?>