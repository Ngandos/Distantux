<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin.css">
    <title>SignIn</title>
    <style type="text/css">
        .SignIn{
            margin: auto;
            padding: auto;
            display: block;
            width: 40%;
                }

        form{
            width: 100%;
            height: 40%;
            display: block;
            background-color: bisque;
            border: black solid 1px;
            margin-top: 30%;
            padding: auto;
            box-shadow: 2px 2px 4px black;
                }        

        .Inputs{
            margin: auto;
            width: 100%;
                }

        label{
            width: 100%;
            display: flex;
            margin: auto;
                }
    </style>
</head>
<body>
    <div class="SignIn">
        <form action="./confirm.php" method="POST">
            <div class="Inputs">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" placeholder="Nom">
            </div>
            <div class="Inputs">
                <label for="prenom">Prenom :</label>
                <input type="text" name="prenom" placeholder="prenom">
            </div>
            <div class="Inputs">
                <label for="pseudo">Pseudo :</label>
                <input type="text" name="pseudo" placeholder="Pseudo">
            </div>
            <div class="Inputs">
                <label for="nom">E-mail :</label>
                <input type="email" name="email" placeholder="E-mail">
            </div>
            <div class="Inputs">
                <label for="wordpass">Password :</label>
                <input type="password" name="wordpass" placeholder="Password">
            </div>
            <div class="Inputs">
                <label for="wordpass_confirm">Confirmez le mot de passe:</label>
                <input type="password" name="wordpass_confirm" placeholder="Password confirm">
            </div>
            <div class="Inputs">
                <input type="radio" name="niveau" required hidden value="1">
            </div>
            <div class="Inputs">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
</body>
</html>