<?php 
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // se convierte la imagen a binario
    $img_blob = addslashes(file_get_contents($_FILES ["PHOTO"]["tmp_name"]));    
 
    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php"); // te conecta a la base de datos login_db
    

    $mysqli->query("INSERT INTO registro(PHOTO) VALUES ('$img_blob')"); //sube la imagen a la base de datos
    header("location: /views/edit.php");

}

