<?php
    include "../include/connectMySql.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./leastudent.css">
    <style type="text/css">
        h2 {
            margin-right: 6%;
        }
        p {
            margin-top: 5%;
            font-size: x-large;
        }
    </style>
    <title>Tableau de bord L.E.A</title>
</head>
<body>
    <header>
        <div class="ID">
            <img class="user" src="../images/Unknown.png">
            <h2>FOAD</h2>
            <p>Espace L.E.A</p>
        </div>
        <div class="secondnav">
            <div class="Lykos">
                <input type="text" name="search" class="look">
                <input type="submit" class="lookbut" value="Rechercher">
            </div>
            <div class="secnavcont">
                <button class="secnavbut"><a class="menu" href="#">Formation</a></button>
                <button class="secnavbut"><a class="menu" href="#">Notifications</a></button>
                <button class="secnavbut"><a class="menu" href="#">Mon compte</a></button>
            </div>
        </div>
    </header>
    <br>
    <section class="Middle">
        <article class="menu">
            <div class="nav">
                <button class="navbut"><a class="navlinks" href="#">Profil d'utilisateur</a></button>
                <button class="navbut"><a class="navlinks" href="#">Vidéos Cours</a></button>
                <button class="navbut"><a class="navlinks" href="../EspacesIntervenants/resourcespedagogiques.php">Ressources pédagogiques</a></button>
                <button class="navbut"><a class="navlinks" id="cal" href="../calendar/calendar.php">Planning</a></button>
                <button class="navbut"><a class="navlinks" href="./gestionapprenants/gestionapprenants.php">Gestion des documents</a></button>
                <button class="navbut"><a class="navlinks" href="./formdialwindow.php">Espace messagerie</a></button>
            </div>
        </article>
        <aside class="interactions">
            <div class="messages">
                <h3>Messages :</h3>
            <?php
                $req = $pdo->query("SELECT * FROM messages WHERE 1");
                while($article = $req->fetch()) {
                    echo <<<ARTICLE
                            <span id="devmess"><p class="datamess">{$article->date}, {$article->auteur}, <a href="../EspacesIntervenants/formdialwindow.php"> Ouvir</a></p></span>
                            ARTICLE;
                        };
                    ?>
            </div> 
            <div class="doc">
                <h3>Documents :</h3>
                <form action="" method="POST">
                    <label id="files" for="upload">Uploadez un document :</label><br>
                    <input id="files" type="file" name="upload"><br>
                    <label id="files" for="fileget">Rechercher un document :</label><br>
                    <input id="files" type="text" name="fileget" id="look"><br>
                    <button type="submit" class="filebut">Rechercher</button>
                </form>
            </div>
            <div class="invoices">
                <form id="grpmess" action="" method="POST">
                    <label for="message" id="mess">Ecrivez votre message :</label>
                    <textarea type="text" id="mess" name="message" placeholder="Votre message"></textarea>
                    <select required name="formation" id="mess">
                        <option selected="selected" value="">Choisir un serveur de discussion</option>
                        <option value="Formateurs">Forum genéral de la promo</option>
                        <option value="Webdev">Forum apprenants</option>
                        <option value="D.V.E">Forum Privé</option>
                        <option value="L.E.A">Forum Privé</option>
                        <option value="Mobilité">Forum Privé</option>
                    </select>
                    <button type="submit" class="messbut">Envoyer</button>
                </form>
            </div>
            <div class="planning">
                <a class="plan" id="cal" href="./calendar/calendar.php">Planning</a>
            </div>
        </aside>
    </section>
<?php
    include '../include/footer.php';
?>