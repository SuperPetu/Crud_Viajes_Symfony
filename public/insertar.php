<?php

include 'dbcon.php';
$con=connection();

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$tipo=$_POST['tipo'];
$activo = isset($_POST['activo']) ? ($_POST['activo'] ? 1 : 0) : 0; // Verificar si está definido y convertir a entero

date_default_timezone_set('Europe/Madrid');
$hora_actual = date("Y-m-d H:i:s");
$sql="INSERT INTO proveedores (Nombre, `Correo electrónico`, Teléfono, `Tipo de proveedor`, Activo, `Fecha introducción`, `Fecha última modificación`) VALUES('$nombre', '$correo', '$telefono', '$tipo','$activo', '$hora_actual', '$hora_actual')";

$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}
?>
