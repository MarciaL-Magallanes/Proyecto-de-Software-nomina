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

//Cargo
$nombrearea = $_POST['nombrearea'];
$Nombre = $_POST['Nombre'];

$sql = "INSERT INTO area (nombrearea,Nombre) VALUES ('$nombrearea','$Nombre')";

if ($con->query($sql) === TRUE) {
    header("Location:gestion.html");
    //echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
    
// Cerrar conexión
$con->close();

?>











