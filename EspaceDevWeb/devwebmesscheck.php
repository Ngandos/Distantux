<?php
    if(!empty($_POST)){
        $errors = array();

    if(empty($_POST['auteur'])){
        echo 'Renseignez votre prenom';
        }      
    if(empty($_POST['devwebforumact'])){
        echo 'Remplissage absent';
        }
    else{
        require "../include/connectMySql.php";
        $req = $pdo->prepare("INSERT INTO chatdevweb SET auteur = ?, devwebforumact = ?");
        $req->execute([$_POST['auteur'], $_POST['devwebforumact']]);
        header('location: ./desmessenger.php');
        exit();
        }
    }
    if(isset($errors)){
        echo '<font color=red>' .$errors. '</font>';
        header('location: ../dynamics/desmessenger.php');  
            }
    ?>