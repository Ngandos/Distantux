<?php
    require '../include/connectMySql.php';

    if(isset($_POST['submit'])){
        if(empty($_POST['pseudo']) || empty($_POST['wordpass'])){
            echo 'remplissage absent';
        }
        else{
            $query = 'SELECT * FROM stagiaires WHERE pseudo = :pseudo LIMIT 1';
            $statement = $pdo->prepare($query);
            $statement->execute(
                array('pseudo' => $_POST['pseudo']));

            $count = $statement->rowCount();
            if($count > 0) {
                $resultat = $statement->fetch(PDO::FETCH_ASSOC);
                
            if(password_verify($_POST['wordpass'], $resultat['wordpass'])){
                session_start();
                $_SESSION['pseudo'] = $_POST['pseudo'];
                $_SESSION['idformation'] = $resultat['idformation'];
                setcookie('pseudo', time() + (86400));
                exit(header('location: devwebdashboard.php'));
                    }else{
                        echo 't\'es naze';
                        header ('location: ../connexion.php');
                            }
                    }
                    else{
                        echo 'nul nul nul';
                            }
                }
        }
?>