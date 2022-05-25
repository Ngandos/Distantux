<?php
    include "../include/connectMySql.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./devwebmessagerie.css">
    <link rel="stylesheet" href="../Jquery/jquery-ui.css">
    <title>Messagerie Dev Web</title>
</head>
<body>
    <header>
        <div id="headnav">
            <button type="submit" class="headnav"><a href="../EspaceDevWeb/devwebdashboard.php">Tableau de bord</a></button>
            <button type="submit" class="headnav">Ressources</button>
            <button type="submit" class="headnav">Mes documents</button>
            <button type="submit" class="headnav">Mon compte</button>
        </div> 
    </header>
    <section>
        <aside class="left">
            <button type="submit" class="messp" id="leftbutt">Nouveau message privé</button>
            <button type="submit" class="messgs" id="leftbutt">Mes messages</button>
            <button type="submit" class="grpchat" id="leftbutt">Discussion du groupe</button>
            <button type="submit" class="formcont" id="leftbutt">Discussion formateur</button>    
        </aside>
        <div class="right">
            <div id="mp">
                <h3>Message privé</h3>
                <form class="mp" action="" method="post">
                    <label id="mpform" for="auteur"></label>
                    <input id="mpform" type="text" name="auteur" id="auteur" hidden>
                    <label id="mpform" for="targt">Envoyer a :</label>
                    <input id="mpform" type="text" required name="targt">
                    <label id="mpform" for="etindeli"></label>
                    <textarea id="mpform" type="text" name="etindeli"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
            <div id="mesmess">
                <h3 class="mptitle">Mes messages</h3>
                <div class="messlist">
                    <?php
                        $req = $pdo->query("SELECT * FROM messages WHERE 1");
                        while($article = $req->fetch()){
                            echo <<<ARTICLE
                                <p><span>Le : {$article->date}</span>
                                <p><span class="messview">De : {$article->auteur}</span></p>
                            ARTICLE;
                        };   
                    ?>
                </div>
                <div class="messfetch">
                    <?php
                        $req = $pdo->query("SELECT * FROM messages WHERE 1");
                        while($article = $req->fetch()){
                            echo <<<ARTICLE
                                <p><span>De : {$article->auteur}</span></p>
                                <p><span>Message : {$article->message}</span></p> 
                            ARTICLE;
                        };   
                    ?> 
                </div>                         
            </div>
            <div id="forum">
                <h3>Forum de groupe DevWeb</h3>
                <div class="fil">
                    <?php
                        $req = $pdo->query("SELECT * FROM chatdevweb WHERE 1");
                        while($article = $req->fetch()){
                            echo <<<ARTICLE
                                <p>Le : {$article->actdate}, De : {$article->auteur}, Message : {$article->devwebforumact}</p>   
                            ARTICLE;
                        };   
                    ?>
                </div>
                <form class="forumact" action="./desmesscheck.php" method="post">
                    <label for="auteur">Auteur :</label>
                    <input type="text" name="auteur" value="auteur">
                    <label for="devwebforumact">Votre message :</label>
                    <input type="text" name="devwebforumact">
                    <input type="submit" value="Envoyer">
                </form>
            </div>
            <div id="messform">
                <h3>Discussion formateur</h3>
                <div class="filform">
                    <?php
                        $req = $pdo->query("SELECT * FROM messageswebdev WHERE 1");
                        while($article = $req->fetch()){
                            echo <<<ARTICLE
                                    <p>Le : {$article->date}, De : {$article->auteur}, Message : {$article->message}</p>     
                            ARTICLE;
                        };   
                    ?>
                </div>
                <form class="forumact" action="" method="post">
                    <label for="filact">Votre message :</label>
                    <input type="text" name="filact">
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </section>
    <script src="../Jquery/jquery-3.5.1.min.js"></script>
    <script src="../Jquery/jquery-ui.js"></script>
    <script src="../Jquery/Functions.js"></script>
</body>
</html>