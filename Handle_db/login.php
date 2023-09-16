
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mail = $_POST["MAIL"];
    $pass = $_POST["PASS"];

    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
    $declaretion = $mysqli->query("SELECT * FROM registro WHERE MAIL = '$mail'");

    if ($declaretion->num_rows == 1) {
        $result = $declaretion->fetch_assoc();


        if (password_verify($pass, $result["PASS"])) {
            session_start();
            $_SESSION["user_data"] = $result;
            header("location: /views/dashboard.php");
        }
    }
}



?>