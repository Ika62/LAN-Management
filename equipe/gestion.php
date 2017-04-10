<?php
	include('../header.php');
?>

		<div id = "gestionEquipe">Gestion des équipes</br></br>

			<form action="gestion_post.php" method="POST">

				<div id="add">

					<label for="add">Ajouter une équipe</label>
					<input id="equipe" type="text" name="nomEquipe">
					<input type="submit" value = "Ajouter" >

				</div>

			</form>

		</div>
		</br>

		<?php //Ici on insert la liste des équipes.

			$equipe = $bdd -> query('SELECT ID, nom FROM equipe ORDER BY ID ');
			while ($donnee = $equipe -> fetch() )
			{
				echo 	$donnee['nom'].'

				<!-- On ajoute un lien pour modifier -->
				<a href = "form_modification.php?numEquipe=' .$donnee['ID'].'">Modifier</a>

				<!-- On ajoute un lien pour supprimer -->
				<a href = "supprimer.php?numEquipe=' .$donnee['ID'].'">Supprimer</a></br>';

			}

			$equipe -> closeCursor();

			?>

			<?php
				include('../footer.php');
			?>
