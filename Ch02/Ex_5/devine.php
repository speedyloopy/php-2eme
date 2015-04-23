<?php>


const NBR_MIN =0;
const NBR_MAX =5;

$nombre = rand (NBR_MIN, NBR_MAX);


?>
<!DOCTYPE html>
<html>
    <head>
          <meta charset="UTF-8">
          <title>Exercice 5</title>
      </head>
    <body>
        <h3>Jeu de devinette</h3>
        <p>Devinez un nombre entre 0 et 5</p>
        <form name="form1" method="post" action="resultat.php">
        <input type="text" name="nbr">
        
        </form>
    </body>
</html>
