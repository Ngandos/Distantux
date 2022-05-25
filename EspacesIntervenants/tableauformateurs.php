<?php
    include "../include/connectMySql.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">
    <title>Tableau de bord</title>
</head>
<body>
    <header>
        <div class="ID">
            <img class="user" src="../images/Unknown.png">
            <h2>FOAD</h2>
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
                <button class="navbut"><a class="navlinks" href="#">Gestion Vidéos Cours</a></button>
                <button class="navbut"><a class="navlinks" href="../EspacesIntervenants/resourcespedagogiques.php">Gestion de ressources pédagogiques</a></button>
                <button class="navbut"><a class="navlinks" id="cal" href="../calendar/calendar.php">Planning</a></button>
                <button class="navbut"><a class="navlinks" href="./gestionapprenants/gestionapprenants.php">Gestion des apprenants</a></button>
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
                            <span id="devmess"><p class="datamess">{$article->date}, {$article->idformation}, {$article->auteur}, <a href="../EspacesIntervenants/formdialwindow.php"> Ouvir</a></p></span>
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
                        <option selected="selected" value="">indiquez le groupe de discussion</option>
                        <option value="Formateurs">Forum des formateurs</option>
                        <option value="Webdev">Forum Developpeurs web</option>
                        <option value="D.V.E">Forum D.V.E</option>
                        <option value="L.E.A">Forum L.E.A</option>
                        <option value="Mobilité">Forum Mobilité</option>
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