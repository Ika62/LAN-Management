<?php
	include('./header.php');
?>


		<div id="gestionCss">
		<a href = "equipe/gestion.php" class="btn btn-default">Gestion des équipes</a></p>

		<a href = "match/gestion_match.php" class="btn btn-default">Gestion match</a></br>
		</div>

		<div id="listeEquipe">Liste des équipes</br></br>

		<?php //Ici on insert la liste des équipes.

			$equipe = $bdd -> query('SELECT ID, nom FROM equipe ORDER BY ID ');
			while ($donnee = $equipe -> fetch() )
			{
				echo 	'<li>'
							.$donnee['nom'].'
						</li>';

			}

			$equipe -> closeCursor();

		?>

		</div>

		<div id="listeMatch">Liste des matchs</br></br><center>

		<?php //Ici on insert la liste des matchs.

			$game = $bdd -> query('SELECT ID, equipe1, equipe2, serveur FROM game ORDER BY ID '); //Query = recherche
			while ($donnee = $game -> fetch() )
			{
				echo	'<a href="feuille_match/match.php?numMatch='.$donnee['ID'].'">'.$donnee['equipe1'].
						'<center> VS </center>'
						.$donnee['equipe2'].'</a>
						</br>';

			}

			$game -> closeCursor();

		?>
		</center>
		</div>


		<?php
			include('./footer.php');
		?>
