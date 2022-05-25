<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../designform.css">
    <style type="text/css">
        .login-div {
            width: 30%;
            height: 70%;
            display: flex;
            flex-direction: column;
            margin: auto;
            background-color: black;
            opacity: 0.8;
            padding-top: 5%;
            margin-top: 5%;
                }
        .ID {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: black solid 1px;
            box-shadow: 3px 3px 8px #b1b1b1, -3px -3px 8px #ffffff;
                }

        h2 {
            color: white;
        }
    </style>
    <title>Connexion</title>
</head>
<body>
    <form class="login-div" method="POST" action="./glog_exec.php">
        <div class="logo">
            <img class ="ID" src="../images/Unknown.png" alt="AIFOR">
        </div>
        <div class="title">
            <h2>FOAD</h2>
        </div>
        <div class="fields">
            <div class="username">
                <input type="text" class="user-input" required name="pseudo" placeholder="Pseudo">
            </div>
            <div class="password">
                <input type="password" class="pass-input" required name="wordpass" placeholder="Mot de passe" >
            </div>
        </div>
        <input type="submit" class="signin-button">Connexion</input>
        <div class="link">
            <a href="#">forgot password</a>
            <a href="./SignIn.php">S'inscrire</a>
        </div>
    </form>
</body>
</html>