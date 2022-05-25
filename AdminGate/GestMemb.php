<?php
    session_start();
    if(empty($_SESSION['pseudo'])){
        header('location: ./designedconnex.php');
    }
if($_SESSION['niveau'] != 1){
    header('location: ./MembSapces/GestMemb.php');
    }
include "../Include/header.php";
?>
<link rel="stylesheet" href="../distantux.css">
<style type="text/css">
        form{ 
            width: 25%;
            padding: auto;
            padding-left: 1%;
            margin: auto;
            margin-top: 20%;
            background-color: #232323;
            box-shadow: black 4px 4px 4px;
            color: white;
              }
</style>
<div>Liste des membres</div>

<table>
    <tr> <th>ID</th> <th>Pseudo</th> <th>Adresse Mail</th> <th>Niveau</th></tr>
    <?php
        include "../include/connectMySql.php";
        $req = $pdo->query("SELECT * FROM stagiaires");
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>" . $data['ID'] . "</td><td>" .$data['pseudo']. "</td><td>" .$data['email']. "</td><td>" .$data['niveau']. "</td>";
            echo "<td>";
            echo "<a href='./MembSapces/UpdateMemb.php?id=" .$data['ID']. "'>Modifier</a> ";
            echo "<a href=''>Supprimer</a> ";
            echo "</td></tr>";
        }
        ?>
</table>