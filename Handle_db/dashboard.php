<?php
 session_start();
if (!isset($_SESSION["user_data"])) {
    echo "no existe sesión iniciada";
    exit();
 //   header("location: /views/login.php");
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/devchallenges.png" />
    <title>Document</title>
</head>

<body>

    <?php
//session_start();
    $correo =  $_SESSION["user_data"]["MAIL"];
    echo "<h1>ESTAS LOGEADO FELICITACIONES $correo</h1>";
    ?>
    <a href="../Handle_db/Logout.php">Logout</a>

</body>

</html>