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

//agregar emopleado
$Documentoid = $_POST['Documentoid'];
$NombreEmpleado = $_POST['NombreEmpleado'];
$ApellidoEmpleado = $_POST['ApellidoEmpleado'];
$Telefono = $_POST['Telefono'];
$Direccion = $_POST['Direccion'];
$Email = $_POST['Email'];

// Insertamos  datos en la base de datos
$sql = "INSERT INTO empleado (Documentoid,NombreEmpleado,ApellidoEmpleado,Telefono,Direccion,Email) VALUES ('$Documentoid', '$NombreEmpleado','$ApellidoEmpleado', '$Telefono','$Direccion','$Email')";

if ($con->query($sql) === TRUE) {
    header("Location:gestion.html");
    //echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Cerrar conexión
$con->close();

?>