<!DOCTYPE html>
<html lang="fr">
<html>
	<head>
		<title></title>
		 <meta charset="utf-8" />
	</head>
	<?php
		include '../header.php';
	?>
	<body>
			<?php

				// '!' avant le 'isset' remplace le '==false'
				if (!isset($_POST['nom'])
					OR !isset($_POST['prenom'])
					OR !isset($_POST['civilite'])
					OR !isset($_POST['anniverssaire'])
					OR !isset($_POST['tel'])
					OR !isset($_POST['email']))
				{
					echo "Merci de completer le formulaire";
				}
				else
				{
						// strlen donne la taille de la chaine de caractaire
						// trim supprime les espaces
						if (strlen(trim($_POST['nom'])) == 0
							OR strlen(trim($_POST['prenom'])) == 0
							OR strlen(trim($_POST['civilite'])) == 0
							OR strlen(trim($_POST['anniverssaire'])) == 0
							OR strlen(trim($_POST['tel'])) == 0
							OR strlen(trim($_POST['email'])) == 0)
						{
							echo "Arrete de jouer au con et remplie ca serieusement";
						}
					else if (!is_string($_POST['prenom'])
						OR !is_string($_POST['nom'])
						OR !ctype_digit($_POST['tel']))
					{
						echo "Rentre les bon caractaire dans les bon champs ou je te tape";
					}
					else
					{
						echo "Bonjour " . htmlspecialchars($_POST['nom']);
						echo " ".htmlspecialchars($_POST['prenom']). ".";
						echo "</br>";
						echo "Vous etes né le " . htmlspecialchars($_POST['anniverssaire']) . ".";
						echo "</br>";
						echo "C'est tres sexy d'etre de sexe " . htmlspecialchars($_POST['civilite']) . " à cette periode.";
					}
				}



			?>
		<form action="formulaire.php">
			<p><input type="submit" name="" value="Retour"></p>
		</form>
	</body>
</html>
