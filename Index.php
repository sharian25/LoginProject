<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New User</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Join thousands of learners from around the world</h5>
            <p class="card-text">Master web development by making real-life projects. There are multiple paths for you to choose</p>
            <form action="./Handle_db/create.php" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg></span>
                <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                    </svg></span>
                <input name="pass" type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <button class="btn btn-primary" type="submit">Start coding now</button>
            </form>
            <p>or continue with these social profile</p>
            <div class="icon2">
                <img class="icon" src="./assets/Google.svg">
                <img class="icon" src="./assets/Facebook.svg">
                <img class="icon" src="./assets/Twitter.svg">
                <img class="icon" src="./assets/Gihub.svg">
            </div>

            <p>Adready a member? Login<a href="#" class="card-link"> Login</a></p>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>

<!-- <div class="join">
    <h2>Join thousands of learnes from aroun the word</h2>
    <p>Master web develoope ment by making real-life project. There are multiple paths for you to choose</p>
    <input class="regist" type="text" placeholder="Email"> 
    <input class="regist" type="text" placeholder="Password"> 
    <button type="submit">Star coding now</button> 
    </div> -->