<?php //validar este codigo y actualizar los datos
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["MAIL"]; 
    $pass = $_POST["PASS"];
    $nombre = $_POST["NOMBRE"];
    $bio = $_POST["BIO"];
    $phone= $_POST["PHONE"];
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

    
        $result = $mysqli->query("INSERT INTO registro(MAIL,PASS) VALUES ('$email','$hash','$nombre','$bio','$phone')"); 
        
     

    if($result) {
        header("location: /views/dashboard.php");
    }else {
        echo "Error al actualizar  La información personal";
    }

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
  
} 
?>