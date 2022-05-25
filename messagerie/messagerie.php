<?php
    include "../include/connectMySql.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="messagerie.css">
    <title>Messenger</title>
</head>
<body>
    <header>
        <button type="submit"><a class="return" href="../EspaceDevWeb/devwebdashboard.php">Retour</a></button>
    </header>
    <section class="main">
        <aside class="left">
            <div class="studargument">
                <h3>Discution groupe</h3>
                <div class="argue">
                    <?php
                    $req = $pdo->query("SELECT * FROM chatdevweb WHERE 1");
                    while($article = $req->fetch()) {
                        echo <<<ARTICLE
                                <span id="fil"><p class="datamess">{$article->date} De : {$article->auteur}, {$article->message}</p></span>
                                ARTICLE;
                            };
                        ?>
                </div>
            </div>
            <div class="interact">
                <form action="messcheck.php" method="POST">
                    <label for="idformation"></label>
                    <input type="radio" hidden required name="idformation" value="1">
                    <label for="auteur"></label>
                    <input type="text" hidden name="auteur" value="ngando">        
                    <label for="react"></label>
                    <input type="text" name="react" class="react">
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </aside>
    </section>
</body>
</html>