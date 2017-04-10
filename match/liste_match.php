<?php
	include('../header.php');
?>

		<div id="listeMatchs">Liste des matchs</br></br>

		<?php //Ici on insert la liste des matchs.

			$game = $bdd -> query('SELECT ID, equipe1, equipe2, serveur FROM game ORDER BY ID ');
			while ($donnee = $game -> fetch() )
			{
				echo	$donnee['equipe1'].
						' VS '.$donnee['equipe2'].
						'  Serveur : '.
						$donnee['serveur'].
						'<a href = "supprimer_match.php?numMatch=' .$donnee['ID'].'">Supprimer</a></br>';

			}

			$game -> closeCursor();

		?>

		</div>

		<?php
			include('../footer.php');
		?>
