<?php
    $host ="localhost";
    $user ="root";
    $pasw ="";
    $bd = "dbnomina2";
    $table = "usuario";
    $con = mysqli_connect($host, $user, $pasw, $bd);
    if(!$con){
        die('No es posible establecer la conexión con la base de datos');
    }
?>