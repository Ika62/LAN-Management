<?php
	include('../header.php');
?>

<?php

	//Préparation de la requête d'insertion (SQL)

	$req = $bdd -> prepare('INSERT INTO game VALUES(NULL, :equipe1, :equipe2, :serveur, :format, null, null, null, null, null)');

	//On lie chaque marqueur a une valeur (ici juste :nom)

	$req -> bindValue(':equipe1', $_POST['equipe1'], PDO::PARAM_STR); //Ici, on prend la valeur dans le value et on le met dans equipe1.

	$req -> bindValue(':equipe2', $_POST['equipe2'], PDO::PARAM_STR);

	$req -> bindValue(':serveur', $_POST['serveur'], PDO::PARAM_STR);

	$req -> bindValue(':format', $_POST['format'], PDO::PARAM_STR);

	//Maintenant on exécute la reqûete

	$req -> execute();

	var_dump($req);

	// rediriger vers gestion.php comme ceci :

	header('Location: gestion_match.php');
?>

<?php
	include('../footer.php');
?>
