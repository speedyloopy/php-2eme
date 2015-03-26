<!DOCTYPE html>
    <html>
        <head>
            <title>Ex2.2a</title>
        </head>
        <body>
            <h1>Inscris-toi!</h1>
            <form name="form1" method="post" action="ajout_utilisateur_post.php">
                <p>Login</p>
                <INPUT type=text  name="login"></br>
                <p>Mot de passe</p>
                <INPUT type=password name="password"></br>
                <p>Majeur</p>
                <SELECT name="majeur">
                    <OPTION value="1">OUI</OPTION>
                    <OPTION value="0">NON</OPTION>
                </SELECT></br>
                <p>Type</p>
                Femme:<INPUT type=radio name="sexe" value="Femme">
                Homme:<INPUT type=radio name="sexe" value="Homme">
                <p>Options</p>
                Lettre de nouvelle:<INPUT type=checkbox name="nouvelle" value="oui">
                Membre de soutien:<INPUT type=checkbox name="soutien" value="oui"></br>
                <INPUT type=submit name="submit" value="submit">
            </form>
        </body>
    </html>
