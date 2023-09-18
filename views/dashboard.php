<?php
 session_start();
if (!isset($_SESSION["user_data"])) {
    header("location: /Handle_db/Dashboard.php");
    exit();
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/dashboard.css">
    <link rel="shortcut icon" href="../assets/devchallenges.png" />
    <title>Personal Information</title>
</head>

<body>
    <header>
        <H1>Personal info</H1>
        <P class="p1">Basic info, like your name and photo</P>
    </header>
    <ul class="list-group list-group-flush card">
        <li class="list" >
            <div class="li2" >
                <div class="profile">
                    <h4>Profile</h4> <br>
            <p class="p2">Some info may be visible to other people</p>
                </div>
            <a href="/views/edit.php"><button type="button" class="btn btn-light">Edit</button></a>
            </div>
            
        </li>
        <li class="list-group-item li">
            <h3>Photo:</h3> <?php
                            require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php"); //se conecta a la base de datos
                            $id = $_SESSION["user_data"]["ID"];
                            $jpg = $mysqli->query("SELECT * FROM registro WHERE ID = $id");
                            if ($row = $jpg->fetch_assoc()) {
                                $dataImg = base64_encode($row["PHOTO"]); //DECODIFICA LA FOTO
                                echo "<img src='data:image/jpg;base64,$dataImg' height='150' style='border-radius: 20px;'>                                ";
                            }
                            ?>
        </li>
     
        <li class="list-group-item li">
            <h3>Name: </h3> <span><?php echo $_SESSION["user_data"]["NOMBRE"]; ?></span>
        </li>
        <li class="list-group-item li">
            <h3>Bio: </h3> <span><?php echo $_SESSION["user_data"]["BIO"]; ?></span>
        </li>
        <li class="list-group-item li">
            <h3>Phone: </h3> <span><?php echo $_SESSION["user_data"]["PHONE"]; ?></span>
        </li>
        <li class="list-group-item li">
            <h3>Mail:</h3> <span><?php echo $_SESSION["user_data"]["MAIL"]; ?></span>
        </li>
        <li class="list-group-item li">
            <h3>Password:</h3> <span><?php echo substr($_SESSION["user_data"]["PASS"], 0, 0) . '**********'; ?></span>
        </li>
       
    </ul>
    <div class="card-body">
        <a href="../Handle_db/Logout.php" class="card-link">Logout</a>
    </div>
    </div>

</body>

</html>