<?php

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

include("dbcon.php");
$con = connection();

$id=$_GET['id'];

$sql="SELECT * FROM `proveedores` WHERE id='$id'";

$query=mysqli_query($con, $sql);

$row=mysqli_fetch_array($query);

require_once '../vendor/autoload.php'; // Carga el autoloader de Twig

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../templates');
$twig = new Twig\Environment($loader);

try {
    echo $twig->render('editar.html.twig', ['row' => $row]);
} catch (LoaderError|SyntaxError|RuntimeError $e) {
}
