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
		<br>
		<form action="cible_connexion.php" method="POST">
			<p>
				<label for="prenom">Votre nom* : </label> 	<!-- 'for' recupere le 'id' qui est dans 'input' -->
				<input type="text" name="nom" id="nom" placeholder="Entrer votre nom" /> <!--required="required"-->
			</p><p>
				<label for="prenom">Votre prenom* : </label> 	<!-- 'for' recupere le 'id' qui est dans 'input' -->
				<input type="text" name="prenom" id="prenom" placeholder="Entrer votre prenom" /> <!--required="required"-->
			</p><p>
				<input type="radio" name="civilite" id="masculin" value="masculin"/>
				<label for="masculin">Mr</label>

				<input type="radio" name="civilite" id="mme" value="feminin"/>
				<label for="mme">Mme</label>

				<input type="radio" name="civilite" id="mlle" value="feminin"/>
				<label for="mlle">Mlle</label>
			</p><p>
				<label for="anniverssaire">Date d'anniverssaire : </label>
				<input type="date" name="anniverssaire" id="anniverssaire" />
			</p><p>
				<label for="tel">Votre téléphone* : </label>
				<input type="tel" name="tel" id="tel" placeholder="Entrer votre numéro"/> <!--required="required"-->
			</p><p>
				<label for="email">Votre mail* : </label>
				<input type="email" name="email" id="email" placeholder="Entrer votre email"/> <!--required="required"-->
			</p>
			<p>
				<input type="submit" name="" value="Valider votre inscription" />
			</p>

	</form>
	</body>
</html>
