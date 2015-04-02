 <?php
$prenom = ' ';

if (! empty($_GET['prenom'])){
    
    $prenom = $_GET['prenom'];
    
} else {
    
    
    
    if(! empty($_POST['prenom'])){
        
        $prenom = $_POST['prenom'];
    } else {
        
        $prenom = 'Nom défini, vous devez passer par get.php ou post.php'; 
    }
}
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Ex3</title>
            <meta charset="utf-8"/>
        </head>
        <body>
            <h1>Voici les valeurs transmises par l'utilisateur</h1>
            <p>Nom: <?= $prenom ?></p>
        </body>
    </html>
