<?php
    session_start();

    $id = $_GET['ID'];

        if(!empty($_POST)){
            $pseudo = $_POST['pseudo'];
            $email = $_POST['email'];
            require "../include/connectMySql.php";
            $req = $base->prepare("UPDATE stagiaires SET pseudo = ?, email = ? WHERE id = ?");
            $req->execute(array($pseudo, $email, $id));
            header('location: ./MembSapces.php');
        }
    ?>
<link rel="stylesheet" href="../distantux.css">
<style type="text/css">
        h1{
            text-align: center;
                }
        label { 
            display: inline-block;
            width: 100%;
            font-size: larger;
            font-weight: bold;
                }

        input { 
            font: 1em sans-serif;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid darkblue;
                    }

        input:focus, textarea:focus {
                border-color: darkblue;
                background-color: rgba(255, 102, 0, 0.24);
                                }
</style>
    <h1>Gestion des membres</h1>
    <div class="Contacts">
        <div class="form">
            <form action="#" method="POST">
                <div class="Inputs">
                    <label for="pseudo">Pseudo à changer</label>
                    <input type="text" name="pseudo" id="pseudo">
                </div>
                <form class="Inputs">    
                    <label for="email">E-mail à modifier</label>
                    <input type="email" name="email" id="">
                </div>
                <div class="Inputs">
                    <input type="submit" value="send">
                </div>
            </form>
        </div>    
    </div>
<?php
echo 'ID numéro : ' .$id  
?>