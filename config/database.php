<?php

try {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "dev3";

    $mysqli = new mysqli($hostname,$username,$password,$database);
    
    if ($mysqli->connect_error){
        throw new Exception("Error de Conexión: " . $mysqli->connect_error);
    }

} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
}

?>