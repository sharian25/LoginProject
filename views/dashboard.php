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
        <P>Basic info, like your name and photo</P>
    </header>
    <ul class="list-group list-group-flush card">
        <li class="list-group-item">
            <h4>Profile</h4> <br>
            <p>Some info may be visible to other people</p>
            <a href="/views/edit.php"><button type="button" class="btn btn-light">Edit</button></a>
        </li>
        <li class="list-group-item li">
            <h3>Photo:</h3> <?php echo $_SESSION["user_data"]["PHOTO"];?>
        </li>
        <li class="list-group-item li">
            <h3>Name: </h3> <?php echo $_SESSION["user_data"]["NOMBRE"];?>
        </li>
        <li class="list-group-item li">
            <h3>Bio: </h3> <?php echo $_SESSION["user_data"]["BIO"];?>
        </li>
        <li class="list-group-item li">
            <h3>Phone: </h3> <?php echo $_SESSION["user_data"]["PHONE"];?>
        </li>
        <li class="list-group-item li">
            <h3>Mail:</h3>  <?php  echo $_SESSION["user_data"]["MAIL"];?>
                                
                                
        </li>
        <li class="list-group-item li">
        <h3>Password:</h3> <?php echo substr($_SESSION["user_data"]["PASS"], 0,0) . '**********'; ?>
 
        <!-- <h3>Password:</h3> --> <?php // echo $_SESSION["user_data"]["PASS"];?> 
        </li>
    </ul>
    <div class="card-body">
        <a href="../Handle_db/Logout.php" class="card-link">Logout</a>
    </div>
    </div>

</body>

</html>