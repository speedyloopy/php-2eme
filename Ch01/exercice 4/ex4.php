<?php
/**
 * ce script est notre premier
 * 
 * @author mg <Martial.GRIN@cpnv.ch>
 * @date 2015.02.19
 * 
 */
 
 //Variables
$nom        = "Gaston Lagaffe";
$var1       = 10;
$var2       = 3.3;
$operation  = 0;

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>exercice 4</title>
    </head>
    
        <?php
        echo "Bonjour <strong>$nom</strong> <br>";
        
        $operation = $var1 + $var2;
        echo "var1 + var2  = $operation <br>";
        
        $operation = $var1 % $var2;
        echo "var1 % var2 = $operation <br>";
        
        $operation = round($var1 / $var2);
        echo "division entière de var1 par var2 = $operation <br>";
        
        $var1 += 20;
        echo "incrémentation de 20 pour var1: $var1 <br>";
        
        $var1 ++;
        echo "incrémentation de 1 pour var1: $var1 <br>";
        
        $var1 = (int) $var2;
        echo "var 1 vaut la valeurentière de var2: $var1 <br>";
        
        
        
         
        
        ?>
</html>
