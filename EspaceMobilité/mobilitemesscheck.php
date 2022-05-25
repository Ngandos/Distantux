<?php
    if(!empty($_POST)) {
        $errors = array();
    if(empty($_POST['auteur'])) {
        echo 'auteur';
        }
    if(empty($_POST['idformation'])) {
        echo 'indiquez idformation';
        }
    if(empty($_POST['react'])) {
        echo 'Remplissage absent';
        }
    else {
        require "../include/connectMySql.php";
        $req = $pdo->prepare("INSERT INTO chatdevweb SET idformation = ?, auteur = ?, react = ?");
        $req->execute([$_POST['idformation'], $_POST['auteur'], $_POST['react']]);
        header('location: ../EspaceDevWeb/devwebdashboard.php');
        exit();
            }
    }
?>
