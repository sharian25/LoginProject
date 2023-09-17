<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/devchallenges.png" />
    <title>Edit information</title>
</head>

<body>
    <div>
        <form action="/Handle_db/Upload_img.php" method="post" enctype="multipart/form-data">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <?php
                        require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
                        $jpg = $mysqli->query("SELECT * FROM registro");
                        while ($row = $jpg->fetch_assoc()) {
                            $dataImg = base64_encode($row["PHOTO"]); //decodifica la imagen a su estado original
                            echo "<img src='data:image/jpg;base64,$dataImg' class='img-fluid rounded-start' img alt='photo'>";
                        }
                        ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">CHANGE PHOTO</h5>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Update photo</label>
                                <input class="form-control" type="file" id="formFile" name="PHOTO">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form action="./Handle_db/Edit.php" method="post">
            <label>Name</label>
            <div class="form-floating mb-3">
                <input name="NOMBRE" type="text" class="form-control" id="floatingInput" placeholder="Enter your name">
                <label for="floatingInput">Enter your name. . .</label>
            </div>
            <label>Bio</label>
            <div class="form-floating">
                <input name="BIO" type="texarea" class="form-control" id="floatingPassword" placeholder="Bio">
                <label for="floatingPassword">Bio</label>
            </div>
            <label>Phone</label>
            <div class="form-floating mb-3">
                <input name="PHONE" type="number" class="form-control" id="floatingInput" placeholder="Enter your phone">
                <label for="floatingInput">Phone</label>
            </div>
            <label>Email</label>
            <div class="form-floating">
                <input name="MAIL" type="email" class="form-control" id="floatingPassword" placeholder="Enter your mail">
                <label for="floatingPassword">E-mail</label>
            </div>
            <label>Password</label>
            <div class="form-floating">
                <input name="PASS" type="password" class="form-control" id="floatingPassword" placeholder="Update your password">
                <label for="floatingPassword">Password</label>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
    </div>

</body>

</html>