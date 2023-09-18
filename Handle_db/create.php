<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["MAIL"]; 
    $pass = $_POST["PASS"];
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

    try {
        $result = $mysqli->query("INSERT INTO registro(MAIL,PASS) VALUES ('$email','$hash')"); 
     
    if($result) {
                    header("location: /views/dashboard.php");
}

            
        
    else {
        echo "Error al registra el nuevo usuario";
    }
    } catch (mysqli_sql_exception $e) {
        if ($mysqli->errno === 1062) {
            /* session_start(); */
            $_SESSION["duplicado"]= "<p style ='color: red;'>El correo esta Registrado</p>"; 
            header("location: /Index.php");
        } else {
            echo "Error:" . $e->getMessage();
        }
         
    }
  
}
