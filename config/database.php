<?php

try {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $bname = "login";

    $mysqli = new mysqli($hostname,$username,$password,$bname);

} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
}

?>