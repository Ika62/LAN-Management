<?php
	include('../header.php');
?>

<?php

	//Préparation de la requête

	$req = $bdd -> prepare('DELETE FROM game WHERE id=:num LIMIT 1');

	//Lier le paramètre num

	$req -> bindValue(':num', $_GET['numMatch'], PDO::PARAM_INT); //numMatch est ce qu'on met dans le HREF

	//Exécution de la requête

	$req -> execute();

	// rediriger vers liste_match.php comme ceci

	header('Location: liste_match.php');

?>


<?php
	include('../footer.php');
?>
