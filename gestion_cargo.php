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
$Nombre = $_POST['Nombre'];
$Nombre_cargo = $_POST['Nombre_cargo'];
$Salario_base = $_POST['Salario_base'];
$Horario_trabajo = $_POST['Horario_trabajo'];
$Experiencia_minima = $_POST['Experiencia_minima'];

$sql = "INSERT INTO cargo (Nombre,Nombre_cargo,Salario_base,Horario_trabajo,Experiencia_minima) VALUES ('$Nombre','$Nombre_cargo','$Salario_base','$Horario_trabajo','$Experiencia_minima')";

if ($con->query($sql) === TRUE) {
    header("Location:gestion.html");
    //echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
    
// Cerrar conexión
$con->close();

?>