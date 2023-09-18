<?php
session_start();
$id= $_SESSION["user_data"]["ID"]; //se trae el ID de la fila. 
//echo "ESTE ES EL ID DE LA FILA $id";

if ($_SERVER["REQUEST_METHOD"] === "POST") { // se captura en variables lo introducido en los inputs
    $email = $_POST["MAIL"]; 
    $pass = $_POST["PASS"];
    $nombre = $_POST["NOMBRE"];
    $bio = $_POST["BIO"];
    $phone= $_POST["PHONE"];
    $hash = password_hash($pass, PASSWORD_DEFAULT); // contraseña codificada

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php"); //conexión a la base de datos

    $result = $mysqli->query("UPDATE registro SET   
        MAIL = '$email', 
        PASS = '$hash',
        NOMBRE = '$nombre',
        BIO = '$bio',
        PHONE = '$phone'
        WHERE ID = $id"); //nuevos datos actualizando la fila y sus valores

            if($result) {
                $sql = "SELECT * FROM registro WHERE ID = $id"; //se hace una nueva consulta en un ID
                $resultado = $mysqli->query($sql); //se traen los valores ya actualizados

                        if ($resultado->num_rows === 1) {
                        // Obtén la fila con los nuevos datos 
                        $fila = $resultado->fetch_assoc(); //se crea un arreglo asociativo

                        // Actualiza $_SESSION["user_data"] con los nuevos datos
                        $_SESSION["user_data"] = $fila; 
                            header("location: /views/dashboard.php");
    }else {
        echo "Error al actualizar  La información personal";
    }
} 
}
?>
    /* try {
    } catch (mysqli_sql_exception $e) {
        if ($mysqli->errno === 1062) {
            session_start();
            $_SESSION["duplicado"]= "<p style ='color: red;'>El correo esta Registrado</p>"; 
            header("location: /Index.php");
        } else {
            echo "Error:" . $e->getMessage();
        }
         
    } */
  
 



