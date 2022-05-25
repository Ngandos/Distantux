<?php
    session_start();
    if(empty($_SESSION['pseudo'])){
        header('Location: ../designedconnex.php');
        }
    ?>
    <link rel="stylesheet" href="../distantux.css">
    <p>Bonjour <?= $_SESSION["pseudo"] ?> <?php if($_SESSION["niveau"] == 1){ echo "Vous etes Formateur";} elseif($_SESSION['niveau'] == 2){ echo "Vous étes Stagiaire";}?> Que souhaitez vous faire ?</p>

    <?php
        if($_SESSION['niveau'] == 1){
            echo '<a href="../MembSapces/GestMemb.php">Gérer les membres</a>';
            }
        ?>
    <a href="./articlegest.php">Gerer les messages</a>
    <a href="../Include/deco.php">Deconnexion</a>