<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=distantux", 'Nguma', 'nguma');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }catch(Exception $e){
        echo 'erreur : ' .$e->getMessage(). '<br>';
        echo 'N° : ' .$e->getCode();
    } 

?>
