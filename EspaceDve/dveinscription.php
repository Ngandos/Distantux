<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../distantux.css">
    <link rel="stylesheet" href="dvestudents.css">
    <title>Inscription</title>
</head>
<body>
    <form action="./dveinscconf.php" method="$_POST">
        <div class="fields">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" placeholder="Nom">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" placeholder="Prénom" >
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" placeholder="Pseudo">
            <label for="email">Email :</label>
            <input type="text" name="email" placeholder="E-mail">
            <label for="wordpass">Mot de passe :</label>
            <input type="password" name="wordpass" placeholder="Mot de Passe"> 
            <label for="wordpass_confirm">Confirmez le mot de passe :</label>
            <input type="password" name="wordpass_confirm" placeholder="Confirmez le mot de passe">
            <input type="radio" hidden required name="idformation" value="1">
        </div>
    <div>
        <button type="submit">Valider</button>
    </div>
    </form>
</body>
</html>