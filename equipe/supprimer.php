<?php
	include('../header.php');
?>

<?php

	//Préparation de la requête

	$req = $bdd -> prepare('DELETE FROM equipe WHERE id=:num LIMIT 1');

	//Lier le paramètre num

	$req -> bindValue(':num', $_GET['numEquipe'], PDO::PARAM_INT); //numEquipe est ce qu'on met dans le HREF

	//Exécution de la requête

	$req -> execute();

	// rediriger vers gestion.php comme ceci :
	header('Location: gestion.php');

?>

<?php
	include('../footer.php');
?>
