<?php
include("dbcon.php");

$con = connection();

$sql = "SELECT * FROM `proveedores`";
$query = mysqli_query($con, $sql);


require_once '../vendor/autoload.php'; // Carga el autoloader de Twig

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../templates');
$twig = new Twig\Environment($loader);


echo $twig->render('index.html.twig', ['query' => $query]);


?>
