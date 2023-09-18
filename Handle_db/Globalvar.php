<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

$sql = "SELECT * FROM registro"; //se hace una nueva consulta en la tabla
$resultado = $mysqli->query($sql); //se traen los valores ya actualizados

        if ($resultado->num_rows === 1) {
        // Obtén la fila con los nuevos datos 
        $fila = $resultado->fetch_assoc(); //se crea un arreglo asociativo

        // Actualiza $_SESSION["user_data"] con los nuevos datos
        $_SESSION["user_data"] = $fila; 
            header("location: /views/dashboard.php");
}