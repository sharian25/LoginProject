<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"]; 
    $pass = $_POST["pass"];

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

    $result = $mysqli->query("INSERT INTO registro(email,pass) VALUES ('$email','$pass')"); 
    

    if($result) {
        header("location: /index.php");
    }else {
        echo "Error al registra el nuevo usuario";
    }
  
} 
?>