<?php
	include('../header.php');
?>

<?php

	//Préparation de la requête d'insertion (SQL)

	$req = $bdd -> prepare('INSERT INTO equipe VALUES(NULL, :nom)');

	//On lie chaque marqueur a une valeur (ici juste :nom)

	$req -> bindValue(':nom', $_POST['nomEquipe'], PDO::PARAM_STR); //LE PDO::PARAM_STR ==>

	//Maintenant on exécute la reqûete

	$req -> execute();



	// rediriger vers gestion.php comme ceci :
	header('Location: gestion.php');
?>

<?php
	include('../footer.php');
?>
