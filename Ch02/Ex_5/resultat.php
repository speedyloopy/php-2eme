<?php

$valeurADeviner = (int)$_POST["valeurADeviner"];
$valeurEntree =(int) $_POST["nombre"];

$gagne = $valeurADeviner == $valeurEntree;

if ($gagne) {
    $titre = "you Win";
    }else{
        $titre = "You Loose";
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= $titre ?></title>
        <meta content ="">
    </head>
    <body>
        <?php
            if($gagne) {
                echo "<h1>Vous avez gagné</h1>";
                
            } else {
        ?>
        <h1> Vous avez perdu</h1>
        <a href ="javascript:history.back()">réessayer</a>
        
    </body>
</html>
