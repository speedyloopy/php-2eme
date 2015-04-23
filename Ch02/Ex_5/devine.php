<?php


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
        <form name="form1" method="post" action="resultat.php">
            <label>
                Devinez un nombre entre <?= NBR_MIN ?> et <?= NBR_MAX ?>
                <br>
                <input type="text" name="nbr">
                <p>
                <input type="submit" name="test" value="Tester">
                <br>
                </p>
                <input type="hidden" value="<?= $nombre ?>"> 
            </label>
        </form>
    </body>
</html>
