<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/dashboard.css">
    <link rel="shortcut icon" href="../assets/devchallenges.png" />
    <title>Document</title>
</head>

<body>
    <header>
        <H1>Personal info</H1>
        <P>Basic info, like your name and photo</P>
    </header>
    <!-- <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre</h5>
            <p class="card-text">Alguna información adicional aquí.</p>
            <div class="line"></div>
        </div> -->
    <ul class="list-group list-group-flush card">
        <li class="list-group-item">
            <h4>Profile</h4> <br>
            <p>Some info may be visible to other people</p>
            <a href="/views/edit.php"><button type="button" class="btn btn-light">Edit</button></a> 
        </li>
        <li class="list-group-item li">
            <h3>PHOTO</h3> <img src="/assets/1Bruce.JPG " class="photo" alt="Foto de perfil">
        </li>
        <li class="list-group-item li">
            <h3>Name: </h3>
        </li>
        <li class="list-group-item li">
            <h3>Password: </h3>
        </li>
        <li class="list-group-item li">
            <h3>Phone: </h3>
        </li>
        <li class="list-group-item li">
            <h3>Bio:</h3>
        </li>
    </ul>
    <!-- <div class="card-body">
            <a href="#" class="card-link">Editar información</a>
        </div> -->
    </div>


</body>

</html>