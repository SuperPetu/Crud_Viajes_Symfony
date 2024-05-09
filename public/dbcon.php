<?php

function connection()
{

    $connection=mysqli_connect(
        'db', # service name
        'php_docker', # username
        'password', # password
        'php_docker' # db table
    );

    $table_name = "proveedores";

    $query = "SELECT * FROM $table_name";

    $response = mysqli_query($connection, $query); # mysqli_select_db($connection,DATABASE);

    return $connection;
}

