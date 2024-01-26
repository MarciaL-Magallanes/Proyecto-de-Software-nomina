<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbnomina2";

   // Crear conexión
$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}

//contrato
$Nombre = $_POST['Nombre'];
$Fecha_inicio = $_POST['Fecha_inicio'];
$Fecha_fin = $_POST['Fecha_fin'];
$Salario_basico = $_POST['Salario_basico'];

$sql = "INSERT INTO contrato (Nombre,Fecha_inicio,Fecha_fin,Salario_basico) VALUES ('$Nombre','$Fecha_inicio', '$Fecha_fin','$Salario_basico')";


if ($con->query($sql) === TRUE) {
    header("Location:gestion.html");
    //echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
    
// Cerrar conexión
$con->close();

?>