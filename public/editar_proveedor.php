<?php

include("dbcon.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$tipo = $_POST['tipo'];
$activo = isset($_POST['activo']) ? ($_POST['activo'] ? 1 : 0) : 0; // Verificar si está definido y convertir a entero
date_default_timezone_set('Europe/Madrid');
$hora_actual = date("Y-m-d H:i:s");


$sql="UPDATE proveedores SET Nombre='$nombre', `Correo electrónico`='$correo', Teléfono='$telefono', Activo='$activo', `Tipo de proveedor`='$tipo', `Fecha última modificación`='$hora_actual' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query) {
    Header("Location: index.php");
}