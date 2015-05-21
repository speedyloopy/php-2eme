<!DOCTYPE html>
<html>
    <head>
          <meta charset="UTF-8">
          <title>Formulaire php</title>
      </head>
    <body>
        <h1>Choisissez un chiffre</h1>
        
        
        <!--pour l'envoi du formulaire à resultat.php-->
        <form name="form1" method="post" action="resultat.php">
            
            
            <label>
                <p>choisissez un chiffre entre 2 et 16 </p>
                
                
                <!--où l'utilisateur va entrer le nombre-->
                <input type="number" name="nombre" min="2" max="16">
                
                
                <!--bouton submit-->
                <input type="submit" name="test" value="Tester"> 
            </label>
        </form>
    </body>
</html>
