<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/devchallenges.png" />
    <link rel="stylesheet" href="../styles/Edit.css">
    <title>Edit information</title>
</head>

<body>
    <div class="change">
        <a href="./dashboard.php"> < Back</a>
        <form action="/Handle_db/Upload_img.php" method="post" enctype="multipart/form-data">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <?php
                        require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php"); //se conecta a la base de datos
                        $id = $_SESSION["user_data"]["ID"];
                        $jpg = $mysqli->query("SELECT * FROM registro WHERE ID = $id");
                        if ($row = $jpg->fetch_assoc()) {
                            $dataImg = base64_encode($row["PHOTO"]); //DECODIFICA LA FOTO
                            echo "<img src='data:image/jpg;base64,$dataImg' class='img-fluid img-rounded' alt='photo'>";
                        }
                        ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">CHANGE PHOTO</h5>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Update photo</label>
                                <input class="form-control file" type="file" id="formFile" name="PHOTO">
                                <input class="btn btn-primary" type="submit" value="Save">
                            </div>
                            <?php
                            if (isset($_SESSION["vacio"])) {
                                echo $_SESSION["vacio"];
                                unset($_SESSION["vacio"]);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form action="../Handle_db/Edit.php" method="post" class="form">
            <label>Name</label>
            <div class="form-floating mb-3">
                <input name="NOMBRE" type="text" class="form-control" value="<?= $_SESSION["user_data"]["NOMBRE"] ?>">
                <label for="floatingInput">Enter your name...</label>
            </div>
            <label>Bio</label>
            <div class="form-floating">
                <input name="BIO" type="textarea" class="bio" rows="4" cols="30" value="<?= $_SESSION["user_data"]["BIO"] ?>">
                <label for="floatingPassword">Bio...</label>
            </div>
            <label>Phone</label>
            <div class="form-floating mb-3">
                <input name="PHONE" type="text" class="form-control" value="<?= $_SESSION["user_data"]["PHONE"] ?>">
                <label for="floatingInput">Phone...</label>
            </div>
            <label>Email</label>
            <div class="form-floating">
                <input name="MAIL" type="email" class="form-control" value="<?= $_SESSION["user_data"]["MAIL"] ?>">
                <label for="floatingPassword">E-mail...</label>
            </div>
            <label>Password</label>
            <div class="form-floating">
                <input name="PASS" type="password" class="form-control" value="<?= substr($_SESSION["user_data"]["PASS"], 0, 0) . '**********'; ?>">
                <label for="floatingPassword">Password...</label>
            </div>
            <input class="btn btn-primary" type="submit" value="save">
        </form>
    </div>
    <div class="lastline">
        <p>Create by <a href="">Pedro Salinas</a></p>
        <p>devchallenges.io <a href="https://devchallenges.io/"></a></p>
    </div>

</body>

</html>