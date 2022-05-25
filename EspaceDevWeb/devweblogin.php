<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../designform.css">
    <style type="text/css">
        .login-div {
            background-color: black;
            opacity: 0.8;
                }
        .ID {
            height: 50%;
            width: 50%;
            border-radius: 50%;
            border: black solid 1px;
            box-shadow: 3px 3px 8px #b1b1b1, -3px -3px 8px #ffffff;
                }
    </style>
    <title>Connexion</title>
</head>
<body>
    <form class="login-div" method="POST" action="./devweblogexec.php">
        <div class="logo"></div>
        <div class="title">
            <img class ="ID" src="../images/Unknown.png" alt="AIFOR">
        </div>
        <div class="sub-title">
            <h2>FOAD</h2>
        </div>
        <div class="fields">
            <div class="username">
                <label for="pseudo">Nom</label>
                <input type="text" class="user-input" required name="pseudo" placeholder="Pseudo">
            </div>
            <div class="wordpass">
                <label for="wordpass">Mot de passe</label>
                <input type="password" class="pass-input" required name="wordpass" placeholder="Mot de passe" >
            </div>
        </div>
        <button type="submit" class="signin-button">Connexion</button>
        <div class="link">
            <a href="#">forgot password</a>
            <a href="#">S'inscrire</a>
        </div>
    </form>
</body>
</html>