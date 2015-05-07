<?php
/*déclaration des variables*/
$nombre= $_POST['nombre'];


?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>résultat</title>
	</head>
	<body>
		<table border=1> 

		<?php
		echo "<h1>Table de multiplication en base $nombre</h1>"; // Nom du tableau

		echo "<tr><th>x</th>"; // Cellule en haut à gauche


		for($i=0;$i<$nombre;$i++) // variables pour les colonnes
			echo "<th>$i</th>";

			echo "</tr>\n";


			for($j=0;$j<$nombre;$j++) // variables pour les lignes
			{
		 	 	echo "<tr><th>$j</th>";
		 		 for($i=0;$i<$nombre;$i++)

		  	{


				$hex= ($j*$i);
				$convert = base_convert($hex, 10, $nombre); //Convertit les nombres en base du nombre choisi

		    	echo "<td>".$convert."</td>"; // Affichage dans les cellules
		  }
		}
		?>

		</table>
		<br>
		<table border=1> 
		<?php
		echo "<h1>Table d'addition en base $nombre</h1>"; // Titre du tableau

		echo "<tr><th>+</th>"; // Cellule haut gauche
		
        for($i=0;$i<$nombre;$i++)// variables pour les colonnes
			echo "<th>$i</th>";
			echo "</tr>\n";


			for($j=0;$j<$nombre;$j++) // variables pour les lignes
			{

			  echo "<tr><th>$j</th>";
				  for($i=0;$i<$nombre;$i++)
				  {

					$hex= ($j+$i);
					$convert = base_convert($hex, 10, $nombre);//Convertit les nombres en base du nombre choisi

				    echo "<td>".$convert."</td>"; // Affichage dans les cellules
				     

				}

			}


		?>

		</table>
	<body>
</html>


