<?php

include("dbcon.php");
$con = connection();

$id=$_GET['id'];

$sql="DELETE FROM proveedores WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}

?>