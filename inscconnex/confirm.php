<?php
    if(!empty($_POST)){
        $errors = array();

    if(empty($_POST['nom'])){
        echo 'Renseignez votre nom';
        }
    if(empty($_POST['prenom'])){
        echo 'Renseignez votre prenom';
        }      
    if(empty($_POST['pseudo'])){
        echo 'Renseignez votre pseudo';
        }
    elseif(empty($_POST['email'])){
        echo 'Renseignez un email !';
        }
    elseif(empty($_POST['wordpass'])){
        echo 'Remplir le champ mot de passe';
        }
    elseif(empty($_POST['wordpass_confirm'])){
        echo 'erreur';
        }
    elseif(($_POST['wordpass']) != ($_POST ['wordpass_confirm'])){
        echo 'Les mots de passe ne correspondent pas';
        }
    else{
        require "../include/connectMySql.php";
        $req = $pdo->prepare("INSERT INTO formateurs SET nom = ?, prenom = ?, pseudo = ?, email = ?, wordpass = ?, niveau = ?");
        $password = password_hash($_POST['wordpass'], PASSWORD_BCRYPT);
        $req->execute([$_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['email'], $password, $_POST['niveau']]);
        header('location: ../EspacesIntervenants/designedconnex.php');
        exit();
        }
    }
    if(isset($errors)){
        echo '<font color=red>' .$errors. '</font>';
        header('location: /SignIn.php');  
            }
    ?>