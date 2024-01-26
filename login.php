<?php
    require("conLog.php");
    $username = utf8_decode($_POST['NombreUsuario']);
    $password = utf8_decode($_POST['ContrasenaUsuario']);
    
    $consulta = "select * from $table where (NombreUsuario = '$username') and (ContraseñaUsuario = '$password')";
    $r = $con -> query($consulta);
    if($r -> num_rows>0){
        header("Location:gestion.html");
        
    }else{
        die('ACCESO DENEGADO: con el usuario '.$username.' --> Por Favor Verifique datos de acceso');
        
    }
    mysqli_close($con);
    
?>