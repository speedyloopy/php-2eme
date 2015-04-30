 <?php

$prixMaison = $_POST["prix"];
$fondsPropres = $_POST["fonds"];
 
$montantMin = $prixMaison *0.2;
 
$montantPret = $prixMaison - $fondsPropres;
 
$montantPremierRang = $montantPret * 0.2;
 
$montantDeuxiemeRang = $montantPret * 0.8;

$demiPrixMaison = $prixMaison * 0.5;

$taux_premier_degre = $montantPret * 0.035;

$taux_deuxieme_degre = $montantPret * 0.025;

    if ($fondsPropres >= $demiPrixMaison) {
            $tauxriche = "$taux_premier_degre";
        }else{
            $tauxriche = "c'est bien tu es riche #radin";
 } 
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 3-001 </title>
    </head>
    <body>
        
        <?php
            if($fondsPropres >= $montantMin){
                echo"<p>le pret se monte à: </p> $montantPret";
                echo"<p>Montant du premier rang: </p> $montantPremierRang";
                echo"<p>Montant du deuxième rang: </p> $montantDeuxiemeRang";
                echo"<p>Montant du taux premier degré: </p> $tauxriche";
                echo"<p>Montant du taux deuxième degré: </p> $taux_deuxieme_degre";
                
                
            } else {
                    
        ?>
        <h1>Vous êtes Pauvre, Achetez vous plutot un carton et un accordéon</h1>
    
<?php
    }
?>
    </body>

</html>
