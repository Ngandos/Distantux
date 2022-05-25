<?php
    if(!empty($_POST)) {
        $errors =  array();

    if(empty($_POST['nom'])) {
        echo 'Saississez un nom';
            }
    if(empty($_POST['prenom'])) {
        echo 'Saisissez votre prenom';
            }
    if(empty($_POST['pseudo'])) {
        echo 'Saisissez votre pseudo';
            }
    elseif(empty($_POST['email'])) {
        echo 'Renseignez un E-mail';
            }
    elseif(empty($_POST['wordpass'])) {
        echo 'Créez votre mot de passe';
            }
    elseif(empty($_POST['wordpass_confirm'])) {
        echo 'Confirmez le mot de passe';
            }
    elseif(($_POST['wordpass']) != ($_POST['wordpass_confirm'])) {
        echo 'Les mots de passe ne correspindent pas';
            }

    else{
        require "./SQL/connectmysql.php";
        $req = $pdo->prepare("INSERT INTO stagiairesdve SET nom = ?, prenom = ?, pseudo = ?, email = ?, wordpass = ?, idformation = ? ");
        $password = password_hash($_POST['wordpass'], PASSWORD_BCRYPT);
        $req->execute([$_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['email'], $password, $_POST['idformation']]);
        header('location: ./connexion.php');
        exit();
            }
    }
    if(isset($errors)) {
        echo '<font color=red>' .$errors. '</font>';
        header('location: ./dveinscription.php');
    }
    ?>