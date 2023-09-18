
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //se trae el correo y contraseña de login
    $mail = $_POST["MAIL"];
    $pass = $_POST["PASS"];

    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php"); //conexión a la base de datos
    //se hace la consulta a la base de datos con los datos recibidos
    $declaration = $mysqli->query("SELECT * FROM registro WHERE MAIL = '$mail'");

    if ($declaration->num_rows == 1) { //se corrobora si se trae solo una fila
        $result = $declaration->fetch_assoc(); //convertimos el dato en un arreglo asociativo
        //verificamos si la contraseña es igual a la digitada 
        if (password_verify($pass, $result["PASS"])) {
            session_start();
            $_SESSION["user_data"] = $result; //todo el resultado de la base de dato se guarda en la variable de sesión
            header("location: /views/dashboard.php"); //se envia a la pagina donde estan los datos del usuario de la base de datos
        } else { // cuando la contraseña no existe en labase de datos
            session_start(); 
            $_SESSION["BAD"]="<p style ='color: red;'>La contraseña es incorrecta</p>";
            header("location: /views/login.php"); 
        }
    }  else{ //cuando el correo o existe en la base de datos
        session_start();
        $_SESSION["BAD"]="<p style ='color: red;'>El Correo no existe</p>";
        header("location: /views/login.php");
    }
}




?>