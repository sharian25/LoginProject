<?php
session_start();
var_dump($_SESSION);
$email = $_SESSION["user_data"]["MAIL"];
var_dump($email);


require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

 //se hace una nueva consulta en la tabla
$resultado = $mysqli->query("SELECT * FROM registro WHERE MAIL ='$email'"); //se traen los valores ya actualizados

        if ($resultado->num_rows == 1) {
        // Obténemos los nuevos datos 
        $fila = $resultado->fetch_assoc(); //se crea un arreglo asociativo

        //Actualiza $_SESSION["user_data"] con los nuevos datos
        $_SESSION["user_data"] = $fila; 
           header("location: /views/dashboard.php");
} else {
    echo "no esta guardando nada";
}
