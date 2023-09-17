<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/Login.css">
    <link rel="shortcut icon" href="../assets/devchallenges.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<body>
    <div class="card">
        <div class="card-body">
        <img src="/assets/devchallenges.svg" alt="##">
            <h5 class="card-title">Login</h5>
            <form action="/Handle_db/Login.php" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg></span>
                <input name="MAIL" type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                    </svg></span>
                <input name="PASS" type="test" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <button class="btn btn-primary" type="submit">Login</button>
            </form>
            <?php
            session_start(); //muestra un mensaje en pantalla despue de verificar la variable
            if (isset($_SESSION["BAD"])){
               echo $_SESSION["BAD"];
               unset($_SESSION["BAD"]); 
            }   
    
            ?>
            <p>or continue with these social profile</p>
            <div class="icon2">
                <img class="icon" src="/assets/Google.svg">
                <img class="icon" src="/assets/Facebook.svg">
                <img class="icon" src="/assets/Twitter.svg">
                <img class="icon" src="/assets/Gihub.svg">
            </div>

            <p>Don’t have an account yet? Register<a href="../Index.php" class="card-link"> Register</a></p>
        </div>
        <div class="lastline">
            <p>Create by <a href="">Pedro Salinas</a></p>
            <p>devchallenges.io <a href="https://devchallenges.io/"></a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</body>
</html>