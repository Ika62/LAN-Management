<?php
	include('../header.php');
?>


<?php

	//Préparation de la requête

	$req = $bdd -> prepare('UPDATE equipe set nom=:nom WHERE id=:num LIMIT 1');

	//Liaison des paramètres nommés

	$req -> bindValue (':num', $_POST['numEquipe'], PDO::PARAM_INT);

	$req -> bindValue (':nom', $_POST['nomEquipe'], PDO::PARAM_STR);

	//Exécution de la requête

	$req -> execute();


	// rediriger vers gestion.php comme ceci :
	header('Location: gestion.php');

?>

<?php
	include('../footer.php');
?>
