<?php
	include('../header.php');
?>

<?php

	//Préparation de la requête

	$req = $bdd -> prepare('SELECT * FROM equipe WHERE ID = :num');

	//Liaison des paramètres nommés

	$req -> bindValue (':num', $_GET['numEquipe'], PDO::PARAM_INT);

	//Exécution de la requête

	$req -> execute();

	//On récupère l'équipe

	$equipe = $req -> fetch();

?>

		<h1>Modifier une équipe</h1>

		<form action="modifier_equipe.php" method="post">
			<input type="hidden" name="numEquipe" value="<?= $equipe['ID'] ?>" >

			<p>

				<label for="nom">Nom de l'équipe</label>
				<input id="nom" type="text" name="nomEquipe" value="<?= $equipe['nom']; ?>">

			</p>


			<p>
				<input type="submit" value="Enregistrer la modification">
			</p>

		</form>


		<?php
			include('../footer.php');
		?>
