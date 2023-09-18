<?php 
session_start();
$id = $_SESSION["user_data"]["ID"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_FILES["PHOTO"]["size"] > 0) { // Verifica si se ha seleccionado un archivo
        // Se convierte la imagen a binario
        $img_blob = addslashes(file_get_contents($_FILES["PHOTO"]["tmp_name"]));

        require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php"); // Conecta a la base de datos login_db

        $mysqli->query("UPDATE registro SET PHOTO= '$img_blob' WHERE ID = $id"); // Sube la imagen a la base de datos
        header("location: /views/edit.php");
    } else {
        // El archivo está vacío, realiza la gestión de errores o redirecciona a una página de error.
        $_SESSION["vacio"]= "<p style ='color: red;'>No hay un Archivo</p>";
        header("location: /views/edit.php");
        echo "Error: No se ha seleccionado ningún archivo o el archivo está vacío.";
        // O redirige a una página de error
        // header("location: /error.php");
    }
}



