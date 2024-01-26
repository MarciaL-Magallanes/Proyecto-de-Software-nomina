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
$nombre_empleado = $_POST['nombre_empleado'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$cedula = $_POST['cedula'];
$monto_salario = $_POST['monto_salario'];
$fecha_pago= $_POST['fecha_pago'];
$metodo_pago= $_POST['metodo_pago'];
$comentarios= $_POST['comentarios'];


$sql = "INSERT INTO Generacion_nomina (nombre_empleado,mes,ano,cedula,monto_salario,fecha_pago,metodo_pago,comentarios) VALUES ('$nombre_empleado','$mes','$ano','$cedula','$monto_salario','$fecha_pago','$metodo_pago','$comentarios')";

if ($con->query($sql) === TRUE) {
    header("Location:calculodenomina.html");
    //echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
    
// Cerrar conexión
$con->close();

?>