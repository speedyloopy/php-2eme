<?php
$login = $_POST["login"];
$password = $_POST["password"];
$majeur = $_POST["majeur"];
$sexe = $_POST["sexe"];
$soutien = isset($_POST["soutien"]) ? $_POST["soutien"] : 0;
$nouvelle = isset($_POST["nouvelle"]) ? $_POST["nouvelle"] : 0;
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Ex2.2b</title>
            <meta charset="utf-8"/>
        </head>
        <body>
            <p>Login: <?= $login ?></p>
            <p>Password: <?= $password ?></p>
            <p>Majeur: <?= $majeur ?></p>
            <p>Genre: <?= $sexe ?></p>
            <p>êtes vous un membre de soutien: <?= $soutien?></p>
            <p>Lettre de nouvelle: <?= $nouvelle ?></p>
        </body>
    </html>
